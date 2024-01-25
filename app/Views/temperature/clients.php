<?= $this->extend('design/section_columns_component') ?>


<?= $this->section('title') ?>Clientes<?= $this->endSection() ?>

<?= $this->section('left-section') ?>
    <?= $this->include('temperature/menu_temperature') ?>
<?= $this->endSection() ?>


<?= $this->section('right-section') ?>
        <div class="content-header">
            <h1>Clientes</h1>
            <button class="create-button">
                <img src="../assets/add_FILL0_wght400_GRAD0_opsz24.png" alt="Ícone">Criar
            </button>
        </div>
        <div class="divider"></div>
        <div class="data-table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>IdLead</th>
                        <th>Descrição</th>
                        <th>Obs do Cliente</th>
                        <th>Telefone</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Obs do Lead</th>
                        <th>Criado Em</th>
                        <th>Atualizado Em</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <td>1</td>
                        <td>Descrição Exemplo</td>
                        <td>Observação A</td>
                        <td>(11) 99999-9999</td>
                        <td>Cliente A</td>
                        <td>Descrição Exemplo</td>
                        <td>Observação B</td>
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

