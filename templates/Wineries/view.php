<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Winery $winery
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Winery'), ['action' => 'edit', $winery->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Winery'), ['action' => 'delete', $winery->id], ['confirm' => __('Are you sure you want to delete # {0}?', $winery->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Wineries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Winery'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="wineries view content">
            <h3><?= h($winery->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($winery->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Region') ?></th>
                    <td><?= $winery->has('region') ? $this->Html->link($winery->region->name, ['controller' => 'Regions', 'action' => 'view', $winery->region->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($winery->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($winery->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($winery->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($winery->website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($winery->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($winery->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($winery->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Wines') ?></h4>
                <?php if (!empty($winery->wines)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Winery Id') ?></th>
                            <th><?= __('Style Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($winery->wines as $wines) : ?>
                        <tr>
                            <td><?= h($wines->id) ?></td>
                            <td><?= h($wines->name) ?></td>
                            <td><?= h($wines->winery_id) ?></td>
                            <td><?= h($wines->style_id) ?></td>
                            <td><?= h($wines->created) ?></td>
                            <td><?= h($wines->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Wines', 'action' => 'view', $wines->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Wines', 'action' => 'edit', $wines->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Wines', 'action' => 'delete', $wines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wines->id)]) ?>
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
