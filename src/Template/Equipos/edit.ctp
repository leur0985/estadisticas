
<div class="equipos form large-9 medium-8 columns content">
    <?= $this->Form->create($equipo) ?>
    <fieldset>
        <legend><?= __('Edit Equipo') ?></legend>
        <?php
            echo $this->Form->input('abreviacion');
            echo $this->Form->input('nombre');
            echo $this->Form->input('logo');
            echo $this->Form->input('tipo');
            echo $this->Form->input('fecha_fundacion', ['type'=>'text'],['empty' => true]);
            echo $this->Form->input('pais_id', ['options' => $paises, 'empty' => true]);
            echo $this->Form->input('estadio_id', ['options' => $estadios, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button('Gurdar', ['class' => 'btn btn-primary']); ?>
    <?= $this->Form->end() ?>
</div>
