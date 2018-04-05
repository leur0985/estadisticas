<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tecnicosequipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tecnicosequipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tecnicosequipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicos'), ['controller' => 'Tecnicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnico'), ['controller' => 'Tecnicos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tecnicosequipos form large-9 medium-8 columns content">
    <?= $this->Form->create($tecnicosequipo) ?>
    <fieldset>
        <legend><?= __('Edit Tecnicosequipo') ?></legend>
        <?php
            echo $this->Form->input('equipo_id', ['options' => $equipos, 'empty' => true]);
            echo $this->Form->input('tecnico_id', ['options' => $tecnicos, 'empty' => true]);
            echo $this->Form->input('actual');
            echo $this->Form->input('creado');
            echo $this->Form->input('modificado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
