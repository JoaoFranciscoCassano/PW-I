<?php

// Verificação da Variavel setada
if(isset($_GET['ordem'])) {
    $ordem = $_GET['ordem'];
}

$tipo = "nome";

if(isset($_GET['tipo'])){
    $tipo = $_GET['tipo'];
}


$cidades["Falcão Peregrino - Falco peregrinus"] = '387.2';
$cidades["Andorinhões - Apodidae"] = '169.6';
$cidades["Guepardo - Acinonyx jubatus"] = '112';
$cidades["Peixe-Vela - Istiophorus albicans"] = '108.8';
$cidades["Antilocapra - Antilocapra americana"] = '97.6';
$cidades["Espadarte - Xiphias gladius"] = '96';
$cidades["Leão - Panthera leo"] = '80';
$cidades["Marlim - Istiophoridae"] = '80';
$cidades["Gnu - Connochaetes"] = '80';
$cidades["Gazela-de-Thomson - Eudorcas thomsonii"] = '80';
$cidades["Lebre - Lepus europaeus"] = '76.8';
$cidades["Raposa-Vermelha - Vulpes vulpes"] = '76.8';
$cidades["Cavala-Wahoo - Acanthocybium solandri"] = '76.5';
$cidades["Quarto de Milha - Equus caballus"] = '76';
$cidades["Gazela-de-Grant - Nanger granti"] = '75.2';
$cidades["Atum-Rabilho - Thunnus thynnus"] = '73.6';
$cidades["Cão-Selvagem-Africano - Lycaon pictus"] = '72';
$cidades["Coiote - Canis latrans"] = '69';
$cidades["Zebra - Equus zebra"] = '64';
$cidades["Albacora-Cachorra - Thunnus albacares"] = '47.6';

// arsort, asort, ksort, krsort
if($tipo == 'nome' && $ordem == 'desc'){
    krsort($cidades);
}
elseif($tipo == 'sigla' && $ordem == 'desc'){
    arsort($cidades);   
}

elseif($tipo == 'nome' && $ordem == 'asc'){
    ksort($cidades);
}

else{
    asort($cidades);
}


?>