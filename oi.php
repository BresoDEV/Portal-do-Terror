<?php
/**
 * Resolve um link de compartilhamento do MediaFire e retorna o link direto do arquivo.
 * Exemplo de uso:
 *   resolvemed.php?url=https://www.mediafire.com/file/XXXXXX/arquivo.mp4
 */

function getMediafireDirectLink($shareUrl) {
    // Inicializa cURL para pegar o HTML da página do MediaFire
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $shareUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    $html = curl_exec($ch);
    curl_close($ch);

    if (!$html) {
        return false;
    }

    // Procura pelo link direto no HTML (o botão de download contém esse link)
    if (preg_match('/href="(https?:\/\/download[^\"]+)"/i', $html, $matches)) {
        return html_entity_decode($matches[1]);
    }

    return false;
}

$shareUrl = 'https://www.mediafire.com/file/xmkz9qousq2ah47/Halloween+j10+2.mkv/file';
    $directLink = getMediafireDirectLink($shareUrl);

    if ($directLink) {
        // Mostra pronto para usar em HTML <video>
       echo $directLink;
    } else {
        echo "Não foi possível resolver o link.";
    }