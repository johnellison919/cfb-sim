<?php

	namespace Schedule;

	use Nox\ORM\Attributes\Model;
	use Nox\ORM\ColumnDefinition;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\MySQLDataTypes\Integer;
	use Nox\ORM\MySQLDataTypes\VariableCharacter;
	use NoxEnv;

	#[Model]
	class SchedulesModelodel implements MySQLModelInterface
	{
		/**
		 * The name of the database this table belongs to
		 */
		private string $mysqlDatabaseName = NoxEnv::MYSQL_DB_NAME;

		/**
		 * The name of this Model in the MySQL database as a table
		 */
		private string $mysqlTableName = "schedules";

		/**
		 * The string name of the class this model represents and can instantiate
		 */
		private string $representingClassName = Schedule::class;

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
					name: "week",
					classPropertyName: "week",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "location",
					classPropertyName: "location",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "is_neutral",
					classPropertyName: "isNeutral",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "home_team_id",
					classPropertyName: "homeTeamID",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "away_team_id",
					classPropertyName: "awayTeamID",
					dataType: new Integer(),
					defaultValue: 0,
				),
				new ColumnDefinition(
					name: "home_team_score",
					classPropertyName: "home_team_score",
					dataType: new Integer(),
					defaultValue: null,
				),
				new ColumnDefinition(
					name: "away_team_score",
					classPropertyName: "away_team_score",
					dataType: new Integer(),
					defaultValue: null,
				),
			];
		}
	}