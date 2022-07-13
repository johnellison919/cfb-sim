<?php

	namespace School;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class SchoolRatings extends ModelClass implements ModelInstance
	{
		public int $schoolID;

		// TODO: Add various ratings like academics, play time, etc.

		public static function getModel(): MySQLModelInterface
		{
			return new SchoolRatingsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}