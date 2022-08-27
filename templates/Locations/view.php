<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Locations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Location'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="locations view content">
            <h3><?= h($location->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Rack') ?></th>
                    <td><?= h($location->rack) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($location->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Row') ?></th>
                    <td><?= $location->row === null ? '' : $this->Number->format($location->row) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($location->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($location->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Vintages') ?></h4>
                <?php if (!empty($location->vintages)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Wine Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Classification Id') ?></th>
                            <th><?= __('Stock') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Value') ?></th>
                            <th><?= __('Min Age') ?></th>
                            <th><?= __('Max Age') ?></th>
                            <th><?= __('Location Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($location->vintages as $vintages) : ?>
                        <tr>
                            <td><?= h($vintages->id) ?></td>
                            <td><?= h($vintages->wine_id) ?></td>
                            <td><?= h($vintages->year) ?></td>
                            <td><?= h($vintages->classification_id) ?></td>
                            <td><?= h($vintages->stock) ?></td>
                            <td><?= h($vintages->price) ?></td>
                            <td><?= h($vintages->value) ?></td>
                            <td><?= h($vintages->min_age) ?></td>
                            <td><?= h($vintages->max_age) ?></td>
                            <td><?= h($vintages->location_id) ?></td>
                            <td><?= h($vintages->created) ?></td>
                            <td><?= h($vintages->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Vintages', 'action' => 'view', $vintages->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Vintages', 'action' => 'edit', $vintages->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vintages', 'action' => 'delete', $vintages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vintages->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
