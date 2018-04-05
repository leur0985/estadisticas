<div class="torneos index large-9 medium-8 columns content">
    <h3><?= __('Torneos') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('final') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sede') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Campeón') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        
                    <?php foreach ($torneos as $torneo): ?>
            <tr>
                <td><?= $this->Number->format($torneo->id) ?></td>
                <td><?= h($torneo->nombre) ?></td>
                <td>
                    
                <?= h($torneo->inicio) ?></td>
                <td><?= h($torneo->final) ?></td>
                <?php echo "<td><img src='img/torneos/".$torneo->logo."'/></td>"; ?>
                <td><?= h($torneo->sede) ?></td>
                <?php
                    if ($torneo->tipo==1)
                    {
                        $tipo = "Liga";
                    }
                    if ($torneo->tipo==2)
                    {
                        $tipo = "Copa";
                    }
                    if ($torneo->tipo==3)
                    {
                        $tipo = "Mudial";
                    }
                ?>
                <td><?= h($tipo) ?></td>
                
                <td><?= $torneo->has('equipo') ? $this->Html->link($torneo->equipo->nombre, ['controller' => 'Equipos', 'action' => 'view', $torneo->equipo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $torneo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $torneo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $torneo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $torneo->id)]) ?>
                    <p><?= $this->Html->link(__('Ver Partidos'), ['controller' => 'partidos', 'action' => 'partidos', $torneo->id]) ?></p>
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