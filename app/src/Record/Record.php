<?php

	namespace Record;

	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class Record extends ModelClass implements ModelInstance
	{
		public int $id;
		public int $recordType;
		public int $recordHolderID;
		public int $date;
		public int $statType;
		public int $stat;

		public static function getModel(): MySQLModelInterface
		{
			return new RecordsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}
	}