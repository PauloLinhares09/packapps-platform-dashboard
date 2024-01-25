<?= $this->extend('master') ?>

<?= $this->section('style') ?>
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

<?= $this->section('title') ?>Playground<?= $this->endSection()?>


<!-- Header  -->
<?= $this->section('header') ?>
    <h2>Testador de Assistente</h2>
<?= $this->endSection() ?>


<!-- Content -->
<?= $this->section('content') ?>

<div id="main-content">
        <!-- Section Left -->
        <section id="left-section">

        </section>


        <!-- Section Right -->
        <section id="right-section">
            
        </section>
    </div>

<?= $this->endSection() ?>
