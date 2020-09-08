<?php
use RedBeanPHP\R;
require_once './vendor/autoload.php';

R::setup( 'mysql:host=localhost;dbname=fitpuppy_dev', 'root', '' ); 
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 2;
$tabela_filhotes->idade_max_meses = 4;
$tabela_filhotes->porte_adulto = 1;
$tabela_filhotes->percentagem = 0.10;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 2;
$tabela_filhotes->idade_max_meses = 4;
$tabela_filhotes->porte_adulto = 2;
$tabela_filhotes->percentagem = 0.10;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 2;
$tabela_filhotes->idade_max_meses = 4;
$tabela_filhotes->porte_adulto = 3;
$tabela_filhotes->percentagem = 0.08;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 2;
$tabela_filhotes->idade_max_meses = 4;
$tabela_filhotes->porte_adulto = 4;
$tabela_filhotes->percentagem = 0.08;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 4;
$tabela_filhotes->idade_max_meses = 6;
$tabela_filhotes->porte_adulto = 1;
$tabela_filhotes->percentagem = 0.08;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 4;
$tabela_filhotes->idade_max_meses = 6;
$tabela_filhotes->porte_adulto = 2;
$tabela_filhotes->percentagem = 0.08;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 4;
$tabela_filhotes->idade_max_meses = 6;
$tabela_filhotes->porte_adulto = 3;
$tabela_filhotes->percentagem = 0.07;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 4;
$tabela_filhotes->idade_max_meses = 6;
$tabela_filhotes->porte_adulto = 4;
$tabela_filhotes->percentagem = 0.07;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
/////////////////////////////////////////////////////////////
$tabela_filhotes->idade_min_meses = 6;
$tabela_filhotes->idade_max_meses = 8;
$tabela_filhotes->porte_adulto = 1;
$tabela_filhotes->percentagem = 0.065;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 6;
$tabela_filhotes->idade_max_meses = 8;
$tabela_filhotes->porte_adulto = 2;
$tabela_filhotes->percentagem = 0.06;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 6;
$tabela_filhotes->idade_max_meses = 8;
$tabela_filhotes->porte_adulto = 3;
$tabela_filhotes->percentagem = 0.06;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 6;
$tabela_filhotes->idade_max_meses = 8;
$tabela_filhotes->porte_adulto = 4;
$tabela_filhotes->percentagem = 0.06;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
////////////////////////////////////////////////////////
$tabela_filhotes->idade_min_meses = 8;
$tabela_filhotes->idade_max_meses = 10;
$tabela_filhotes->porte_adulto = 1;
$tabela_filhotes->percentagem = 0.55;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 8;
$tabela_filhotes->idade_max_meses = 10;
$tabela_filhotes->porte_adulto = 2;
$tabela_filhotes->percentagem = 0.05;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 8;
$tabela_filhotes->idade_max_meses = 10;
$tabela_filhotes->porte_adulto = 3;
$tabela_filhotes->percentagem = 0.05;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 8;
$tabela_filhotes->idade_max_meses = 10;
$tabela_filhotes->porte_adulto = 4;
$tabela_filhotes->percentagem = 0.05;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
//////////////////////////////////////////////////////
$tabela_filhotes->idade_min_meses = 10;
$tabela_filhotes->idade_max_meses = 18;
$tabela_filhotes->porte_adulto = 1;
$tabela_filhotes->percentagem = 0.045;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 10;
$tabela_filhotes->idade_max_meses = 18;
$tabela_filhotes->porte_adulto = 2;
$tabela_filhotes->percentagem = 0.045;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 10;
$tabela_filhotes->idade_max_meses = 18;
$tabela_filhotes->porte_adulto = 3;
$tabela_filhotes->percentagem = 0.04;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 10;
$tabela_filhotes->idade_max_meses = 18;
$tabela_filhotes->porte_adulto = 4;
$tabela_filhotes->percentagem = 0.04;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
////////////////////////////////////////////////////////
$tabela_filhotes->idade_min_meses = 18;
$tabela_filhotes->idade_max_meses = 24;
$tabela_filhotes->porte_adulto = 2;
$tabela_filhotes->percentagem = 0.04;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 18;
$tabela_filhotes->idade_max_meses = 24;
$tabela_filhotes->porte_adulto = 3;
$tabela_filhotes->percentagem = 0.0375;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
$tabela_filhotes->idade_min_meses = 18;
$tabela_filhotes->idade_max_meses = 24;
$tabela_filhotes->porte_adulto = 4;
$tabela_filhotes->percentagem =  0.0375;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
$tabela_filhotes = R::dispense( 'tabelafilhotes' );
////////////////////////////////////////////////////////
$tabela_filhotes->idade_min_meses = 24;
$tabela_filhotes->idade_max_meses = NULL;
$tabela_filhotes->porte_adulto = 4;
$tabela_filhotes->percentagem =  0.0375;
echo "registro " . R::store( $tabela_filhotes ) . " ok<br>";
//tabela adultos
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 0;
$tabela_adultos->peso_max = 3.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.06;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 0;
$tabela_adultos->peso_max = 3.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 0;
$tabela_adultos->peso_max = 3.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.07;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";

