<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grape[]|\Cake\Collection\CollectionInterface $grapes
 */
?>
<div class="grapes index content">
    <?= $this->Html->link(__('New Grape'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Grapes') ?></h3>
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
                <?php foreach ($grapes as $grape): ?>
                <tr>
                    <td><?= $this->Number->format($grape->id) ?></td>
                    <td><?= h($grape->name) ?></td>
                    <td><?= h($grape->created) ?></td>
                    <td><?= h($grape->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $grape->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grape->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grape->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grape->id)]) ?>
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
