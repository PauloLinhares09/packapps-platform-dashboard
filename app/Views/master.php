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
<body>
    <div id="sidebar">
        <!-- Substitua cada 'iconX.png' pelo caminho para o ícone correspondente -->
        <a href="<?= base_url('/home') ?>"><img src="../assets/package_2_FILL0_wght400_GRAD0_opsz24.png" alt="PackApps" style="margin-bottom: 20px;"></a>

        <a href="<?= base_url('/assistents') ?>"><img src="../assets/robot_2_FILL0_wght400_GRAD0_opsz24.png" alt="Assistentes"><span>Assistentes</span></a>
        <a href="<?= base_url('/playground') ?>"><img src="../assets/ar_stickers_FILL0_wght400_GRAD0_opsz24.png" alt="Testador de Assistente"><span>Testador de Assistente</span></a>
        <a href="<?=  base_url('/apikey')?>"><img src="../assets/passkey_FILL0_wght400_GRAD0_opsz24.png" alt="Chave de API"><span>Chave de API</span></a>
        <a href="#"><img src="../assets/thermostat_FILL0_wght400_GRAD0_opsz24.png" alt="Chave de API"><span>Leads Temperatura</span></a>
        <a href="#"><img src="../assets/leaderboard_FILL0_wght400_GRAD0_opsz24.png" alt="Créditos"><span>Créditos</span></a>

        <div id="sidebar-bottom">
            <!-- Substitua cada 'iconX.png' pelo caminho para o ícone correspondente -->
            <a href="#"><img src="../assets/person_raised_hand_FILL0_wght400_GRAD0_opsz24.png" alt="Ajuda"><span>Ajuda</span></a>
            <a href="#"><img src="../assets/developer_guide_FILL0_wght400_GRAD0_opsz24.png" alt="Guia"><span>Guia</span></a>
            <a href="#"><img src="../assets/account_circle_FILL0_wght400_GRAD0_opsz24.png" alt="Usuário"><span>Usuário</span></a>
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
