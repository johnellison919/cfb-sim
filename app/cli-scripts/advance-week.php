<?php

	// Queries the Utils table to see if there is a set week
	$week = Util::queryOne(
		columnQuery:(new ColumnQuery())
			->where("name","=", "week"),
	);

	// If the Utils table doesn't have a week entry, we need to make one
	if($week === null) {
		$week = new Util();
		$week->name = "Week";
		$week->value = 0;
		$week->save();
	}

	if($week->value === 0) {
		return "Preseason";
	} elseif($week->value === 1) {
		return "Week 1";
	}