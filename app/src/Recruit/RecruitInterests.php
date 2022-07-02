<?php

	namespace Recruit;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class RecruitInterests extends ModelClass implements ModelInstance
	{
		public int $recruitID;
		public ?int $firstTeamID;
		public ?int $firstTeamScore;
		public ?int $secondTeamID;
		public ?int $secondTeamScore;
		public ?int $thirdTeamID;
		public ?int $thirdTeamScore;
		// TODO: Add more teams; maybe 15?

		public static function getModel(): MySQLModelInterface
		{
			return new RecruitRatingsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}