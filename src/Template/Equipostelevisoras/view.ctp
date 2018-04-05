<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipostelevisora'), ['action' => 'edit', $equipostelevisora->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipostelevisora'), ['action' => 'delete', $equipostelevisora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipostelevisora->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipostelevisoras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipostelevisora'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Televisoras'), ['controller' => 'Televisoras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Televisora'), ['controller' => 'Televisoras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipostelevisoras view large-9 medium-8 columns content">
    <h3><?= h($equipostelevisora->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Equipo') ?></th>
            <td><?= $equipostelevisora->has('equipo') ? $this->Html->link($equipostelevisora->equipo->nombre, ['controller' => 'Equipos', 'action' => 'view', $equipostelevisora->equipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Televisora') ?></th>
            <td><?= $equipostelevisora->has('televisora') ? $this->Html->link($equipostelevisora->televisora->id, ['controller' => 'Televisoras', 'action' => 'view', $equipostelevisora->televisora->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($equipostelevisora->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actual') ?></th>
            <td><?= $equipostelevisora->actual ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
