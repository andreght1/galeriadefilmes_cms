<div class="genresMovies index">
	<h2><?php echo __('Genres Movies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('genre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('movie_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($genresMovies as $genresMovie): ?>
	<tr>
		<td><?php echo h($genresMovie['GenresMovie']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($genresMovie['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $genresMovie['Genre']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($genresMovie['Movie']['original_title'], array('controller' => 'movies', 'action' => 'view', $genresMovie['Movie']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $genresMovie['GenresMovie']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $genresMovie['GenresMovie']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $genresMovie['GenresMovie']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $genresMovie['GenresMovie']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Genres Movie'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
