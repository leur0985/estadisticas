
    <h3><?= __('Confederacion') ?></h3>
    <table class="table" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abreviatura') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fundacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agregado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($confederacion as $confederacion): ?>
            <tr>
                <td><?= $this->Number->format($confederacion->id) ?></td>
                <td><?= h($confederacion->abreviatura) ?></td>
                <td><?= h($confederacion->nombre) ?></td>
                <td><?= $this->Number->format($confederacion->fundacion) ?></td>
                <td><?= h($confederacion->logo) ?></td>
                <td><?= h($confederacion->agregado) ?></td>
                <td><?= h($confederacion->modificado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $confederacion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $confederacion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $confederacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $confederacion->id)]) ?>
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
