<?php

	namespace Recruit;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class RecruitRatings extends ModelClass implements ModelInstance
	{
		public int $recruitID;
		// TODO: add different recruit ratings like speed, throwing, etc.

		public static function getModel(): MySQLModelInterface
		{
			return new RecruitRatingsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}