<div class="container">
	<h1>CALENDAR</h1>
	<?php 
		$data = getAllBirthdays();
		highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");
	?>


		<table>
			<?php foreach ($birthdays as $birthday) { ?>
			<tr>
				<td><?= $birthday['month']; ?></td>
				<td><?= $birthday['day']; ?></td>
				<td><?= $birthday['person']; ?></td>
			</tr>
			<?php } ?>

		</table>
</div>