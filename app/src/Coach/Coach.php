<?php

	namespace Coach;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class Coach extends ModelClass implements ModelInstance
	{
		public ?int $id = null;
		public string $firstName;
		public string $lastName;
		public int $almaMater;
		public int $age;
		public int $offensivePlaybook;
		public int $defensivePlaybook;
		public ?int $teamID;
		public ?int $userID;

		public static function getModel(): MySQLModelInterface
		{
			return new CoachesModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}