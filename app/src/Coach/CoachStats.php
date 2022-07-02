<?php

namespace Coach;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class CoachStats extends ModelClass implements ModelInstance
	{
		public int $coachID;
		// TODO: add coach stats like games won, games lost, etc.

		public static function getModel(): MySQLModelInterface
		{
			return new CoachStatsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}