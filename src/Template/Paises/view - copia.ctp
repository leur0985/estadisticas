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
<div id="equiposescudo" class="col-xs-12 col-md-4">

   <?php echo "<td><img src='../../img/banderas/".$paise->bandera."'/></td>"; ?>

    </div>



