<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Televisora'), ['action' => 'edit', $televisora->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Televisora'), ['action' => 'delete', $televisora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $televisora->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Televisoras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Televisora'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="televisoras view large-9 medium-8 columns content">
    <h3><?= h($televisora->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($televisora->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($televisora->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($televisora->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($televisora->creado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($televisora->modificado) ?></td>
        </tr>
    </table>
</div>
