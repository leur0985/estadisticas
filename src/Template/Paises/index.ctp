    <h3><?= __('Paises') ?></h3>
<table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigopais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('continente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bandera') ?></th>
                <th scope="col"><?= $this->Paginator->sort('confederacion_id') ?></th>
               
                <th scope="col" class="actions"><?= ('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paises as $paise): ?>
            <tr>
                <td><?= $this->Number->format($paise->id) ?></td>
                <td><?= h($paise->codigopais) ?></td>
                <td><?= h($paise->nombre) ?></td>
                <td><?= h($paise->continente) ?></td>
                <?php echo "<td><img src='img/banderas/".$paise->bandera."'/></td>"; ?>
                <td><?= $paise->has('confederacion') ? $this->Html->link($paise->confederacion->abreviatura, ['controller' => 'Confederacion', 'action' => 'view', $paise->confederacion->id]) : '' ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $paise->id], ['class'=>'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $paise->id], ['class'=>'btn btn-sm btn-warning']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paise->id], ['class'=>'btn btn-sm btn-danger'], ['confirm' => __('¿Seguro quieres eliminar el país? # {0}?', $paise->id)]) ?>
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
