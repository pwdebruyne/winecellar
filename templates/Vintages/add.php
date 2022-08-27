<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vintage $vintage
 * @var \Cake\Collection\CollectionInterface|string[] $wines
 * @var \Cake\Collection\CollectionInterface|string[] $classifications
 * @var \Cake\Collection\CollectionInterface|string[] $locations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Vintages'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vintages form content">
            <?= $this->Form->create($vintage) ?>
            <fieldset>
                <legend><?= __('Add Vintage') ?></legend>
                <?php
                    echo $this->Form->control('wine_id', ['options' => $wines]);
                    echo $this->Form->control('year');
                    echo $this->Form->control('classification_id', ['options' => $classifications, 'empty' => true]);
                    echo $this->Form->control('stock');
                    echo $this->Form->control('price');
                    echo $this->Form->control('value');
                    echo $this->Form->control('min_age');
                    echo $this->Form->control('max_age');
                    echo $this->Form->control('location_id', ['options' => $locations, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
