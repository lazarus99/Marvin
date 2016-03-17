<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Manufacturer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Asset Models'), ['controller' => 'AssetModels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Asset Model'), ['controller' => 'AssetModels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="manufacturers index large-9 medium-8 columns content">
    <h3><?= __('Manufacturers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('manufacturer_desc') ?></th>
                <th><?= $this->Paginator->sort('created_date') ?></th>
                <th><?= $this->Paginator->sort('modified_date') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($manufacturers as $manufacturer): ?>
            <tr>
                <td><?= $this->Number->format($manufacturer->id) ?></td>
                <td><?= h($manufacturer->manufacturer_desc) ?></td>
                <td><?= h($manufacturer->created_date) ?></td>
                <td><?= h($manufacturer->modified_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $manufacturer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $manufacturer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $manufacturer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manufacturer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>