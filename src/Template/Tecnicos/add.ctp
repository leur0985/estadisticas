<div id="row">
    

        <?= $this->Form->create($tecnico) ?>
        <fieldset>
            <legend><?= __('Add Tecnico') ?></legend>
            <div id="equiposview" class="col-xs-12 col-md-2">
            <?php  echo $this->Form->input('nui'); ?>
            </div>
            <div id="equiposview" class="col-xs-12 col-md-2">
            <?php    echo $this->Form->input('iniciales', ['size'=>80]); ?>
            </div>
             <div id="equiposview" class="col-xs-12 col-md-8">
            <?php echo $this->Form->input('nombre'); ?>
            </div>
            
            <div id="equiposview" class="col-xs-12 col-md-12">
            <?php
                echo $this->Form->input('pais_id', ['options' => $paises, 'empty' => true]);
                echo $this->Form->input('nacimiento',['type'=>'text'], ['empty'=>false]);
                
            ?>
            </div>
        </fieldset>
        </div>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
