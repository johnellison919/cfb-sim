<?php

	namespace Utils;

	use Nox\ORM\Attributes\Model;
	use Nox\ORM\ColumnDefinition;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\MySQLDataTypes\Integer;
	use Nox\ORM\MySQLDataTypes\VariableCharacter;
	use NoxEnv;

	#[Model]
	class UtilsModel implements MySQLModelInterface
	{
		/**
		 * The name of the database this table belongs to
		 */
		private string $mysqlDatabaseName = NoxEnv::MYSQL_DB_NAME;

		/**
		 * The name of this Model in the MySQL database as a table
		 */
		private string $mysqlTableName = "utils";

		/**
		 * The string name of the class this model represents and can instantiate
		 */
		private string $representingClassName = Util::class;

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
					name: "name",
					classPropertyName: "name",
					dataType: new VariableCharacter(),
					defaultValue: "",
				),
				new ColumnDefinition(
					name: "value",
					classPropertyName: "value",
					dataType: new VariableCharacter(),
					defaultValue: "",
				),
			];
		}
	}