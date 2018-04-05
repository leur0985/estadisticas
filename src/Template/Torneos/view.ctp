<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Torneo $torneo
 */
?>

<div class="torneos view large-9 medium-8 columns content">
    <h3><?= h($torneo->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($torneo->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($torneo->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sede') ?></th>
            <td><?= h($torneo->sede) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipo') ?></th>
            <td><?= $torneo->has('equipo') ? $this->Html->link($torneo->equipo->nombre, ['controller' => 'Equipos', 'action' => 'view', $torneo->equipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($torneo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($torneo->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($torneo->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inicio') ?></th>
            <td><?= h($torneo->inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Final') ?></th>
            <td><?= h($torneo->final) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creado') ?></th>
            <td><?= h($torneo->creado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado') ?></th>
            <td><?= h($torneo->modificado) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comentarios') ?></h4>
        <?= $this->Text->autoParagraph(h($torneo->comentarios)); ?>
    </div>
    <div class="related">
        <h4><?= __('Equipos Participantes') ?></h4>
        <?php if (!empty($equipostorneos)): ?>
        <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
            <tr>
               
                <th scope="col"><?= __('') ?></th>
                <th scope="col" class="actions"><?= __('Equipo') ?></th>
                 <th scope="col" class="actions"><?= __('') ?></th>
                  <th scope="col" class="actions"><?= __('Actions') ?></th>
                 
            </tr>
            <?php $cuenta=0;?>
            <?php foreach ($equipostorneos as $equipostorneos): 
            $cuenta = $cuenta+1; ?>
            <tr>
                <td><?php echo $cuenta; ?></td>
                <td><?= h($equipostorneos->equipo->nombre) ?></td>
               <td><?php echo "<img src='../../img/equipos/".$equipostorneos->equipo->logo."'/></td>"; ?>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Equipostorneos', 'action' => 'view', $equipostorneos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Equipostorneos', 'action' => 'edit', $equipostorneos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Equipostorneos', 'action' => 'delete', $equipostorneos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipostorneos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Partidos') ?></h4>
        <?php if (!empty($torneo->partidos)): ?>
        <table class = "table" cellpadding="0" cellspacing="0">
            <tr>
               
                <th scope="col"><?= __('Num Partido') ?></th>
               
                <th scope="col"><?= __('Jornada') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Hora') ?></th>
               
                <th scope="col"><?= __('Equipolocal') ?></th>
                <th scope="col"><?= __('Goleslocal') ?></th>
                <th scope="col"><?= __('Golesvisitante') ?></th>
                
                <th scope="col"><?= __('Equipovisitante') ?></th>
               
               
                               
            </tr>
            <?php foreach ($torneo->partidos as $partidos): ?>
            <tr>
                
                <td><?= h($partidos->num_partido) ?></td>
               
                <td><?= h($partidos->jornada) ?></td>
                <td><?= h($partidos->fecha) ?></td>
                <td><?= h($partidos->hora) ?></td>
                
                <td><?= h($partidos->equipolocal) ?></td>
                <td><?= h($partidos->goleslocal) ?></td>
                
                 <td><?= h($partidos->golesvisitante) ?></td>
                <td><?= h($partidos->equipovisitante) ?></td>
              
                
               
               
                
                
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    
</div>
