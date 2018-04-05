
<div class="televisoras index large-9 medium-8 columns content">
    <h3><?= __('Televisoras') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($televisoras as $televisora): ?>
            <tr>
                <td><?= $this->Number->format($televisora->id) ?></td>
                <td><?= h($televisora->nombre) ?></td>
                <?php echo "<td><img src='img/televisoras/".$televisora->logo."'/></td>"; ?>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $televisora->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $televisora->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $televisora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $televisora->id)]) ?>
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
