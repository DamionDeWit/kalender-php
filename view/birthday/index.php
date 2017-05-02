
<?php
	$data = getAllBirthdays();
	$lastMonth = $months[0];
	$lastDay = 0;
?>


<?php foreach ($birthdays as $birthday) { ?>
	<?php if($lastMonth != $birthday['month']){ ?>
		<h1><?= $months[$birthday['month']]; ?></h1>
	<?php
		$lastDay = 0;
	}
	?>

	<?php if($lastDay != $birthday['day']){ ?>
		<h2><?= $birthday['day']; ?></h2>
	<?php } ?>
	<p>
		<a href="<?= URL ?>birthday/edit/<?= $birthday['id']?>">
			<?= $birthday['person']; ?> (<?= $birthday['year'] ?>)
		<a href="<?= URL ?>birthday/delete/<?= $birthday['id']?>">x</a>
	</p>
<?php 
	$lastMonth = $birthday['month'];
	$lastDay = $birthday['day']; 
?>
<?php } ?>

<p><a href="<?= URL?>birthday/create">+ Toevoegen</a></p>