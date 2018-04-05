
<div class="arbitros view large-9 medium-8 columns content">
    <h3><?= h($arbitro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Iniciales') ?></th>
            <td><?= h($arbitro->iniciales) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($arbitro->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paise') ?></th>
            <td><?= $arbitro->has('paise') ? $this->Html->link($arbitro->paise->nombre, ['controller' => 'Paises', 'action' => 'view', $arbitro->paise->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($arbitro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nacimiento') ?></th>
            <td><?= h($arbitro->nacimiento) ?></td>
        </tr>
        
    </table>
</div>
