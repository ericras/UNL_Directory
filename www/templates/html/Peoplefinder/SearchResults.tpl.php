<?php
$start = 0;
$end   = count($context);
?>
<?php if ($end > $start): ?>
	<p class="result_head dcf-txt-xs dcf-mt-1 unl-font-sans"><?php echo $end ?> result<?php echo $end > 1 ? 's' : '' ?> found</p>
	<ul class="pfResult dcf-list-bare dcf-m-0 dcf-bg-white dcf-b-1 dcf-b-solid unl-b-light-gray">
		<?php foreach ($context as $record): ?>
			<?php if ($record->getRawObject() instanceof UNL_Peoplefinder_Record): ?>
				<?php echo $savvy->render($record, 'Peoplefinder/RecordInList.tpl.php') ?>
			<?php else: ?>
				<?php echo $savvy->render($record) ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</ul>
<?php else: ?>
	<p class="result_head dcf-txt-xs dcf-mt-1 unl-font-sans">No results</p>
<?php endif; ?>
