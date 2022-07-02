<?php

	namespace Recruit;

	class RecruitService
	{

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

		// TODO
		public static function generateState(): int{
			return 0;
		}

		// TODO
		public static function generateCity(
			string $state
		): int{
			return 0;
		}

		// TODO
		public static function generateName(
			string $state
		): array{
			return ["", ""];
		}

		// TODO
		public static function generatePosition(): int{
			return 0;
		}

		// TODO
		public static function generateSize(
			int $position
		): array{
			return [0, 0];
		}
	}