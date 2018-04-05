
<div class="arbitros index large-9 medium-8 columns content">
    <h3><?= __('Arbitros') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('iniciales') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nacimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edad') ?></th>
               
                <th scope="col"><?= $this->Paginator->sort('pais_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $arbitro): ?>
            <tr>
                <td><?= $this->Number->format($arbitro['id']) ?></td>
                <td><?= h($arbitro['iniciales']) ?></td>
                <td><?= h($arbitro['nombre']) ?></td>
                <td><?= h($arbitro['nacimiento']) ?></td>
                <td><?= h($arbitro['Edad']) ?></td>
                <td><?= h($arbitro['Pais']) ?></td>

                 
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $arbitro['id']]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $arbitro['id']]) ?>
                    
                </td>
               
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
