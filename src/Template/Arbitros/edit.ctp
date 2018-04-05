
<div class="arbitros form large-9 medium-8 columns content">
    <?= $this->Form->create($arbitro) ?>
    <fieldset>
        <legend><?= __('Edit Arbitro') ?></legend>
        <?php
            echo $this->Form->input('iniciales');
            echo $this->Form->input('nombre');
            echo $this->Form->input('nacimiento', ['empty' => true]);
            
            echo $this->Form->input('pais_id', ['options' => $paises, 'empty' => true]);
        ?>
    </fieldset>
   <?= $this->Form->button('Gurdar', ['class' => 'btn btn-primary']); ?>
    <?= $this->Form->end() ?>
</div>
