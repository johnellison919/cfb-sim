<?php

	namespace Utils\States;

	enum States: int{
		case ALABAMA = 1;
		case ALASKA = 2;
		case ARIZONA = 3;
		case ARKANSAS = 4;
		case CALIFORNIA = 5;
		case COLORADO = 6;
		case CONNECTICUT = 7;
		case DELAWARE = 8;
		case DISTRICT_OF_COLUMBIA = 9;
		case FLORIDA = 10;
		case GEORGIA = 11;
		case HAWAII = 12;
		case IDAHO = 13;
		case ILLINOIS = 14;
		case INDIANA = 15;
		case IOWA = 16;
		case KANSAS = 17;
		case KENTUCKY = 18;
		case LOUISIANA = 19;
		case MAINE = 20;
		case MARYLAND = 21;
		case MASSACHUSETTS = 22;
		case MICHIGAN = 23;
		case MINNESOTA = 24;
		case MISSISSIPPI = 25;
		case MISSOURI = 26;
		case MONTANA = 27;
		case NEBRASKA = 28;
		case NEVADA = 29;
		case NEW_HAMPSHIRE = 30;
		case NEW_JERSEY = 31;
		case NEW_MEXICO = 32;
		case NEW_YORK = 33;
		case NORTH_CAROLINA = 34;
		case NORTH_DAKOTA = 35;
		case OHIO = 36;
		case OKLAHOMA = 37;
		case OREGON = 38;
		case PENNSYLVANIA = 39;
		case RHODE_ISLAND = 40;
		case SOUTH_CAROLINA = 41;
		case SOUTH_DAKOTA = 42;
		case TENNESSEE = 43;
		case TEXAS = 44;
		case UTAH = 45;
		case VERMONT = 46;
		case VIRGINIA = 47;
		case WASHINGTON = 48;
		case WEST_VIRGINIA = 49;
		case WISCONSIN = 50;
		case WYOMING = 51;

		const RARITY_MULTIPLIERS = [
			"Common" => 4,
			"Uncommon" => 3,
			"Rare" => 2,
			"VeryRare" => 1,
		];

		const COMMON_STATES = [5, 10, 11, 44];
		const UNCOMMON_STATES = [1, 19, 23, 25, 34, 36, 43, 47];
		const RARE_STATES = [3, 4, 6, 7, 9, 12, 14, 15, 16, 17, 18, 21, 24, 26, 28, 29, 31, 33, 37, 38, 39, 41, 45, 48, 49];
		const VERY_RARE_STATES = [2, 8, 13, 20, 22, 27, 30, 32, 35, 40, 42, 46, 50, 51];

		public static function getByValue(int $caseValue): ?States{
			foreach(self::cases() as $case){
				if ($case->value === $caseValue){
					return $case;
				}
			}

			return null;
		}
	}