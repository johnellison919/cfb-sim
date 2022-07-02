<?php

	namespace Team;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class TeamStats extends ModelClass implements ModelInstance
	{
		public int $teamID;
		// TODO: Add various stats like wins, losses, etc.

		public static function getModel(): MySQLModelInterface
		{
			return new TeamStatsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}