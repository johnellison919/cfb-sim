<?php

	namespace Recruit;

	use Nox\ORM\Exceptions\NoPrimaryKey;
	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class Recruit extends ModelClass implements ModelInstance
	{
		public ?int $id = null;
		public string $firstName;
		public string $lastName;
		public int $positionID;
		public int $height;
		public int $weight;
		public int $city;
		public int $state;

		public static function getModel(): MySQLModelInterface
		{
			return new RecruitsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}

		/**
		 * @param string $firstName
		 * @param string $lastName
		 * @param int $positionID
		 * @param int $height
		 * @param int $weight
		 * @param int $city
		 * @param int $state
		 * @return Recruit
		 */
		public static function createRecruit(
			string $firstName,
			string $lastName,
			int $positionID,
			int $height,
			int $weight,
			int $city,
			int $state,
		): Recruit{
			$recruit = new Recruit();
			$recruit->firstName = $firstName;
			$recruit->lastName = $lastName;
			$recruit->positionID = $positionID;
			$recruit->height = $height;
			$recruit->weight = $weight;
			$recruit->city = $city;
			$recruit->state = $state;
			$recruit->save();
			return $recruit;
		}

		/**
		 * @param Recruit $recruit
		 * @param string|null $firstName
		 * @param string|null $lastName
		 * @param int|null $positionID
		 * @param int|null $height
		 * @param int|null $weight
		 * @param int|null $city
		 * @param int|null $state
		 * @return Recruit
		 */
		public static function editRecruit(
			Recruit $recruit,
			string $firstName = null,
			string $lastName = null,
			int $positionID = null,
			int $height = null,
			int $weight = null,
			int $city = null,
			int $state = null,
		): Recruit{
			if($firstName !== null) {
				$recruit->firstName = $firstName;
			}
			if($lastName !== null) {
				$recruit->lastName = $lastName;
			}
			if($positionID !== null) {
				$recruit->positionID = $positionID;
			}
			if($height !== null) {
				$recruit->height = $height;
			}
			if($weight !== null) {
				$recruit->weight = $weight;
			}
			if($city !== null) {
				$recruit->city = $city;
			}
			if($state !== null) {
				$recruit->state = $state;
			}
			$recruit->save();
			return $recruit;
		}

		/**
		 * @param Recruit $recruit
		 * @return void
		 * @throws NoPrimaryKey
		 */
		public static function deleteRecruit(
			Recruit $recruit,
		): void{
			$recruit->delete();
		}
	}