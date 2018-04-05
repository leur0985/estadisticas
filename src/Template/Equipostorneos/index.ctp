<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipostorneo[]|\Cake\Collection\CollectionInterface $equipostorneos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipostorneo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Torneos'), ['controller' => 'Torneos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Torneo'), ['controller' => 'Torneos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipostorneos index large-9 medium-8 columns content">
    <h3><?= __('Equipostorneos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('torneo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipostorneos as $equipostorneo): ?>
            <tr>
                <td><?= $this->Number->format($equipostorneo->id) ?></td>
                <td><?= $equipostorneo->has('torneo') ? $this->Html->link($equipostorneo->torneo->nombre, ['controller' => 'Torneos', 'action' => 'view', $equipostorneo->torneo->id]) : '' ?></td>
                <td><?= $equipostorneo->has('equipo') ? $this->Html->link($equipostorneo->equipo->nombre, ['controller' => 'Equipos', 'action' => 'view', $equipostorneo->equipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipostorneo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipostorneo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipostorneo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipostorneo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
