<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipostelevisora'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Televisoras'), ['controller' => 'Televisoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Televisora'), ['controller' => 'Televisoras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipostelevisoras index large-9 medium-8 columns content">
    <h3><?= __('Equipostelevisoras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('televisora_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actual') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipostelevisoras as $equipostelevisora): ?>
            <tr>
                <td><?= $this->Number->format($equipostelevisora->id) ?></td>
                <td><?= $equipostelevisora->has('equipo') ? $this->Html->link($equipostelevisora->equipo->nombre, ['controller' => 'Equipos', 'action' => 'view', $equipostelevisora->equipo->id]) : '' ?></td>
                <td><?= $equipostelevisora->has('televisora') ? $this->Html->link($equipostelevisora->televisora->nombre, ['controller' => 'Televisoras', 'action' => 'view', $equipostelevisora->televisora->id]) : '' ?></td>
                <td><?= h($equipostelevisora->actual) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipostelevisora->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipostelevisora->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipostelevisora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipostelevisora->id)]) ?>
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
