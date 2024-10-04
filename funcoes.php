<?php 

function saudacao() {
    date_default_timezone_set("America/Sao_Paulo");    
    $hora = date("G:i:s");
    $saudacao = '';
    if($hora >= "00:00:00" && $hora <="05:00:00") {
        $saudacao = "Boa Madrugada! São " . $hora;
    } elseif ($hora >= "06:00:00" && $hora <="12:00:00"){
        $saudacao = "Bom dia! São " . $hora;
    } elseif ($hora >="12:00:00" && $hora <="18:00:00") {
        $saudacao = 'Boa tarde! São ' . $hora;
    } else {
        $saudacao = 'Boa noite! São' . $hora;
    }

    return $saudacao;
}

function resumirTexto(string $texto, int $limite, string $continue = '...'){
    return $texto;
} 
?>