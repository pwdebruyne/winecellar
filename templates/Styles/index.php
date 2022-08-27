<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Style[]|\Cake\Collection\CollectionInterface $styles
 */
?>
<div class="styles index content">
    <?= $this->Html->link(__('New Style'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Styles') ?></h3>
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
                <?php foreach ($styles as $style): ?>
                <tr>
                    <td><?= $this->Number->format($style->id) ?></td>
                    <td><?= h($style->name) ?></td>
                    <td><?= h($style->created) ?></td>
                    <td><?= h($style->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $style->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $style->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $style->id], ['confirm' => __('Are you sure you want to delete # {0}?', $style->id)]) ?>
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
