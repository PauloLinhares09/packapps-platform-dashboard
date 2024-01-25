<?= $this->extend('design/section_columns_component') ?>


<?= $this->section('title') ?>Clientes<?= $this->endSection() ?>

<?= $this->section('left-section') ?>
    <?= $this->include('temperature/menu_temperature') ?>
<?= $this->endSection() ?>


<?= $this->section('right-section') ?>
        <div class="content-header">
            <h1>Campanhas</h1>
            <button class="create-button">
                <img src="../assets/add_FILL0_wght400_GRAD0_opsz24.png" alt="Ícone">Criar
            </button>
        </div>
        <div class="divider"></div>
        <div class="data-table-container">
            <table class="data-table">
                <thead>
                <tr>
                        <th>Nome</th>
                        <th>Tipo de Campanha</th>
                        <th>Alvo</th>
                        <th>Tempo Entre Mensagens</th>
                        <th>Primeira Mensagem</th>
                        <th>URL da Mídia</th>
                        <th>Tipo de Mídia</th>
                        <th>IA Ativa</th>
                        <th>Prompt</th>
                        <th>Expiração</th>
                        <th>Criado em</th>
                        <th>Atualizado em</th>
                        <th>Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo de linha de dados -->
                    <tr>
                        <td>Campanha A</td>
                        <td>Marketing Direto</td>
                        <td>Público Alvo A</td>
                        <td>2 horas</td>
                        <td>Mensagem de Boas-vindas</td>
                        <td>url_da_midia.jpg</td>
                        <td>Imagem</td>
                        <td>Sim</td>
                        <td>Prompt de Campanha</td>
                        <td>31/12/2024</td>
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

