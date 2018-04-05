<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $televisora->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $televisora->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Televisoras'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="televisoras form large-9 medium-8 columns content">
    <?= $this->Form->create($televisora) ?>
    <fieldset>
        <legend><?= __('Edit Televisora') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('logo');
            echo $this->Form->input('creado');
            echo $this->Form->input('modificado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
