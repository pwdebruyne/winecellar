<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wine $wine
 * @var \Cake\Collection\CollectionInterface|string[] $wineries
 * @var \Cake\Collection\CollectionInterface|string[] $styles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Wines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="wines form content">
            <?= $this->Form->create($wine) ?>
            <fieldset>
                <legend><?= __('Add Wine') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('winery_id', ['options' => $wineries]);
                    echo $this->Form->control('style_id', ['options' => $styles]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
