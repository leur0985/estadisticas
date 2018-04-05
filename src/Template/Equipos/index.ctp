
<div class="equipos index large-9 medium-8 columns content">
    <h3><?= __('Equipos') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abreviacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fundacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estadio_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipos as $equipo): ?>
            <tr>
                <td><?= $this->Number->format($equipo->id) ?></td>
                <td><?= h($equipo->abreviacion) ?></td>
                <td><?= h($equipo->nombre) ?></td>
                <?php echo "<td><img src='img/equipos/".$equipo->logo."'/></td>"; ?>
                <td><?= $this->Number->format($equipo->tipo) ?></td>
                <td><?= h($equipo->fecha_fundacion) ?></td>
                <td><?= $equipo->has('paise') ? $this->Html->link($equipo->paise->nombre, ['controller' => 'Paises', 'action' => 'view', $equipo->paise->id]) : '' ?></td>
                <td><?= $equipo->has('estadio') ? $this->Html->link($equipo->estadio->nombre, ['controller' => 'Estadios', 'action' => 'view', $equipo->estadio->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->id)]) ?>
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
