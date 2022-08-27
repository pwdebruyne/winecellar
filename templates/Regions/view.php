<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Region $region
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Regions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Region'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="regions view content">
            <h3><?= h($region->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($region->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $region->has('country') ? $this->Html->link($region->country->name, ['controller' => 'Countries', 'action' => 'view', $region->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($region->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($region->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($region->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Wineries') ?></h4>
                <?php if (!empty($region->wineries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Region Id') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Website') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($region->wineries as $wineries) : ?>
                        <tr>
                            <td><?= h($wineries->id) ?></td>
                            <td><?= h($wineries->name) ?></td>
                            <td><?= h($wineries->region_id) ?></td>
                            <td><?= h($wineries->address) ?></td>
                            <td><?= h($wineries->email) ?></td>
                            <td><?= h($wineries->phone) ?></td>
                            <td><?= h($wineries->website) ?></td>
                            <td><?= h($wineries->created) ?></td>
                            <td><?= h($wineries->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Wineries', 'action' => 'view', $wineries->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Wineries', 'action' => 'edit', $wineries->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Wineries', 'action' => 'delete', $wineries->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wineries->id)]) ?>
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
