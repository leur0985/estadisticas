<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipostelevisora->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipostelevisora->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipostelevisoras'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Televisoras'), ['controller' => 'Televisoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Televisora'), ['controller' => 'Televisoras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipostelevisoras form large-9 medium-8 columns content">
    <?= $this->Form->create($equipostelevisora) ?>
    <fieldset>
        <legend><?= __('Edit Equipostelevisora') ?></legend>
        <?php
            echo $this->Form->input('equipo_id', ['options' => $equipos, 'empty' => true]);
            echo $this->Form->input('televisora_id', ['options' => $televisoras, 'empty' => true]);
            echo $this->Form->input('actual');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
