<?php 

echo $this->extend('design/floating_right_component'); 

echo $this->section('component-header-title');
    echo 'Novo Assistente';
echo $this->endSection();

?>

<?= $this->section('style-floating-right-component') ?>
    <style>
        /* Estilos adicionais baseados em playground.html */
        .separador {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }

        .linha-ferramenta, .linha-arquivo {
            position: relative;
            display: flex;
            align-items: center;
        }

        .title-label {
            margin-left: 10px;
        }

        .icone {
            cursor: pointer;
        }

        .icon-end {
            position: absolute;
            right: 0;
        }

        .tooltip {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
        }

        .icone:hover .tooltip {
            visibility: visible;
        }

        .card-flutuante, .upload-file {
            display: none;
            position: fixed;
            width: 300px;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: white;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
            z-index: 2;
        }

        .lista-arquivos {
            margin-top: 10px;
        }

        .arquivo-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 5px;
        }
    </style>
<?= $this->endSection() ?>

<?= $this->section('component-content') ?>
<div id="content-section">
        <form id="custom-form">
            <div class="form-group">
                <label for="nome">Nome do Assistente</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="prompt">Prompt</label>
                <textarea id="prompt" name="prompt"></textarea>
            </div>

            <div class="form-group">
                <label for="api-key">Chave de API</label>
                <input type="text" value="Name ... abc123435455..." id="api-key" name="api-key" readonly>
            </div>

            <div class="form-group">
                <label for="ferramentas" style="color: #ccc; margin-top: 30px;">Ferramentas</label>
            </div>

            <div class="separador">
                <div class="linha-ferramenta">
                    <div class="icone">
                        <!-- Substitua 'icone_ferramenta.png' pelo caminho do ícone -->
                        <img src="../assets/info_FILL0_wght400_GRAD0_opsz24.png">
                        <span class="tooltip">Você pode cadastrar trechos de códigos que executam uma função especifica que seu assistente pode usar. (Necessita conhecimentos técnico) </span>
                    </div>
                    <label class="title-label">Function</label>
                    <div class="icone" onclick="abrirCardSnippets()">
                        <!-- Substitua 'icone_add.png' pelo caminho do ícone -->
                        <img src="../assets/data_object_FILL0_wght400_GRAD0_opsz24.png" alt="Adicionar" class="icon-end">
                    </div>
                </div>
                <div class="card-flutuante" id="card-snippets">
                    <!-- Conteúdo para adicionar snippet -->
                    <textarea id="snippet" name="snippet" required></textarea>
                    <button type="button" onclick="fecharCardSnippets()">Fechar</button>
                </div>
            </div>

            <div class="separador">
                <div class="linha-arquivo">
                    <div class="icone">
                        <!-- Substitua 'icone_arquivo.png' pelo caminho do ícone -->
                        <img src="../assets/info_FILL0_wght400_GRAD0_opsz24.png" alt="Arquivo">
                        <span class="tooltip">Você pode informar arquivos em PDF ou CSV. Por exemplo, arquivos de estoque, cardápio, sua agenda da semana, etc </span>
                    </div>
                    <label class="title-label">Arquivo</label>
                    <div class="icone" onclick="abrirUploadFile()">
                        <!-- Substitua 'icone_upload.png' pelo caminho do ícone -->
                        <img src="../assets/upload_file_FILL0_wght400_GRAD0_opsz24.png" alt="Upload" class="icon-end">
                    </div>
                </div>
                <div class="upload-file" id="upload-file">
                    <!-- Função para fazer upload de arquivo -->
                    <input type="file" id="file-upload" accept=".pdf, .csv">
                    <button type="button" onclick="fecharUploadFile()">Fechar</button>
                </div>
            </div>

            <div class="separador lista-arquivos" id="lista-arquivos">
                <!-- Lista de arquivos carregados -->
            </div>

            <div class="form-group">
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>

    <script>
        function abrirCardSnippets() {
            document.getElementById('card-snippets').style.display = 'block';
        }

        function fecharCardSnippets() {
            document.getElementById('card-snippets').style.display = 'none';
        }

        function abrirUploadFile() {
            document.getElementById('upload-file').style.display = 'block';
        }

        function fecharUploadFile() {
            document.getElementById('upload-file').style.display = 'none';
        }

        document.getElementById('file-upload').addEventListener('change', function(e) {
            var fileList = e.target.files;
            for (var i = 0; i < fileList.length; i++) {
                var file = fileList[i];
                var div = document.createElement('div');
                div.className = 'arquivo-item';
                div.innerHTML = file.name + ' (' + file.type + ') <span class="icone">Opções</span>';
                document.getElementById('lista-arquivos').appendChild(div);
            }
        });
    </script>
<?= $this->endSection() ?>

