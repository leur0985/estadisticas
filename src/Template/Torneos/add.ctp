<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Torneo $torneo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Torneos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipostorneos'), ['controller' => 'Equipostorneos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipostorneo'), ['controller' => 'Equipostorneos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Partidos'), ['controller' => 'Partidos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Partido'), ['controller' => 'Partidos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Puntos'), ['controller' => 'Puntos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Punto'), ['controller' => 'Puntos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="torneos form large-9 medium-8 columns content">
    <?= $this->Form->create($torneo) ?>
    <fieldset>
        <legend><?= __('Add Torneo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('inicio', ['empty' => true]);
            echo $this->Form->control('final', ['empty' => true]);
            echo $this->Form->control('logo');
            echo $this->Form->control('sede');
            echo $this->Form->control('tipo');
            echo $this->Form->control('status');
            echo $this->Form->control('comentarios');
            echo $this->Form->control('creado');
            echo $this->Form->control('modificado');
            echo $this->Form->control('equipo_id', ['options' => $equipos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
