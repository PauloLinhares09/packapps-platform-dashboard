<?= $this->extend('master') ?>

<?= $this->section('style') ?>
<?= $this->renderSection('style-floating-component') ?>
<?= $this->endSection() ?>

<?= $this->section('title') ?>Assistentes<?= $this->endSection()?>


<!-- Header  -->
<?= $this->section('header') ?>
<div class="content-header">
    <h2>Assistentes</h2>
        <button class="create-button">
            <a href="<?= base_url('/assistents/create') ?>"><img src="../assets/add_FILL0_wght400_GRAD0_opsz24.png" alt="Ícone">Criar</a>
        </button>
    </div>
<?= $this->endSection() ?>


<!-- Content -->
<?= $this->section('content') ?>

<div class="content-section">        
        <div class="data-table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Prompt</th>
                        <th>Criado</th>
                        <th>Atualizado</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <td>Assistente A</td>
                        <td>Prompt Exemplo</td>
                        <td>01/01/2024</td>
                        <td>20/01/2024</td>
                        <td>Sim</td>
                        <td>
                            <img src="../assets/more_vert_FILL0_wght400_GRAD0_opsz24.png" class="action-icon" onclick="showModal(this)">
                            <div class="modal">
                                <a href="#">Testar</a>
                                <a href="#">Editar</a>
                                <a href="#">Deletar</a>
                            </div>
                        </td>
                    </tr>
                    <!-- Outras linhas... -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Função para exibir a modal
        function showModal(icon) {
            var modal = icon.nextElementSibling;
            modal.style.display = 'block';
            window.onclick = function(event) {
                if (event.target !== icon && event.target !== modal) {
                    modal.style.display = 'none';
                }
            }
        }
    </script>

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<!-- Footer here -->
<?= $this->endSection() ?>


<!-- Modal Right -->
<!-- <?= $this->renderSection('floating-right-component') ?> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>PackApps Platform</title>
    <style>
        /* Estilo da view lateral */
        #custom-view {
            position: fixed;
            right: 0;
            top: 0;
            width: 30%;
            height: 100%;
            border-left: 1px solid #ccc;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            background-color: white;
            overflow-y: auto;
            z-index: 1000; /* Garante que a view fique por cima do conteúdo existente */
        }

        /* Transparência para o restante da página */
        #custom-view + * {
            width: 70%;
            opacity: 0.5;
        }

        /* Estilo do header da view */
        #custom-view-header {
            padding: 20px;
            border-bottom: 1px solid #ccc;
            display: flex;
            align-items: center;
        }

        #close-icon {
            cursor: pointer;
        }

        /* Estilo do título do header */
        #custom-view-title {
            font-size: 20px;
            font-weight: bold;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <!-- Conteúdo existente da página -->
    <div id="sidebar">
        <!-- Conteúdo lateral aqui -->
    </div>
    <header>
        <!-- Conteúdo do cabeçalho aqui -->
    </header>
    <div id="main-content">
        <!-- Conteúdo principal aqui -->
    </div>
    <footer>
        <!-- Conteúdo do footer aqui -->
    </footer>

    <!-- View personalizada -->
    <div id="custom-view">
        <div id="custom-view-header">
            <img id="close-icon" src="../assets/close_FILL0_wght400_GRAD0_opsz24.png">
            <span id="custom-view-title">ActionBar Título</span>
        </div>

        <!-- Conteúdo da view aqui -->
        
        
    </div>

    <script>
        document.getElementById('close-icon').addEventListener('click', function() {
            document.getElementById('custom-view').style.display = 'none';
        });
    </script>
</body>
</html>




