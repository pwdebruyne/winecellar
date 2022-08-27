<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vintage $vintage
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Vintage'), ['action' => 'edit', $vintage->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Vintage'), ['action' => 'delete', $vintage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vintage->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Vintages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Vintage'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vintages view content">
            <h3><?= h($vintage->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Wine') ?></th>
                    <td><?= $vintage->has('wine') ? $this->Html->link($vintage->wine->name, ['controller' => 'Wines', 'action' => 'view', $vintage->wine->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($vintage->year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Classification') ?></th>
                    <td><?= $vintage->has('classification') ? $this->Html->link($vintage->classification->name, ['controller' => 'Classifications', 'action' => 'view', $vintage->classification->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= $vintage->has('location') ? $this->Html->link($vintage->location->id, ['controller' => 'Locations', 'action' => 'view', $vintage->location->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vintage->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Stock') ?></th>
                    <td><?= $this->Number->format($vintage->stock) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($vintage->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Value') ?></th>
                    <td><?= $this->Number->format($vintage->value) ?></td>
                </tr>
                <tr>
                    <th><?= __('Min Age') ?></th>
                    <td><?= $this->Number->format($vintage->min_age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Max Age') ?></th>
                    <td><?= $this->Number->format($vintage->max_age) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($vintage->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($vintage->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
