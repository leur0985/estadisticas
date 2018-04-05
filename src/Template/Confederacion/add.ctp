<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Confederacion'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paises'), ['controller' => 'Paises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paise'), ['controller' => 'Paises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="confederacion form large-9 medium-8 columns content">
    <?= $this->Form->create($confederacion) ?>
    <fieldset>
        <legend><?= __('Add Confederacion') ?></legend>
        <?php
            echo $this->Form->input('abreviatura');
            echo $this->Form->input('nombre');
            echo $this->Form->input('fundacion');
            echo $this->Form->input('logo');
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
