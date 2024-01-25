<?= $this->extend('assistent/assistents') ?>
<?= $this->section('style-floating-right-component') ?>
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

<?= $this->endSection() ?>

<?= $this->section('content') ?>

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

<?= $this->endSection() ?>