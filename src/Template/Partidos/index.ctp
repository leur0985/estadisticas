
<div class="partidos index large-9 medium-8 columns content">
    <h3><?= __('Partidos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_partido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('torneo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jornada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipo_local_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipolocal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goleslocal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipo_visitante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('equipovisitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('golesvisitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ganador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abierto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estadio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('puntos_local') ?></th>
                <th scope="col"><?= $this->Paginator->sort('puntos_visitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('procesado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capturado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_procesado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('penales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tiempoextra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goleslocaltiempoextra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('golesvisitantetiempoextra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('goleslocalpenales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('golesvisitantepenales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('asistencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arbitro_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($partidos as $partido): ?>
            <tr>
                <td><?= $this->Number->format($partido->id) ?></td>
                <td><?= $this->Number->format($partido->num_partido) ?></td>
                <td><?= $partido->has('torneo') ? $this->Html->link($partido->torneo->nombre, ['controller' => 'Torneos', 'action' => 'view', $partido->torneo->id]) : '' ?></td>
                <td><?= h($partido->jornada) ?></td>
                <td><?= h($partido->fecha) ?></td>
                <td><?= h($partido->hora) ?></td>
               <td><?= $partido->has('equipo') ? $this->Html->link($partido->equipo->logo, ['controller' => 'Equipos', 'action' => 'view', $partido->equipo->id]) : '' ?></td>
                <td><?= h($partido->equipolocal) ?></td>
                <td><?= $this->Number->format($partido->goleslocal) ?></td>
                <td><?= $partido->has('equipo') ? $this->Html->link($partido->equipo->logo, ['controller' => 'Equipos', 'action' => 'view', $partido->equipo->id]) : '' ?></td>
                <td><?= h($partido->equipovisitante) ?></td>
                <td><?= $this->Number->format($partido->golesvisitante) ?></td>
                <td><?= h($partido->ganador) ?></td>
                <td><?= $this->Number->format($partido->abierto) ?></td>
                <td><?= $partido->has('estadio') ? $this->Html->link($partido->estadio->nombre, ['controller' => 'Estadios', 'action' => 'view', $partido->estadio->id]) : '' ?></td>
                <td><?= $this->Number->format($partido->puntos_local) ?></td>
                <td><?= $this->Number->format($partido->puntos_visitante) ?></td>
                <td><?= $this->Number->format($partido->activo) ?></td>
                <td><?= $this->Number->format($partido->procesado) ?></td>
                <td><?= h($partido->capturado) ?></td>
                <td><?= h($partido->fecha_procesado) ?></td>
                <td><?= h($partido->penales) ?></td>
                <td><?= h($partido->tiempoextra) ?></td>
                <td><?= $this->Number->format($partido->goleslocaltiempoextra) ?></td>
                <td><?= $this->Number->format($partido->golesvisitantetiempoextra) ?></td>
                <td><?= $this->Number->format($partido->goleslocalpenales) ?></td>
                <td><?= $this->Number->format($partido->golesvisitantepenales) ?></td>
                <td><?= $this->Number->format($partido->asistencia) ?></td>
                <td><?= $partido->has('arbitro') ? $this->Html->link($partido->arbitro->id, ['controller' => 'Arbitros', 'action' => 'view', $partido->arbitro->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $partido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partido->id)]) ?>
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
