<?php

declare(strict_types=1);

use RedBeanPHP\R;

require_once './vendor/autoload.php';

R::setup('mysql:host=localhost;dbname=fitpuppy_dev', 'root', ''); //for both mysql or mariaDB
//turns debugging ON (classic)
R::debug(TRUE, 1);

if (route_is('POST', '/calcular_relatorio')) {
   header('Content-type: application/json');
   $body_request = $_POST['cachorros'];
   $dados_orcamento = json_decode($body_request);
   echo json_encode(gera_relatorio($dados_orcamento));
}

/**
 * Função que gera quantidade em quilos e valor por quilo para N cachorros
 * 
 */

function gera_relatorio($dados_orcamento)
{
   $total_g = 0;

   foreach ($dados_orcamento as $key => $cachorro) {
      $relatorio[] = calcula_racao_mensal($cachorro);
      $total_g += $relatorio[$key]['porcao_mensal'];
   }

   $tabela_precos = R::getRow(
      'SELECT * from tabelaprecos 
   WHERE :peso > kg_min AND :peso <= kg_max LIMIT 1',
      [':peso' => $cachorro->peso]
   );

   $relatorio['sumario']['desconto'] = $tabela_precos['desconto'] * 100;
   $relatorio['sumario']['valor_kg'] = $tabela_precos['preco'];
   $relatorio['sumario']['total_de_kgs'] = ($total_g / 1000);
   $relatorio['sumario']['total_de_gramas'] = $total_g;
   $relatorio['sumario']['valor_total'] = $tabela_precos['preco'] *  $relatorio['sumario']['total_de_kgs'];
   return $relatorio;
}

/**
 * Calcula os Kgs para um cachorro diário e mensalmente
 */

function calcula_racao_mensal($cachorro)
{
   $cachorro->nascimento = date_create($cachorro->data_nascimento);
   $interval = date_create('now')->diff($cachorro->nascimento);
   $idade_meses = $interval->m + ($interval->y * 12);

   if ($cachorro->faixa_etaria === 1) {

      $query_result = R::getRow(
         'SELECT * from tabelafilhotes WHERE :idade > idade_min_meses
         AND :idade <= idade_max_meses AND porte_adulto = :porte LIMIT 1',
         [
            ':idade' => $idade_meses,
            ':porte' => $cachorro->porte_adulto
         ]
      );
      if ($query_result != null) {
         $query_result['porcao_diaria'] = $query_result['percentagem'] * ($cachorro->peso * 1000);
         $query_result['porcao_mensal'] = $query_result['porcao_diaria'] * 30;
      }
   } else {
      $query_result = R::getRow(
         'SELECT * from tabelaadultos WHERE :peso >= peso_min AND 
      :peso <= peso_max AND :nivel_atividade = nivel_atividade',
         [
            ':nivel_atividade' => $cachorro->nivel_atividade,
            ':estado_fisico' => $cachorro->estado_fisico,
            ':peso' => $cachorro->peso,
         ]
      );

      if ($query_result != null) {
         $query_result['porcao_diaria'] = $query_result['percentagem'] * ($cachorro->peso * 1000);
         $query_result['porcao_mensal'] = $query_result['porcao_diaria'] * 30;
      }
   }

   if ($query_result == null) {
      $query_result["mensagem"] = "Não encontramos resultado na tabela para: filhotes com {$idade_meses} meses e de porte {$cachorro->porte_adulto} ";
   }
   return $query_result;
}
