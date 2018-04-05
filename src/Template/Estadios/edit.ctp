
<div class="estadios form large-9 medium-8 columns content">
    <?= $this->Form->create($estadio) ?>
    <fieldset>
        <legend><?= __('Edit Estadio') ?></legend>
        <?php
            echo $this->Form->input('nombre',['id'=>'ejemplo']);
            echo $this->Form->input('imagen');
            echo $this->Form->input('capacidad');
            echo $this->Form->input('ciudad');
            echo $this->Form->input('direccion');
            echo $this->Form->input('inaugurado',['type'=>'text']);
            echo $this->Form->input('creado', ['empty' => true]);
            echo $this->Form->input('modificado');
            echo $this->Form->input('pais_id', ['options' => $paises]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
