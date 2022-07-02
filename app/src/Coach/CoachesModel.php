<?php

	namespace Coach;

	use Nox\ORM\Attributes\Model;
	use Nox\ORM\ColumnDefinition;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\MySQLDataTypes\Integer;
	use Nox\ORM\MySQLDataTypes\VariableCharacter;
	use NoxEnv;

	#[Model]
	class CoachesModel implements MySQLModelInterface
	{
		/**
		 * The name of the database this table belongs to
		 */
		private string $mysqlDatabaseName = NoxEnv::MYSQL_DB_NAME;

		/**
		 * The name of this Model in the MySQL database as a table
		 */
		private string $mysqlTableName = "coaches";

		/**
		 * The string name of the class this model represents and can instantiate
		 */
		private string $representingClassName = Coach::class;

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
					name: "first_name",
					classPropertyName: "firstName",
					dataType: new VariableCharacter(),
					defaultValue: "",
				),
				new ColumnDefinition(
					name: "last_name",
					classPropertyName: "lastName",
					dataType: new VariableCharacter(),
					defaultValue: "",
				),
				new ColumnDefinition(
					name: "alma_mater",
					classPropertyName: "almaMater",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "age",
					classPropertyName: "age",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "offensive_playbook",
					classPropertyName: "offensivePlaybook",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "defensive_playbook",
					classPropertyName: "defensivePlaybook",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "team_id",
					classPropertyName: "teamID",
					dataType: new Integer(),
					defaultValue: null,
				),
				new ColumnDefinition(
					name: "user_id",
					classPropertyName: "userID",
					dataType: new Integer(),
					defaultValue: null,
				),
			];
		}
	}