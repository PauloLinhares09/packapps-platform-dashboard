<?= $this->extend('master') ?>

<?= $this->section('style') ?>
<?= $this->renderSection('style-floating-component') ?>
<style>
        .api-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc; 
        }
        .api-table {
            width: 100%;
            border-collapse: collapse;
        }
        .api-table th, .api-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .api-table th {
            background-color: #f2f2f2;
        }
        .create-api-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .create-api-btn-cancel {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px 10px;
            background-color: #acacae;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .create-api-btn img {
            margin-right: 5px;
        }
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
        }


        .modal-buttons {
            display: flex;
            justify-content: center;
            gap: 10px; /* Espaço entre os botões */
        }

        .modal-buttons button {
            padding: 5px 15px; /* Ajuste o padding conforme necessário */
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        .card {
            background-color: #f2f2f2;
            padding: 20px;
            margin-top: 100px;
        }

    </style>
<?= $this->endSection() ?>

<?= $this->section('title') ?>Chave de API<?= $this->endSection()?>


<!-- Header  -->
<?= $this->section('header') ?>
<div class="content-header">
    <h2>Chave de Api</h2>
        <button class="create-button">
            <a href="<?= base_url('/apikey/create') ?>"><img src="../assets/add_FILL0_wght400_GRAD0_opsz24.png" alt="Ícone">Criar Nova Chave de API</a>
        </button>
    </div>
<?= $this->endSection() ?>


<!-- Content -->
<?= $this->section('content') ?>

<div class="content-section">   

<h3>Suas Chaves de Api estão listadas abaixo. Note que você jamais deve compartilhar ou exibir essa chave a terceiros.</h3>     
<br/>
<br/>
<hr/>
<br/>
<br/>
        <div class="data-table-container">
            <table class="data-table">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>ApiKey</th>
                    <th>CreatedAt</th>
                    <th>Enabled</th>
                    <th>Ação</th>
                </tr>
                <tr>
                    <td>Exemplo1</td>
                    <td>Descrição 1</td>
                    <td>abc123dksadjksadhkjsdad</td>
                    <td>2024-01-24</td>
                    <td>Sim</td>
                    <td><img src="../assets/delete_FILL0_wght400_GRAD0_opsz24.png" alt="Deletar"></td>
                </tr>
                <!-- Repetir linhas conforme necessário -->
            </table>

                
                <div class="card">
                <p>Se você controla mais de um negócio, lembre-se de vincular corretamente cada Assistente criado à Chave de Api correta.  </p>
            </div>

        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Tem certeza que deseja apagar essa Chave de API?</p>
            <div class="modal-buttons">
                <button type="button" class="create-api-btn">Confirmar</button>
                <button type="button" class="create-api-btn-cancel">Voltar</button>
            </div>
        </div>
    </div>
    

    

    <script>
        // Código JavaScript para manipulação do modal
        document.addEventListener('DOMContentLoaded', (event) => {
        // Obter o modal
        var modal = document.getElementById('myModal');

        // Obter o botão que abre o modal
        var deleteBtns = document.querySelectorAll('img[alt="Deletar"]');

        // Obter o elemento <span> que fecha o modal
        var span = document.getElementsByClassName('close')[0];

        // Obter o botão que fecha o modal
        var cancelBtn = modal.querySelector('button[type="button"]:last-of-type');

        // Quando o usuário clica no botão de deletar, abre o modal 
        deleteBtns.forEach(btn => btn.onclick = function() {
            modal.style.display = 'block';
        });

        // Quando o usuário clica em <span> (x), fecha o modal
        span.onclick = function() {
            modal.style.display = 'none';
        }

        // Quando o usuário clica em "Voltar", fecha o modal
        cancelBtn.onclick = function() {
            modal.style.display = 'none';
        }

        // Quando o usuário clica fora do modal, fecha o modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    });

    </script>

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<!-- Footer here -->
<?= $this->endSection() ?>




