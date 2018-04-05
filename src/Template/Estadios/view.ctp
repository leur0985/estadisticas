<div id="row">
<div id="equiposview" class="col-xs-12 col-md-4">
    <h3><?= h($estadio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($estadio->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagen') ?></th>
            <td><?= h($estadio->imagen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ciudad') ?></th>
            <td><?= h($estadio->ciudad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pais') ?></th>
            <td><?= $estadio->has('paise') ? $this->Html->link($estadio->paise->nombre, ['controller' => 'Paises', 'action' => 'view', $estadio->paise->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estadio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacidad') ?></th>
            <td><?= $this->Number->format($estadio->capacidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inaugurado') ?></th>
            <td><?= h($estadio->inaugurado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($estadio->creado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($estadio->modificado) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Direccion') ?></h4>
        <?= $this->Text->autoParagraph(h($estadio->direccion)); ?>
    </div>
    </div>
</div>
<div id="equiposescudo" class="col-xs-12 col-md-4">

   <?php echo "<td><img src='../../img/estadios/".$estadio->imagen."'/></td>"; ?>

    </div>

</div>
