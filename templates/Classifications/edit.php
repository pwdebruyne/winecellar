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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $classification->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $classification->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Classifications'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="classifications form content">
            <?= $this->Form->create($classification) ?>
            <fieldset>
                <legend><?= __('Edit Classification') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
