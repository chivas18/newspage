<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<li class="heading"><?= __('Action') ?></li>
		<li><?= $this->Html->link(__('New User'),['action'=>'add']) ?></li>
	</ul>
</nav>

<div class="users index large-9 medium-8 columns content" >
<h1><?= __('Users') ?></h1>
<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		<td><b><?= $this->Paginator->sort('id') ?></b></td>
		<td><b><?= $this->Paginator->sort('url_avatar') ?></b></td>
		<td><b><?= $this->Paginator->sort('username') ?></b></td>
		<td><b><?= $this->Paginator->sort('created') ?></b></td>
		<td><b><?= $this->Paginator->sort('modified') ?></b></td>
		<td class="actions"><b><?= __('Action') ?></b></td>
	</tr>
	</thead>
	<tbody>
	<?php foreach($users as $user): ?>
	<tr>
		<td><?= $this->Number->format($user->id) ?></td>
		<td><?= $user->url_avatar ?></td>
		<td><?= h($user->username) ?></td>
		<td><?= h($user->created) ?></td>
		<td><?= h($user->modified) ?></td>
		<td class="actions">
			<?= $this->Html->link('View',['action'=>'view',$user->id]) ?>
			<?= $this->Html->link('Edit',['action'=>'edit',$user->id]) ?>
			<?= $this->Form->postLink('Delete',['action'=>'delete',$user->id],['confirm'=>'Are you sure?']) ?>
		</td>
	</tr>
	<?php endforeach ?>
	</tbody>
</table>
<div class="paginator">
	<ul class="pagination">
		<?= $this->Paginator->first('<< '.__('First')) ?>
		<?= $this->Paginator->prev('< '.__('Previous')) ?>
		<?= $this->Paginator->numbers() ?>
		<?= $this->Paginator->next(__('Next').' >') ?>
		<?= $this->Paginator->last(__('Last').' >>') ?>
	</ul>
	<p><?= $this->Paginator->counter(['format'=>__('Page {{page}} of {{pages}}, showing {{current}} records out of {{count}} total')]) ?></p>
</div>
</div>