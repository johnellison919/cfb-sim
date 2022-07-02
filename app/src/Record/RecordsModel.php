<?php

	namespace Record;

	use Nox\ORM\Attributes\Model;
	use Nox\ORM\ColumnDefinition;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\MySQLDataTypes\Integer;
	use NoxEnv;

	#[Model]
	class RecordsModel implements MySQLModelInterface
	{
		/**
		 * The name of the database this table belongs to
		 */
		private string $mysqlDatabaseName = NoxEnv::MYSQL_DB_NAME;

		/**
		 * The name of this Model in the MySQL database as a table
		 */
		private string $mysqlTableName = "records";

		/**
		 * The string name of the class this model represents and can instantiate
		 */
		private string $representingClassName = Record::class;

		public function getDatabaseName(): string{
			return $this->mysqlDatabaseName;
		}

		public function getName(): string{
			return $this->mysqlTableName;
		}

		public function getInstanceName(): string{
			return $this->representingClassName;
		}

		public function getColumns(): array{
			return [
				new ColumnDefinition(
					name: "id",
					classPropertyName: "id",
					dataType: new Integer(),
					defaultValue: 0,
					autoIncrement: true,
					isPrimary: true,
					isUnique: true,
					isNull: false,
				),
				new ColumnDefinition(
					name: "record_type",
					classPropertyName: "recordType",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "record_holder_id",
					classPropertyName: "recordHolderID",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "stat_type",
					classPropertyName: "statType",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "stat",
					classPropertyName: "stat",
					dataType: new Integer(),
					defaultValue: 0,
				),
			];
		}
	}