<?php

	namespace Coach;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class CoachRatings extends ModelClass implements ModelInstance
	{
		public int $coachID;
		// TODO: add coach ratings like recruiting, offensive, defensive

		public static function getModel(): MySQLModelInterface
		{
			return new CoachRatingsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
}