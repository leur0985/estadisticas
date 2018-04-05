<div class="tecnicos form large-9 medium-8 columns content">
    <?= $this->Form->create($tecnico) ?>
    <fieldset>
        <legend><?= __('Edit Tecnico') ?></legend>
        <?php
            echo $this->Form->input('nui');
            echo $this->Form->input('iniciales');
            echo $this->Form->input('nombre');
            echo $this->Form->input('pais_id', ['options' => $paises, 'empty' => true]);
            echo $this->Form->input('nacimiento', ['type' => 'text']);
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
