<?php

	namespace Player;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class Player extends ModelClass implements ModelInstance
	{
		public ?int $id = null;
		public string $firstName;
		public string $lastName;
		public int $positionID;
		public int $height;
		public int $weight;
		public int $teamID;

		public static function getModel(): MySQLModelInterface
		{
			return new PlayersModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}