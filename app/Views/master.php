<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/list-style.css">
    <title><?= $this->renderSection('title') . ' - PackApps AI Platform' ?: 'PackApps AI Platform' ?> </title>

    <?= $this->renderSection('style') ?>
    <?= $this->renderSection('style-floating-right-component') ?>
    
</head>
<?php 
    $request = \Config\Services::request();
    $uriPath = $request->getPath();

    $assistents = false;
    $playground = false;
    $temperature = false;
    $apiKeys = false;
    $credits = false;
    $help = false;
    $guide = false;
    $user = false;
    
    if ($uriPath === 'assistents') {
        $assistents = true;
    } else if ($uriPath === 'playground') {
        $playground = true;
    } else if ($uriPath === 'apikey') {
        $apiKeys = true;
    } else if (strpos($uriPath, 'temperature') !== false) {
        $temperature = true;
    } else if ($uriPath === 'credits') {
        $credits = true;
    } else if ($uriPath === 'help') {
        $help = true;
    } else if ($uriPath === 'guide') {
        $guide = true;
    } else if ($uriPath === 'user') {
        $user = true;
    }
    
    
       
?>
<body>
    <div id="sidebar">
        <!-- Substitua cada 'iconX.png' pelo caminho para o ícone correspondente -->
        <a href="<?= base_url('/home') ?>"><img src="../assets/package_2_FILL0_wght400_GRAD0_opsz24.png" alt="PackApps" style="margin-bottom: 20px;"></a>

        <a href="<?= base_url('/assistents') ?>" <?= $assistents == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/robot_2_FILL0_wght400_GRAD0_opsz24.png" alt="Assistentes"><span>Assistentes</span></a>
        <a href="<?= base_url('/playground') ?>" <?= $playground == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/ar_stickers_FILL0_wght400_GRAD0_opsz24.png" alt="Testador de Assistente"><span>Testador de Assistente</span></a>
        <a href="<?=  base_url('/apikey')?>" <?= $apiKeys == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/passkey_FILL0_wght400_GRAD0_opsz24.png" alt="Chave de API"><span>Chave de API</span></a>
        <a href="<?=  base_url('/temperature/leads')?>" <?= $temperature == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/thermostat_FILL0_wght400_GRAD0_opsz24.png" alt="Chave de API"><span>Leads Temperatura</span></a>
        <a href="#" <?= $credits == true ? "class=\"item-ativo\"" : "" ?> ><img src="../assets/leaderboard_FILL0_wght400_GRAD0_opsz24.png" alt="Créditos"><span>Créditos</span></a>

        <div id="sidebar-bottom">
            <!-- Substitua cada 'iconX.png' pelo caminho para o ícone correspondente -->
            <a href="#" <?= $help == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/person_raised_hand_FILL0_wght400_GRAD0_opsz24.png" alt="Ajuda"><span>Ajuda</span></a>
            <a href="#" <?= $guide == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/developer_guide_FILL0_wght400_GRAD0_opsz24.png" alt="Guia"><span>Guia</span></a>
            <a href="#" <?= $user == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/account_circle_FILL0_wght400_GRAD0_opsz24.png" alt="Usuário"><span>Usuário</span></a>
        </div>
    </div>
    <header>
        <!-- Conteúdo do cabeçalho aqui -->
        <!-- <h2>PackApps AI Platform</h2> -->
        <?= $this->renderSection('header') ?>
    </header>

    <div id="main-content">
        <?= $this->renderSection('content') ?>
    </div>
    <footer>
        <!-- Conteúdo do footer aqui -->
        <?= $this->renderSection('footer') ?>
    </footer>

    <!-- Modal Right -->
    <?= $this->renderSection('floating-right-component') ?>
</body>
</html>
