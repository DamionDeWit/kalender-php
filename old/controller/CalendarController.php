<?php

require(ROOT . "model/CalendarModel.php");

function index()
{
	render("calendar/index", array(
		'birthdays' => getAllBirthdays()
	));
}