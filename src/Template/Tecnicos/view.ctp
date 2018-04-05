
<div class="tecnicos view large-9 medium-8 columns content">
    <h3><?= h($tecnico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Iniciales') ?></th>
            <td><?= h($tecnico->iniciales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tecnico->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paise') ?></th>
            <td><?= $tecnico->has('paise') ? $this->Html->link($tecnico->paise->nombre, ['controller' => 'Paises', 'action' => 'view', $tecnico->paise->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tecnico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nui') ?></th>
            <td><?= $this->Number->format($tecnico->nui) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacimiento') ?></th>
            <td><?= h($tecnico->nacimiento) ?></td>
        </tr>
       
    </table>
    <div class="related">
        <h4><?= __('Related Tecnicosequipos') ?></h4>
        <?php if (!empty($tecnico->tecnicosequipos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tecnico Id') ?></th>
                <th scope="col"><?= __('Equipo Id') ?></th>
                <th scope="col"><?= __('Actual') ?></th>
                <th scope="col"><?= __('Capturado') ?></th>
                <th scope="col"><?= __('Modificado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tecnico->tecnicosequipos as $tecnicosequipos): ?>
            <tr>
                <td><?= h($tecnicosequipos->id) ?></td>
                <td><?= h($tecnicosequipos->tecnico_id) ?></td>
                <td><?= h($tecnicosequipos->equipo_id) ?></td>
                <td><?= h($tecnicosequipos->actual) ?></td>
                <td><?= h($tecnicosequipos->capturado) ?></td>
                <td><?= h($tecnicosequipos->modificado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tecnicosequipos', 'action' => 'view', $tecnicosequipos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tecnicosequipos', 'action' => 'edit', $tecnicosequipos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tecnicosequipos', 'action' => 'delete', $tecnicosequipos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tecnicosequipos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
