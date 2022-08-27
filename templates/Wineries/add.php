<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Winery $winery
 * @var \Cake\Collection\CollectionInterface|string[] $regions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Wineries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="wineries form content">
            <?= $this->Form->create($winery) ?>
            <fieldset>
                <legend><?= __('Add Winery') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('region_id', ['options' => $regions]);
                    echo $this->Form->control('address');
                    echo $this->Form->control('email');
                    echo $this->Form->control('phone');
                    echo $this->Form->control('website');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
