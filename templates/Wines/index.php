<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wine[]|\Cake\Collection\CollectionInterface $wines
 */
?>
<div class="wines index content">
    <?= $this->Html->link(__('New Wine'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Wines') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('winery_id') ?></th>
                    <th><?= $this->Paginator->sort('style_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($wines as $wine): ?>
                <tr>
                    <td><?= $this->Number->format($wine->id) ?></td>
                    <td><?= h($wine->name) ?></td>
                    <td><?= $wine->has('winery') ? $this->Html->link($wine->winery->name, ['controller' => 'Wineries', 'action' => 'view', $wine->winery->id]) : '' ?></td>
                    <td><?= $wine->has('style') ? $this->Html->link($wine->style->name, ['controller' => 'Styles', 'action' => 'view', $wine->style->id]) : '' ?></td>
                    <td><?= h($wine->created) ?></td>
                    <td><?= h($wine->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $wine->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wine->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wine->id)]) ?>
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
