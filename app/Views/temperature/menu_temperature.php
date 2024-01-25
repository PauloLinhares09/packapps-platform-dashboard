
    <style>
        #sidebar-submenu {
            width: 100%;
            background-color: #fff;
            
        }

        #sidebar-submenu a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333;
            padding: 10px;
        }

        #sidebar-submenu a img {
            width: 24px;
            margin-right: 10px;
        }

        #sidebar-submenu:hover a span {
            display: inline;
        }

        .item-ativo {
            border-left: 4px solid #007bff; /* Cor da borda */    
        }

    </style>


<?php 
    $request = \Config\Services::request();
    $uriPath = $request->getPath();

    $leads = false;
    $clients = false;
    $campaigns = false;
    $sendMessage = false;
    
    if ($uriPath === 'temperature/leads') {
        $leads = true;
    } else if ($uriPath === 'temperature/clients') {
        $clients = true;
    } else if ($uriPath === 'temperature/campaigns') {
        $campaigns = true;
    } else if ($uriPath === 'temperature/sendMessage') {
        $sendMessage = true;
    } 
       
?>

    
        
    <!-- Content here -->
    <div id="sidebar-submenu">        
        <a href="<?= base_url('/temperature/leads') ?>" <?= $leads == true ? "class=\"item-ativo\"" : "" ?> ><img src="../assets/robot_2_FILL0_wght400_GRAD0_opsz24.png" alt="Leads">Leads</a>
        <a href="<?= base_url('/temperature/clients') ?>" <?= $clients == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/ar_stickers_FILL0_wght400_GRAD0_opsz24.png" alt="Clientes">Clientes</a>

        <div style="height: 5px; margin-bottom: 30px; border-bottom: 1px solid #eaecef;"></div>
        
        <a href="<?= base_url('/temperature/campaigns') ?>" <?= $campaigns == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/robot_2_FILL0_wght400_GRAD0_opsz24.png" alt="Leads">Campanhas</a>
        <a href="<?= base_url('/temperature/sendMessage') ?>" <?= $sendMessage == true ? "class=\"item-ativo\"" : "" ?>><img src="../assets/robot_2_FILL0_wght400_GRAD0_opsz24.png" alt="Leads">Mensagem em massa</a>
    </div>
    




