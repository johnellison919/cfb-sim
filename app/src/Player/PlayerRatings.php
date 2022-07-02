<?php

	namespace Player;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class PlayerRatings extends ModelClass implements ModelInstance
	{
		public int $playerID;
		// TODO: add different player ratings like speed, throwing, etc.

		public static function getModel(): MySQLModelInterface
		{
			return new PlayersModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}