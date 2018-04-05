
<div class="tecnicos index large-9 medium-8 columns content">
    <h3><?= __('Tecnicos') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nui') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iniciales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nacimiento') ?></th>
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tecnicos as $tecnico): ?>
            <tr>
                <td><?= $this->Number->format($tecnico->id) ?></td>
                <td><?= $this->Number->format($tecnico->nui) ?></td>
                <td><?= h($tecnico->iniciales) ?></td>
                <td><?= h($tecnico->nombre) ?></td>
                <td><?= $tecnico->has('paise') ? $this->Html->link($tecnico->paise->nombre, ['controller' => 'Paises', 'action' => 'view', $tecnico->paise->id]) : '' ?></td>
                <td><?= h($tecnico->nacimiento) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tecnico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tecnico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tecnico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnico->id)]) ?>
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
