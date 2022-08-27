<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classification $classification
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Classification'), ['action' => 'edit', $classification->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Classification'), ['action' => 'delete', $classification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classification->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Classifications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Classification'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classifications view content">
            <h3><?= h($classification->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($classification->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($classification->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($classification->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($classification->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Vintages') ?></h4>
                <?php if (!empty($classification->vintages)) : ?>
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
                        <?php foreach ($classification->vintages as $vintages) : ?>
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
