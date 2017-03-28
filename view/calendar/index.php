
	<?php
		$months = ['', 'Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli',
					'Augustus', 'September', 'Oktober', 'November', 'December'];
		$data = getAllBirthdays();
		$lastMonth = $months[0];
		//highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
	?>
	

	<!--<body>
		<h1>februari</h1>
		<h2>22</h2>
        <p>
            <a href="edit.php?id=4">
                Anoushka (1981)</a>
                
            <a href="delete.php?id=4">x</a>
        </p>-->


		<?php foreach ($birthdays as $birthday) { ?>
			<?php if($lastMonth != $birthday['month']){ ?>
				<h1><?= $months[$birthday['month']]; ?></h1>
			<?php } ?>
			<h2><?= $birthday['day']; ?></h2>
			<p>
				<a href="edit.php?id=<?= $birthday['id']?>">
					<?= $birthday['person']; ?>
				<a href="delete.php?id=<?= $birthday['id']?>">x</a>
			</p>
		<?php $lastMonth = $birthday['month']; ?>
		<?php } ?>

		<p><a href="create.php">+ Toevoegen</a></p>