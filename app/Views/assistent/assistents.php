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




