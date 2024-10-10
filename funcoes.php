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
/**
 * @param string $texto texto para resumir
 * @param int $limite quantidade de caracteres
 * @param string $continue opcional - o que deve ser exibido ao final do resumo
 * @return string texto resumido
 */
function resumirTexto(string $texto, int $limite, string $continue = '...'): string {

    $textoLimpo = trim(strip_tags($texto));
    if(mb_strlen($textoLimpo)<=$limite){
        return $textoLimpo;
    }
    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto.$continue;
} 
?>