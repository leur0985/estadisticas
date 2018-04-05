<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipostorneo $equipostorneo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipostorneo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipostorneo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipostorneos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Torneos'), ['controller' => 'Torneos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Torneo'), ['controller' => 'Torneos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipostorneos form large-9 medium-8 columns content">
    <?= $this->Form->create($equipostorneo) ?>
    <fieldset>
        <legend><?= __('Edit Equipostorneo') ?></legend>
        <?php
            echo $this->Form->control('torneo_id', ['options' => $torneos, 'empty' => true]);
            echo $this->Form->control('equipo_id', ['options' => $equipos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
