<?php
$config = require 'config.php';
header("Content-Type: text/plain; charset=utf-8");

$token = $config['token'];
$song_id = $_GET['id'] ?? null;
$type = $_GET['type'] ?? 'full'; // Pode ser 'full' ou 'clear'

if (!$song_id) {
    echo "Erro: nenhum ID de música foi fornecido.";
    exit;
}

// 1. Buscar dados da música pela API
$api_url = "https://api.genius.com/songs/$song_id";
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $token",
    "User-Agent: Mozilla/5.0"
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);
if (!isset($data['response']['song']['path'])) {
    echo "Erro: caminho da música não encontrado.";
    exit;
}

$path = $data['response']['song']['path'];
$lyrics_url = "https://genius.com$path";

// 2. Baixar a página da letra
function getPageContent($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $html = curl_exec($ch);
    curl_close($ch);
    return $html;
}

$html = getPageContent($lyrics_url);
















// 3. Extrair letra dos <div data-lyrics-container="true">
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();

$xpath = new DOMXPath($dom);
$nodes = $xpath->query('//div[@data-lyrics-container="true"]');

$letra = '';

// Loop para extrair texto puro sem tags e ignorando filhos tipo div, button etc
foreach ($nodes as $node) {
    foreach ($node->childNodes as $child) {
        // Ignorar divs, botões, e outros elementos que não são versos
        if (in_array($child->nodeName, ['div', 'button'])) {
            continue;
        }
        // Para quebras de linha no HTML, geralmente <br>
        if ($child->nodeName === 'br') {
            $letra .= "\n";
            continue;
        }
        // Para nós de texto e spans, a gente pega o conteúdo textual limpo
        $text = trim($child->textContent);
        if ($text !== '') {
            $letra .= $text . "\n\n";
        }
    }
}















foreach ($nodes as $node) {
    if ($type === 'line') {
        $html_content = $node->ownerDocument->saveHTML($node);
        $letra = preg_replace('/\[[^\]]+\]/', '', $letra); // remove [Verso], etc.
        $texto = str_replace('<br>', "\n", $html_content);
        $texto = strip_tags($texto);
        $texto = preg_replace('/^\d+\s+Contributor.*?Lyrics/', '', $texto);
        $letra .= trim($texto) . "\n\n";
        $letra = preg_replace('/\n{3,}/', "\n\n", $letra); // máx. 1 linha em branco
    }
    if ($type === 'full') {
        $html_content = $node->ownerDocument->saveHTML($node);
        $texto = str_replace('<br>', "\n", $html_content);
        $texto = strip_tags($texto);
        $texto = preg_replace('/^\d+\s+Contributor.*?Lyrics/', '', $texto);
        $letra .= trim($texto) . "\n\n";
        $letra = preg_replace('/\n{3,}/', "\n\n", $letra); // máx. 1 linha em branco
    }
}


// 4. Limpeza final
if ($type === 'clear') {
    $letra = preg_replace('/^\d+\s+Contributor.*?Lyrics/', '', $letra);
    $letra = preg_replace('/\[[^\]]+\]/', '', $letra); // remove [Verso], etc.
    $letra = preg_replace('/\s+/', ' ', $letra); // compacta todos os espaços e quebras
}




echo trim($letra);

