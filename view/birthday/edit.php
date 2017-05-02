<div class="container">
	<form action="<?= URL ?>birthday/editSave" method="post">
	
		<input type="text" name="person" value="<?= $birthday['person'] ?>">

		<select name="day">
			<?php for($i = 1; $i < 32; $i++) {?>
				<option value="<?=$i?>" 
					<?php if($i == $birthday['day']){?>
					selected
					<?php } ?>
				>
					<?=$i?>
				</option>
			<?php } ?>
		</select>

		<select name="month">
			<?php for($i = 1; $i < 13; $i++) {?>
				<option value="<?=$i?>"
					<?php if($i == $birthday['month']){?>
					selected
					<?php } ?>
				>
					<?=$months[$i]?>
				</option>
			<?php } ?>
		</select>

		<select name="year">
			<?php for($i = 2017; $i >= 1900; $i--) {?>
				<option value="<?=$i?>"
					<?php if($i == $birthday['year']){?>
					selected
					<?php } ?>
				>
					<?=$i?>
				</option>
			<?php } ?>
		</select>

		<input type="hidden" name="id" value="<?= $birthday['id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>