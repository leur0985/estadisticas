<div id="row">
<div id="equiposview" class="col-xs-12 col-md-4">
    
    <h3><?= h($equipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Abreviacion') ?></th>
            <td><?= h($equipo->abreviacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($equipo->nombre) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Pais') ?></th>
            <td><?= $equipo->has('paise') ? $this->Html->link($equipo->paise->nombre, ['controller' => 'Paises', 'action' => 'view', $equipo->paise->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estadio') ?></th>
            <td><?= $equipo->has('estadio') ? $this->Html->link($equipo->estadio->nombre, ['controller' => 'Estadios', 'action' => 'view', $equipo->estadio->id]) : '' ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <?php
                if ($equipo->tipo==1)
                {
                    $tipo="Club";
                }
                else
                {
                     $tipo="Selección";
                }
            ?>
            <td><?= ($tipo) ?></td>
        </tr>
       
        <tr>
            <th scope="row"><?= __('Fecha Fundacion') ?></th>
          
            <td><?= h($equipo->fecha_fundacion) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Tecnico') ?></th>
          
           
        </tr>
       
    </table>
    </div>
    <div id="equiposescudo" class="col-xs-12 col-md-4">

   <?php echo "<td><img src='../../img/equipos/".$equipo->logo."'/></td>"; ?>

    </div>

<div id="equiposescudo" class="col-xs-12 col-md-4">

   <?php echo "<td><img src='../../img/estadios/".$equipo->estadio->imagen."'/></td>"; ?>

    </div>





