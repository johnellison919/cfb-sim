<?php

	namespace Recruit;

	use ReflectionEnum;
	use ReflectionException;
	use Utils\Positions;
	use Utils\States\States;
	use Utils\UtilService;

	class RecruitService
	{

		/**
		 * @param int $amount
		 * @return void
		 * @throws ReflectionException
		 */
		public static function generateRecruits(
			int $amount
		): void{
			for($i = 0; $i < $amount; $i++) {
				$state = self::generateState();
				$city = self::generateCity($state);
				$name = self::generateName($state);
				$position = self::generatePosition();
				$size = self::generateSize($position);

				$recruit = Recruit::createRecruit(
					firstName: $name[0],
					lastName: $name[1],
					positionID: $position,
					height: $size["height"],
					weight: $size["weight"],
					city: $city,
					state: $state,
				);

//				$recruitRatings = RecruitRatings::createRecruitRatings(
//					recruitID: $recruit->id
//				);
//
//				$recruitInterests = RecruitInterests::createRecruitInterests(
//					recruitID: $recruit->id,
//				);
			}
		}

		/**
		 * @return int
		 */
		public static function generateState(): int{
			$states = [];

			// Adds the common states to the array
			foreach(States::COMMON_STATES as $state) {
				// Adds each state one times the multiplier
				for($i = 0; $i < States::RARITY_MULTIPLIERS["Common"]; $i++) {
					$states[] = $state;
				}
			}

			// Adds the uncommon states to the array
			foreach(States::UNCOMMON_STATES as $state) {
				// Adds each state one times the multiplier
				for($i = 0; $i < States::RARITY_MULTIPLIERS["Uncommon"]; $i++) {
					$states[] = $state;
				}
			}

			// Adds the rare states to the array
			foreach(States::RARE_STATES as $state) {
				// Adds each state one times the multiplier
				for($i = 0; $i < States::RARITY_MULTIPLIERS["Rare"]; $i++) {
					$states[] = $state;
				}
			}

			// Adds the very rare states to the array
			foreach(States::VERY_RARE_STATES as $state) {
				// Adds each state one times the multiplier
				for($i = 0; $i < States::RARITY_MULTIPLIERS["VeryRare"]; $i++) {
					$states[] = $state;
				}
			}

			$key = array_rand($states);

			return $states[$key];
		}

		/**
		 * @param int $state
		 * @return string
		 * @throws ReflectionException
		 */
		public static function generateCity(
			int $state
		): string{
			$cities = [];
			$stateName = States::getByValue($state)->name;
			$stateReflectionEnum = new ReflectionEnum("Utils\States\\" . $stateName);

			foreach($stateReflectionEnum->getCases() as $case) {
				$cities[] = $case->getValue()->value;
			}

			$key = array_rand($cities);

			return $cities[$key];
		}

		// TODO
		public static function generateName(
			string $state
		): array{
			return ["", ""];
		}

		/**
		 * @return int
		 */
		public static function generatePosition(): int{
			$positions = [];

			// Adds the different positions to the array
			foreach(Positions::cases() as $case) {
				// Adds each position one times the multiplier
				for($i = 0; $i < Positions::POSITION_MULTIPLIERS[$case->name]; $i++) {
					$positions[] = $case->value;
				}
			}

			$key = array_rand($positions);

			return $positions[$key];
		}

		/**
		 * @param int $position
		 * @return int[]
		 */
		public static function generateSize(
			int $position
		): array{
			$positionName = Positions::getByValue($position)->name;
			$positionHeightRangeString = $positionName . "_HEIGHT_RANGE";
			$positionWeightRangeString = $positionName . "_WEIGHT_RANGE";

			$heightArray = constant("Utils\Positions::$positionHeightRangeString");
			$weightArray = constant("Utils\Positions::$positionWeightRangeString");

			$height = UtilService::getRandomNumberUsingBellCurve(
				min: $heightArray[0],
				max: $heightArray[1],
				standardDeviation: 3
			);

			$weight = UtilService::getRandomNumberUsingBellCurve(
				min: $weightArray[0],
				max: $weightArray[1],
				standardDeviation: 10
			);

			return [
				"height" => $height,
				"weight" => $weight
			];
		}
	}