$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 0;
$tabela_adultos->peso_max = 3.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.05;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 0;
$tabela_adultos->peso_max = 3.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.06;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 0;
$tabela_adultos->peso_max = 3.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.07;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 0;
$tabela_adultos->peso_max = 3.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.05;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 0;
$tabela_adultos->peso_max = 3.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.055;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 0;
$tabela_adultos->peso_max = 3.0;
$tabela_adultos->nivel_atividade = 3; // 1 -     , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.06;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 3.0;
$tabela_adultos->peso_max = 5.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.045;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 3.0;
$tabela_adultos->peso_max = 5.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0475;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 3.0;
$tabela_adultos->peso_max = 5.0;
$tabela_adultos->nivel_atividade = 3; // 1 -     , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.05;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 3.0;
$tabela_adultos->peso_max = 5.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 3.0;
$tabela_adultos->peso_max = 5.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.045;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 3.0;
$tabela_adultos->peso_max = 5.0;
$tabela_adultos->nivel_atividade = 3; // 1 -     , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.05;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 3.0;
$tabela_adultos->peso_max = 5.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 3.0;
$tabela_adultos->peso_max = 5.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.0425;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 3.0;
$tabela_adultos->peso_max = 5.0;
$tabela_adultos->nivel_atividade = 3; // 1 -     , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.045;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 5.0;
$tabela_adultos->peso_max = 10.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 5.0;
$tabela_adultos->peso_max = 10.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.045;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 5.0;
$tabela_adultos->peso_max = 10.0;
$tabela_adultos->nivel_atividade = 3; // 1 -     , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.05;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";

///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 5.0;
$tabela_adultos->peso_max = 10.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 5.0;
$tabela_adultos->peso_max = 10.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 5.0;
$tabela_adultos->peso_max = 10.0;
$tabela_adultos->nivel_atividade = 3; // 1 -     , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.05;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 5.0;
$tabela_adultos->peso_max = 10.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 5.0;
$tabela_adultos->peso_max = 10.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 5.0;
$tabela_adultos->peso_max = 10.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 10.0;
$tabela_adultos->peso_max = 15.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 10.0;
$tabela_adultos->peso_max = 15.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0425;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 10.0;
$tabela_adultos->peso_max = 15.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.045;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
//////////////////////////

///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 10.0;
$tabela_adultos->peso_max = 15.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 10.0;
$tabela_adultos->peso_max = 15.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 10.0;
$tabela_adultos->peso_max = 15.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.045;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 10.0;
$tabela_adultos->peso_max = 15.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 10.0;
$tabela_adultos->peso_max = 15.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 10.0;
$tabela_adultos->peso_max = 15.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 15.0;
$tabela_adultos->peso_max = 20.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 15.0;
$tabela_adultos->peso_max = 20.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 15.0;
$tabela_adultos->peso_max = 20.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0425;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////

