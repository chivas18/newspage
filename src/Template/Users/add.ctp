<?php 
    $roles= [
        0 => 'Member',
        1 => 'Admin'
    ];
    $status=[
        0=> 'Deactivated',
        1=> 'Active',
    ];

 ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <!--$user should be an empty User entity.-->
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('display_name');
            echo $this->Form->control('email', ['type' => 'email']);
            echo $this->Form->label('position');
            echo $this->Form->select('position',$roles,['empty' => 'Selected please']);
            echo $this->Form->radio('status',$status);
            echo $this->Form->control('facebook');
            echo $this->Form->control('google');
            echo $this->Form->control('twitter');
            echo $this->Form->control('phone',['placeholder'=>'Phone number']);
            echo $this->Form->control('description');
            echo $this->Form->control('url_avatar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>