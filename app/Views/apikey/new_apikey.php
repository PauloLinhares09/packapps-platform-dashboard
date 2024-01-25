<?php 

echo $this->extend('design/floating_right_component'); 

echo $this->section('component-header-title');
    echo 'Nova Chave de API';
echo $this->endSection();

?>

<?= $this->section('style-floating-right-component') ?>
<?= $this->endSection() ?>

<?= $this->section('component-content') ?>
<div id="content-section">
        <form id="custom-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Seu nome" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="5" placeholder="Descrição detalhada" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Salvar</button>
            </div>
        </form>
    </div>
<?= $this->endSection() ?>

