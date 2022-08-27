<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vintage[]|\Cake\Collection\CollectionInterface $vintages
 */
?>
<div class="vintages index content">
    <?= $this->Html->link(__('New Vintage'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Vintages') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('wine_id') ?></th>
                    <th><?= $this->Paginator->sort('year') ?></th>
                    <th><?= $this->Paginator->sort('classification_id') ?></th>
                    <th><?= $this->Paginator->sort('stock') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('value') ?></th>
                    <th><?= $this->Paginator->sort('min_age') ?></th>
                    <th><?= $this->Paginator->sort('max_age') ?></th>
                    <th><?= $this->Paginator->sort('location_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vintages as $vintage): ?>
                <tr>
                    <td><?= $this->Number->format($vintage->id) ?></td>
                    <td><?= $vintage->has('wine') ? $this->Html->link($vintage->wine->name, ['controller' => 'Wines', 'action' => 'view', $vintage->wine->id]) : '' ?></td>
                    <td><?= h($vintage->year) ?></td>
                    <td><?= $vintage->has('classification') ? $this->Html->link($vintage->classification->name, ['controller' => 'Classifications', 'action' => 'view', $vintage->classification->id]) : '' ?></td>
                    <td><?= $this->Number->format($vintage->stock) ?></td>
                    <td><?= $this->Number->format($vintage->price) ?></td>
                    <td><?= $this->Number->format($vintage->value) ?></td>
                    <td><?= $this->Number->format($vintage->min_age) ?></td>
                    <td><?= $this->Number->format($vintage->max_age) ?></td>
                    <td><?= $vintage->has('location') ? $this->Html->link($vintage->location->id, ['controller' => 'Locations', 'action' => 'view', $vintage->location->id]) : '' ?></td>
                    <td><?= h($vintage->created) ?></td>
                    <td><?= h($vintage->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $vintage->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vintage->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vintage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vintage->id)]) ?>
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
