
<div class="partidos view large-9 medium-8 columns content">
    <h3><?= h($partido->id) ?></h3>

    <div class="row">
        <h4><?= __('Comentarios') ?></h4>
        <?= $this->Text->autoParagraph(h($partido->comentarios)); ?>
    </div>
</div>
