<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Country $country
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="countries view content">
            <h3><?= h($country->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($country->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Iso') ?></th>
                    <td><?= h($country->iso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($country->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($country->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($country->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Regions') ?></h4>
                <?php if (!empty($country->regions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($country->regions as $regions) : ?>
                        <tr>
                            <td><?= h($regions->id) ?></td>
                            <td><?= h($regions->name) ?></td>
                            <td><?= h($regions->country_id) ?></td>
                            <td><?= h($regions->created) ?></td>
                            <td><?= h($regions->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Regions', 'action' => 'view', $regions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Regions', 'action' => 'edit', $regions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Regions', 'action' => 'delete', $regions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $regions->id)]) ?>
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
