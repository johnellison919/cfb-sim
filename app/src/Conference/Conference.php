<?php

	namespace Conference;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class Conference extends ModelClass implements ModelInstance
	{
		public int $id;
		public string $name;
		// TODO: add spots for teams

		public static function getModel(): MySQLModelInterface
		{
			return new ConferencesModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}