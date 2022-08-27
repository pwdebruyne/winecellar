<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Winery $winery
 * @var string[]|\Cake\Collection\CollectionInterface $regions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $winery->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $winery->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Wineries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="wineries form content">
            <?= $this->Form->create($winery) ?>
            <fieldset>
                <legend><?= __('Edit Winery') ?></legend>
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
