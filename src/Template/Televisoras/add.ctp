<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Televisoras'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="televisoras form large-9 medium-8 columns content">
    <?= $this->Form->create($televisora) ?>
    <fieldset>
        <legend><?= __('Add Televisora') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('logo');
            
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
