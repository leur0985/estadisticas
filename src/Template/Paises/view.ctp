<div id="row">
<div id="equiposview" class="col-xs-12 col-md-4">
    <h3><?= h($paise->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Codigopais') ?></th>
            <td><?= h($paise->codigopais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($paise->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Continente') ?></th>
            <td><?= h($paise->continente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bandera') ?></th>
            <td><?= h($paise->bandera) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paise->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($paise->creado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modficado') ?></th>
            <td><?= h($paise->modficado) ?></td>
        </tr>
    </table>
</div>
</div>
<div id="equiposescudo" class="col-xs-12 col-md-8">

   <?php echo "<td><img src='../../img/banderas/".$paise->bandera."'/></td>"; ?>

</div>


    <div >

        <h4><?= __('Related Equipos') ?></h4>
        <?php if (!empty($paise->equipos)): ?>
        <table class="table" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Abreviacion') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Logo') ?></th>
                <th scope="col"><?= __('Tipo') ?></th>
                
                <th scope="col"><?= __('Fecha Fundacion') ?></th>
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paise->equipos as $equipos): ?>
            <tr>
                <td><?= h($equipos->id) ?></td>
                <td><?= h($equipos->abreviacion) ?></td>
                <td><?= h($equipos->nombre) ?></td>
                <td><?= h($equipos->logo) ?></td>
                <td><?= h($equipos->tipo) ?></td>
                
                <td><?= h($equipos->fecha_fundacion) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Equipos', 'action' => 'view', $equipos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Equipos', 'action' => 'edit', $equipos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Equipos', 'action' => 'delete', $equipos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

