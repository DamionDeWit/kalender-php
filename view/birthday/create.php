<div class="container">
	<form action="<?= URL ?>birthday/createSave" method="post">
	
		<input type="text" name="person" placeholder="name">

		<select name="day">
			<?php for($i = 1; $i < 32; $i++) {?>
				<option value="<?=$i?>"><?=$i?></option>
			<?php } ?>
		</select>

		<select name="month">
			<?php for($i = 1; $i < 13; $i++) {?>
				<option value="<?=$i?>"><?=$months[$i]?></option>
			<?php } ?>
		</select>

		<select name="year">
			<?php for($i = 2017; $i >= 1900; $i--) {?>
				<option value="<?=$i?>"><?=$i?></option>
			<?php } ?>
		</select>

		<input type="submit" value="Verzenden">
	
	</form>

</div>