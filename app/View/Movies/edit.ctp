<div class="movies form">
<?php echo $this->Form->create('Movie'); ?>
	<fieldset>
		<legend><?php echo __('Edit Movie'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('original_title');
		echo $this->Form->input('rating');
		echo $this->Form->input('amount_votes');
		echo $this->Form->input('filename');
		echo $this->Form->input('released');
		echo $this->Form->input('Genre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Movie.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Movie.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Movies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
