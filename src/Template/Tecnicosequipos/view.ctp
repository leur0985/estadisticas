<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tecnicosequipo'), ['action' => 'edit', $tecnicosequipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tecnicosequipo'), ['action' => 'delete', $tecnicosequipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnicosequipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tecnicosequipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnicosequipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tecnicos'), ['controller' => 'Tecnicos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tecnico'), ['controller' => 'Tecnicos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tecnicosequipos view large-9 medium-8 columns content">
    <h3><?= h($tecnicosequipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Equipo') ?></th>
            <td><?= $tecnicosequipo->has('equipo') ? $this->Html->link($tecnicosequipo->equipo->nombre, ['controller' => 'Equipos', 'action' => 'view', $tecnicosequipo->equipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tecnico') ?></th>
            <td><?= $tecnicosequipo->has('tecnico') ? $this->Html->link($tecnicosequipo->tecnico->nombre, ['controller' => 'Tecnicos', 'action' => 'view', $tecnicosequipo->tecnico->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tecnicosequipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($tecnicosequipo->creado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($tecnicosequipo->modificado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actual') ?></th>
            <td><?= $tecnicosequipo->actual ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
