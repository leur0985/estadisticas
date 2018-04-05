<div class="partidos form large-9 medium-8 columns content">
    <?= $this->Form->create($partido) ?>
    <fieldset>

        <legend><?= __('Alta de partido') ?></legend>
        <div class="row">
        <div class="col-xs-12 col-md-2">
        <?php
            echo $this->Form->input('num_partido',['label'=>'Número de partido']);
            echo "</div>";
            echo "<div class='col-xs-12 col-md-8'>";
                echo $this->Form->input('torneo_id', ['options' => $torneos, 'default'=>$id, 'empty' => true]);
            echo "</div>";
            echo "<div class='col-xs-12 col-md-2'>";
            echo $this->Form->input('jornada');
            echo "</div></div>";?>
            <div class="row">
                <div id="equiposview" class="col-xs-12 col-md-6">
                 <?php   echo $this->Form->input('fecha',['type'=>'text', 'class'=>'fecha']);?>
                </div>
                 <div id="equiposview" class="col-xs-12 col-md-6">
                 <?php echo $this->Form->input('hora',['type'=>'text']);?>
                </div>
            </div>
            <?php
            echo "<div class='row'>";
                echo "<div class='col-xs-12 col-md-5'>";
                    echo $this->Form->input('equipo_local_id', ['options' => $equipos, 'empty' => true])."</div>";
                    echo $this->Form->hidden('equipolocal', ['id'=>'equipolocal']);
                echo "<div class='col-xs-12 col-md-1'>";
                    echo $this->Form->input('goleslocal');
                echo "</div>";
                echo "<div class='col-xs-12 col-md-1'>";
                    echo $this->Form->input('golesvisitante');
                 echo "</div>";   
                echo "<div class='col-xs-12 col-md-5'>";
                    echo $this->Form->input('equipo_visitante_id', ['options' => $equipos, 'empty' => true])."</div>";
                    echo $this->Form->hidden('equipovisitante', ['id'=>'equipovisitante']);
                 echo "</div></div>";
                    
            echo $this->Form->input('estadio_id', ['options' => $estadios, 'empty' => true]);
            
            echo $this->Form->input('comentarios');
            echo $this->Form->input('estuve',['type' => 'checkbox']);
           
            echo $this->Form->input('asistencia');
            echo $this->Form->input('arbitro_id', ['options' => $arbitros, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button('Guardar', ['class' => 'btn btn-primary']); ?>
    <?= $this->Form->end() ?>
</div>
