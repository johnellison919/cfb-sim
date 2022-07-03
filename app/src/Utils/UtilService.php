<?php

	namespace Utils;

	class UtilService
	{
		/**
		 * @param int $min
		 * @param int $max
		 * @param int $standardDeviation
		 * @param int $step
		 * @return int
		 */
		public static function getRandomNumberUsingBellCurve(
			int $min,
			int $max,
			int $standardDeviation,
			int $step = 1,
		): int{
			$rand1 = (float)mt_rand()/(float)mt_getrandmax();
			$rand2 = (float)mt_rand()/(float)mt_getrandmax();
			$gaussianNumber = sqrt(-2 * log($rand1)) * cos(2 * M_PI * $rand2);
			$mean = ($max + $min) / 2;
			$randomNumber = ($gaussianNumber * $standardDeviation) + $mean;
			$randomNumber = round($randomNumber / $step) * $step;

			if($randomNumber < $min || $randomNumber > $max) {
				$randomNumber = self::getRandomNumberUsingBellCurve($min, $max, $standardDeviation);
			}

			return $randomNumber;
		}
	}