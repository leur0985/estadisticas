<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Arbitros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paises'), ['controller' => 'Paises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paise'), ['controller' => 'Paises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="arbitros form large-9 medium-8 columns content">
    <?= $this->Form->create($arbitro) ?>
    <fieldset>
        <legend><?= __('Add Arbitro') ?></legend>
        <?php
            echo $this->Form->input('iniciales');
            echo $this->Form->input('nombre');
            echo $this->Form->input('nacimiento', ['type'=>'text', 'empty' => true]);
            echo $this->Form->input('pais_id', ['options' => $paises, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