$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 15.0;
$tabela_adultos->peso_max = 20.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 15.0;
$tabela_adultos->peso_max = 20.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 15.0;
$tabela_adultos->peso_max = 20.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.0425;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 15.0;
$tabela_adultos->peso_max = 20.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 15.0;
$tabela_adultos->peso_max = 20.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.036;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 15.0;
$tabela_adultos->peso_max = 20.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 20.0;
$tabela_adultos->peso_max = 25.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 20.0;
$tabela_adultos->peso_max = 25.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 20.0;
$tabela_adultos->peso_max = 25.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0425;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 20.0;
$tabela_adultos->peso_max = 25.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 20.0;
$tabela_adultos->peso_max = 25.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 20.0;
$tabela_adultos->peso_max = 25.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.0425;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 20.0;
$tabela_adultos->peso_max = 25.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 20.0;
$tabela_adultos->peso_max = 25.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.036;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 20.0;
$tabela_adultos->peso_max = 25.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.04;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.0325;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.4;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.325;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.0335;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.35;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 35.0;
$tabela_adultos->peso_max = 42.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.036;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 35.0;
$tabela_adultos->peso_max = 42.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.03;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.0375;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 35.0;
$tabela_adultos->peso_max = 42.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.03;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.0335;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 25.0;
$tabela_adultos->peso_max = 35.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 42.0;
$tabela_adultos->peso_max = 100.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.0325;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 42.0;
$tabela_adultos->peso_max = 100.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.034;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 42.0;
$tabela_adultos->peso_max = 100.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 1;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 42.0;
$tabela_adultos->peso_max = 100.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.03;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 42.0;
$tabela_adultos->peso_max = 100.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.0325;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 42.0;
$tabela_adultos->peso_max = 100.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 2;
$tabela_adultos->percentagem =  0.035;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 42.0;
$tabela_adultos->peso_max = 100.0;
$tabela_adultos->nivel_atividade = 1; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.03;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 42.0;
$tabela_adultos->peso_max = 100.0;
$tabela_adultos->nivel_atividade = 2; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.0310;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
$tabela_adultos = R::dispense( 'tabelaadultos' );
$tabela_adultos->peso_min = 42.0;
$tabela_adultos->peso_max = 100.0;
$tabela_adultos->nivel_atividade = 3; // 1 - pouco ativo , 2 - normal, 3 - muito ativo 
$tabela_adultos->estado_fisico = 3;
$tabela_adultos->percentagem =  0.0325;
echo "registro " . R::store( $tabela_adultos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_precos = R::dispense( 'tabelaprecos' );
$tabela_precos->kg_min = NULL;
$tabela_precos->kg_max = NULL;
$tabela_precos->preco = 34.90;
$tabela_precos->desconto = 0;
echo "registro " . R::store( $tabela_precos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_precos = R::dispense( 'tabelaprecos' );
$tabela_precos->kg_min = 0;
$tabela_precos->kg_max = 5;
$tabela_precos->preco = 31.41;
$tabela_precos->desconto = 0.10;
echo "registro " . R::store( $tabela_precos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_precos = R::dispense( 'tabelaprecos' );
$tabela_precos->kg_min = 5;
$tabela_precos->kg_max = 10;
$tabela_precos->preco = 29.67;
$tabela_precos->desconto = 0.15;
echo "registro " . R::store( $tabela_precos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_precos = R::dispense( 'tabelaprecos' );
$tabela_precos->kg_min = 10;
$tabela_precos->kg_max = 15;
$tabela_precos->preco = 27.92;
$tabela_precos->desconto = 0.20;
echo "registro " . R::store( $tabela_precos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_precos = R::dispense( 'tabelaprecos' );
$tabela_precos->kg_min = 15;
$tabela_precos->kg_max = 20;
$tabela_precos->preco = 26.18;
$tabela_precos->desconto = 0.25;
echo "registro " . R::store( $tabela_precos ) . " ok<br>";
///////////////////////////////////////////////////////////////
$tabela_precos = R::dispense( 'tabelaprecos' );
$tabela_precos->kg_min = 20;
$tabela_precos->kg_max = 10000;
$tabela_precos->preco = 24.43;
$tabela_precos->desconto = 0.30;
echo "registro " . R::store( $tabela_precos ) . " ok<br>";