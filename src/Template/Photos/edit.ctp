<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $photo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="photos form large-9 medium-8 columns content">
    <?= $this->Form->create($photo) ?>
    <fieldset>
        <legend><?= __('Edit Photo') ?></legend>
        <?php
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('title');
            echo $this->Form->control('owner');
            echo $this->Form->control('date');
            echo $this->Form->control('description');
            echo $this->Form->control('filename');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
