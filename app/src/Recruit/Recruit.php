<?php

	namespace Recruit;

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
	}