<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grape $grape
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Grape'), ['action' => 'edit', $grape->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Grape'), ['action' => 'delete', $grape->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grape->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Grapes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Grape'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="grapes view content">
            <h3><?= h($grape->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($grape->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($grape->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($grape->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($grape->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
