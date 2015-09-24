<div class="movies view">
<h2><?php echo __('Movie'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($movie['Category']['name'], array('controller' => 'categories', 'action' => 'view', $movie['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Original Title'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['original_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Votes'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['amount_votes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Released'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['released']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($movie['Movie']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movie'), array('action' => 'edit', $movie['Movie']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Movie'), array('action' => 'delete', $movie['Movie']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $movie['Movie']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Genres'); ?></h3>
	<?php if (!empty($movie['Genre'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($movie['Genre'] as $genre): ?>
		<tr>
			<td><?php echo $genre['id']; ?></td>
			<td><?php echo $genre['name']; ?></td>
			<td><?php echo $genre['created']; ?></td>
			<td><?php echo $genre['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'genres', 'action' => 'view', $genre['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'genres', 'action' => 'edit', $genre['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'genres', 'action' => 'delete', $genre['id']), array('confirm' => __('Are you sure you want to delete # %s?', $genre['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
