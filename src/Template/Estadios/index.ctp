
    
<div class="estadios index large-9 medium-8 columns content">
    <h3><?= __('Estadios') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capacidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ciudad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inaugurado') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('pais_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estadios as $estadio): ?>
            <tr>
                <td><?= $this->Number->format($estadio->id) ?></td>
                <td><?= h($estadio->nombre) ?></td>
                <?php echo "<td><img src='img/estadios/".$estadio->imagen."'/></td>"; ?>
                
                <td><?= $this->Number->format($estadio->capacidad) ?></td>
                <td><?= h($estadio->ciudad) ?></td>
                <td><?= h($estadio->inaugurado) ?></td>
                
                <td><?= $estadio->has('paise') ? $this->Html->link($estadio->paise->nombre, ['controller' => 'Paises', 'action' => 'view', $estadio->paise->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $estadio->id], ['class'=>'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $estadio->id], ['class'=>'btn btn-sm btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estadio->id], ['confirm' => __('Are you sure you want to delete # {0}?') ,'class'=>'btn btn-sm btn-danger']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers(['before'=>'', 'after'=>'']) ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')]) ?></p>
    </div>
</div>
