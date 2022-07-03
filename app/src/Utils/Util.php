<?php

	namespace Utils;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class Util extends ModelClass implements ModelInstance
	{
		public string $name;
		public ?int $value;

		public static function getModel(): MySQLModelInterface
		{
			return new UtilsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}