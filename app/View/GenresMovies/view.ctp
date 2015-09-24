<div class="genresMovies view">
<h2><?php echo __('Genres Movie'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($genresMovie['GenresMovie']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($genresMovie['Genre']['name'], array('controller' => 'genres', 'action' => 'view', $genresMovie['Genre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Movie'); ?></dt>
		<dd>
			<?php echo $this->Html->link($genresMovie['Movie']['original_title'], array('controller' => 'movies', 'action' => 'view', $genresMovie['Movie']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Genres Movie'), array('action' => 'edit', $genresMovie['GenresMovie']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Genres Movie'), array('action' => 'delete', $genresMovie['GenresMovie']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $genresMovie['GenresMovie']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres Movies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genres Movie'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
