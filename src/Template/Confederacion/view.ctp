<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Confederacion'), ['action' => 'edit', $confederacion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Confederacion'), ['action' => 'delete', $confederacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $confederacion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Confederacion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Confederacion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paises'), ['controller' => 'Paises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paise'), ['controller' => 'Paises', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="confederacion view large-9 medium-8 columns content">
    <h3><?= h($confederacion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Abreviatura') ?></th>
            <td><?= h($confederacion->abreviatura) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($confederacion->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($confederacion->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($confederacion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fundacion') ?></th>
            <td><?= $this->Number->format($confederacion->fundacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agregado') ?></th>
            <td><?= h($confederacion->agregado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($confederacion->modificado) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Paises') ?></h4>
        <?php if (!empty($confederacion->paises)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Codigopais') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Continente') ?></th>
                <th scope="col"><?= __('Bandera') ?></th>
                <th scope="col"><?= __('Comentarios') ?></th>
                <th scope="col"><?= __('Confederacion Id') ?></th>
                <th scope="col"><?= __('Creado') ?></th>
                <th scope="col"><?= __('Modficado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($confederacion->paises as $paises): ?>
            <tr>
                <td><?= h($paises->id) ?></td>
                <td><?= h($paises->codigopais) ?></td>
                <td><?= h($paises->nombre) ?></td>
                <td><?= h($paises->continente) ?></td>
                <td><?= h($paises->bandera) ?></td>
                <td><?= h($paises->comentarios) ?></td>
                <td><?= h($paises->confederacion_id) ?></td>
                <td><?= h($paises->creado) ?></td>
                <td><?= h($paises->modficado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paises', 'action' => 'view', $paises->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paises', 'action' => 'edit', $paises->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paises', 'action' => 'delete', $paises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paises->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
