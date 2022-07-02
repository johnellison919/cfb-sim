<?php

	namespace Team;

	use Nox\ORM\Attributes\Model;
	use Nox\ORM\ColumnDefinition;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\MySQLDataTypes\Integer;
	use Nox\ORM\MySQLDataTypes\VariableCharacter;
	use NoxEnv;

	#[Model]
	class TeamsModel implements MySQLModelInterface
	{
		/**
		 * The name of the database this table belongs to
		 */
		private string $mysqlDatabaseName = NoxEnv::MYSQL_DB_NAME;

		/**
		 * The name of this Model in the MySQL database as a table
		 */
		private string $mysqlTableName = "teams";

		/**
		 * The string name of the class this model represents and can instantiate
		 */
		private string $representingClassName = Team::class;

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
					name: "name",
					classPropertyName: "name",
					dataType: new VariableCharacter(),
					defaultValue: "",
				),
				new ColumnDefinition(
					name: "nickname",
					classPropertyName: "nickname",
					dataType: new VariableCharacter(),
					defaultValue: "",
				),
				new ColumnDefinition(
					name: "conference_id",
					classPropertyName: "conferenceID",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "conference_division_id",
					classPropertyName: "conferenceDivisionID",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "coach_id",
					classPropertyName: "coachID",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "rival_one_id",
					classPropertyName: "rivalOneID",
					dataType: new Integer(),
					defaultValue: null,
				),
				new ColumnDefinition(
					name: "rival_two_id",
					classPropertyName: "rivalTwoID",
					dataType: new Integer(),
					defaultValue: null,
				),
				new ColumnDefinition(
					name: "rival_three_id",
					classPropertyName: "rivalThreeID",
					dataType: new Integer(),
					defaultValue: null,
				),
			];
		}
	}