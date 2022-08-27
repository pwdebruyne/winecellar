<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classification[]|\Cake\Collection\CollectionInterface $classifications
 */
?>
<div class="classifications index content">
    <?= $this->Html->link(__('New Classification'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Classifications') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classifications as $classification): ?>
                <tr>
                    <td><?= $this->Number->format($classification->id) ?></td>
                    <td><?= h($classification->name) ?></td>
                    <td><?= h($classification->created) ?></td>
                    <td><?= h($classification->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $classification->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classification->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classification->id)]) ?>
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
