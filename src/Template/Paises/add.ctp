<div class="paises form large-9 medium-8 columns content">
    <?= $this->Form->create($paise) ?>
    <fieldset>
        <legend><?= ('Alta de Paises') ?></legend>
        <?php
        $continentes = array('América'=>'América',
        'Asia'=>'Asia',
        'África'=>'África',
        'Oceanía'=>'Oceanía',
        'Europa'=>'Europa');
        ?>
        <div class="row">
            <div class="col-lg-3">
        <?php
            echo $this->Form->input('codigopais');?>
            </div>
            <div class="col-lg-9">
            <?php
            echo $this->Form->input('nombre');?>
            </div>
        </div>
        <?php
        echo "<div class='row'>
            <div class='col-lg-3'>";
            echo $this->Form->input('continente',array('type'=>'select', 'options'=>$continentes,'empty'=>'Elige uno'));
            echo "</div>";
            echo "<div class='col-lg-3'>";
            echo $this->Form->input('bandera');
            echo "</div>";
            echo "<div class='col-lg-3'>";
            echo $this->Form->input('confederacion_id', ['options' => $confederacion]);
            echo "</div></div>";
            echo $this->Form->input('comentarios');
           
           
        ?>
    </fieldset>
    <?= $this->Form->button('Guardar', ['class' => 'btn btn-primary']); ?>
    <?= $this->Form->end() ?>
</div>
