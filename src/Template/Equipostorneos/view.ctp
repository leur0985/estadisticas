<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipostorneo $equipostorneo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipostorneo'), ['action' => 'edit', $equipostorneo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipostorneo'), ['action' => 'delete', $equipostorneo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipostorneo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipostorneos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipostorneo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Torneos'), ['controller' => 'Torneos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Torneo'), ['controller' => 'Torneos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipostorneos view large-9 medium-8 columns content">
    <h3><?= h($equipostorneo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Torneo') ?></th>
            <td><?= $equipostorneo->has('torneo') ? $this->Html->link($equipostorneo->torneo->nombre, ['controller' => 'Torneos', 'action' => 'view', $equipostorneo->torneo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipo') ?></th>
            <td><?= $equipostorneo->has('equipo') ? $this->Html->link($equipostorneo->equipo->nombre, ['controller' => 'Equipos', 'action' => 'view', $equipostorneo->equipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($equipostorneo->id) ?></td>
        </tr>
    </table>
</div>
