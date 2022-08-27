<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Winery[]|\Cake\Collection\CollectionInterface $wineries
 */
?>
<div class="wineries index content">
    <?= $this->Html->link(__('New Winery'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Wineries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('region_id') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('website') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wineries as $winery): ?>
                <tr>
                    <td><?= $this->Number->format($winery->id) ?></td>
                    <td><?= h($winery->name) ?></td>
                    <td><?= $winery->has('region') ? $this->Html->link($winery->region->name, ['controller' => 'Regions', 'action' => 'view', $winery->region->id]) : '' ?></td>
                    <td><?= h($winery->address) ?></td>
                    <td><?= h($winery->email) ?></td>
                    <td><?= h($winery->phone) ?></td>
                    <td><?= h($winery->website) ?></td>
                    <td><?= h($winery->created) ?></td>
                    <td><?= h($winery->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $winery->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $winery->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $winery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $winery->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
