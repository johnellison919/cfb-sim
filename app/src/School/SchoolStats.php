<?php

	namespace School;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class SchoolStats extends ModelClass implements ModelInstance
	{
		public int $schoolID;
		// TODO: Add various stats like wins, losses, etc.

		public static function getModel(): MySQLModelInterface
		{
			return new SchoolStatsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}