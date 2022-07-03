<?php

	namespace Utils;

	enum Positions: int{
		case QUARTERBACK = 1;
		case HALFBACK = 2;
		case FULLBACK = 3;
		case LEFT_TACKLE = 4;
		case LEFT_GUARD = 5;
		case CENTER = 6;
		case RIGHT_GUARD = 7;
		case RIGHT_TACKLE = 8;
		case TIGHT_END = 9;
		case WIDE_RECEIVER = 10;
		case LEFT_DEFENSIVE_END = 11;
		case DEFENSIVE_TACKLE = 12;
		case RIGHT_DEFENSIVE_END = 13;
		case LEFT_OUTSIDE_LINEBACKER = 14;
		case MIDDLE_LINEBACKER = 15;
		case RIGHT_OUTSIDE_LINEBACKER = 16;
		case CORNERBACK = 17;
		case FREE_SAFETY = 18;
		case STRONG_SAFETY = 19;
		case PUNTER = 20;
		case KICKER = 21;
		case ATHLETE = 22;

		const POSITION_MULTIPLIERS = [
			"QUARTERBACK" => 1,
			"HALFBACK" => 1,
			"FULLBACK" => 1,
			"LEFT_TACKLE" => 1,
			"LEFT_GUARD" => 1,
			"CENTER" => 1,
			"RIGHT_GUARD" => 1,
			"RIGHT_TACKLE" => 1,
			"TIGHT_END" => 1,
			"WIDE_RECEIVER" => 1,
			"LEFT_DEFENSIVE_END" => 1,
			"DEFENSIVE_TACKLE" => 1,
			"RIGHT_DEFENSIVE_END" => 1,
			"LEFT_OUTSIDE_LINEBACKER" => 1,
			"MIDDLE_LINEBACKER" => 1,
			"RIGHT_OUTSIDE_LINEBACKER" => 1,
			"CORNERBACK" => 1,
			"FREE_SAFETY" => 1,
			"STRONG_SAFETY" => 1,
			"PUNTER" => 1,
			"KICKER" => 1,
			"ATHLETE" => 1,
		];
	}