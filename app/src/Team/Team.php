<?php

	namespace Team;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class Team extends ModelClass implements ModelInstance
	{
		public int $id;
		public string $name;
		public string $nickname;
		public int $conferenceID;
		public int $conferenceDivisionID;
		public int $coachID;
		public ?int $rivalOneID;
		public ?int $rivalTwoID;
		public ?int $rivalThreeID;

		public static function getModel(): MySQLModelInterface
		{
			return new TeamsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}