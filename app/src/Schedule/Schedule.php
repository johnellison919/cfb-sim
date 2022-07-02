<?php

	namespace Schedule;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class Schedule extends ModelClass implements ModelInstance
	{
		public int $id;
		public int $week;
		public int $location;
		public int $isNeutral;
		public int $homeTeamID;
		public int $awayTeamID;
		public ?int $homeTeamScore;
		public ?int $awayTeamScore;

		public static function getModel(): MySQLModelInterface
		{
			return new SchedulesModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}