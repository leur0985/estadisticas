
<div class="paises form large-9 medium-8 columns content">
    <?= $this->Form->create($paise) ?>
    <fieldset>
        <legend><?=('Editar Pais') ?></legend>
        <?php
        $continentes = ['América','África','Asia','Europa','Oceanía'];
            echo $this->Form->input('codigopais');
            echo $this->Form->input('nombre');
             echo $this->Form->select('continente',$continentes);
            echo $this->Form->input('bandera');
            
        ?>
    </fieldset>
    <?= $this->Form->button('Guardar', ['class' => 'btn btn-primary']); ?>
    <?= $this->Form->end() ?>
</div>
