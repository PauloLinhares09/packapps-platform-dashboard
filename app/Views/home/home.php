<?= $this->extend('master') ?>

<?= $this->section('style') ?>

<style>

        /* Estilos adicionais para a nova seção */
        .home-section {
            width: 100%;
            height: 100%;
            padding: 20px;
        }

        .home-title {
            color: #333;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .home-subtitle {
            color: #555;
            font-size: 18px;
            text-align: center;
            margin-bottom: 30px;
        }

        .card-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            width: 300px;
            background-color: #007bff;
            border-radius: 10px;
            padding: 20px;
            color: white;
            text-align: center;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 14px;
        }

        .video-section {
        
            text-align: center;
            margin-bottom: 20px;
        }

        .video-container {
            width: 100%;
            height: 300px;
            background-color: #ddd; /* Placeholder for video */
        }
    
</style>


<?= $this->endSection() ?>

<?= $this->section('title') ?>Home<?= $this->endSection()?>


<!-- Header  -->
<?= $this->section('header') ?>
    <h2>PackApps AI Platform</h2>
<?= $this->endSection() ?>


<!-- Content -->
<?= $this->section('content') ?>

    <section class="home-section">
            <h1 class="home-title">Bem vindo à Packapps AI Platform</h1>
            <h2 class="home-subtitle">Comece com o básico</h2>

            <div class="card-container">
                <div class="card">
                    <h3 class="card-title">Tutorial Site</h3>
                    <p class="card-description">Veja um Tour de como você pode usar sua plataforma para gerenciar seus Assistentes e Leads</p>
                </div>
                <div class="card">
                    <h3 class="card-title">Prompts de Exemplo</h3>
                    <p class="card-description">Aprenda a criar Prompts e treinar seus Assistentes você mesmo</p>
                </div>
            </div>

            <h2 class="home-subtitle">Assista um vídeo rápido de como usar da melhor forma sua área de usuário na Plataforma</h2>

            <div class="video-section">
                <div class="video-container">
                    <!-- Aqui vai o vídeo -->
                </div>
            </div>
        </section>

<?= $this->endSection() ?>
