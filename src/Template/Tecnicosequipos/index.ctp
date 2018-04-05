<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tecnicosequipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tecnicos'), ['controller' => 'Tecnicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tecnico'), ['controller' => 'Tecnicos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tecnicosequipos index large-9 medium-8 columns content">
    <h3><?= __('Tecnicosequipos') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tecnico_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tecnicosequipos as $tecnicosequipo): ?>
            <tr>
                <td><?= $this->Number->format($tecnicosequipo->id) ?></td>
                <td><?= $tecnicosequipo->has('equipo') ? $this->Html->link($tecnicosequipo->equipo->nombre, ['controller' => 'Equipos', 'action' => 'view', $tecnicosequipo->equipo->id]) : '' ?></td>
                <td><?= $tecnicosequipo->has('tecnico') ? $this->Html->link($tecnicosequipo->tecnico->nombre, ['controller' => 'Tecnicos', 'action' => 'view', $tecnicosequipo->tecnico->id]) : '' ?></td>
                <td><?= h($tecnicosequipo->actual) ?></td>
                <td><?= h($tecnicosequipo->creado) ?></td>
                <td><?= h($tecnicosequipo->modificado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tecnicosequipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tecnicosequipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tecnicosequipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnicosequipo->id)]) ?>
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
