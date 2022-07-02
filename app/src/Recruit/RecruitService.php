<?php

	namespace Recruit;

	use ReflectionEnum;
	use ReflectionException;
	use Utils\States\Common;
	use Utils\States\Rare;
	use Utils\States\States;
	use Utils\States\Uncommon;
	use Utils\States\VeryRare;

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
					height: $size[0],
					weight: $size[1],
					city: $city,
					state: $state,
				);

				$recruitRatings = RecruitRatings::createRecruitRatings(
					recruitID: $recruit->id
				);

				$recruitInterests = RecruitInterests::createRecruitInterests(
					recruitID: $recruit->id,
				);
			}
		}

		/**
		 * @return int
		 */
		public static function generateState(): int{
			$states = [];

			// Adds the common states to the array
			foreach(Common::cases() as $case) {
				// Adds each state one times the multiplier
				for($i = 0; $i < States::RARITY_MULTIPLIERS["Common"]; $i++) {
					$states[] = $case->value;
				}
			}

			// Adds the uncommon states to the array
			foreach(Uncommon::cases() as $case) {
				// Adds each state one times the multiplier
				for($i = 0; $i < States::RARITY_MULTIPLIERS["Uncommon"]; $i++) {
					$states[] = $case->value;
				}
			}

			// Adds the rare states to the array
			foreach(Rare::cases() as $case) {
				// Adds each state one times the multiplier
				for($i = 0; $i < States::RARITY_MULTIPLIERS["Rare"]; $i++) {
					$states[] = $case->value;
				}
			}

			// Adds the very rare states to the array
			foreach(VeryRare::cases() as $case) {
				// Adds each state one times the multiplier
				for($i = 0; $i < States::RARITY_MULTIPLIERS["VeryRare"]; $i++) {
					$states[] = $case->value;
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
			$stateReflectionEnum = new ReflectionEnum("Utils\Cities\\" . $stateName);

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

		public static function generatePosition(): int{
			$positions = [];


			return 0;
		}

		// TODO
		public static function generateSize(
			int $position
		): array{
			return [0, 0];
		}
	}