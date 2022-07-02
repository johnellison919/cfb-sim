<?php

namespace Recruit;

	use Nox\ORM\Attributes\Model;
	use Nox\ORM\ColumnDefinition;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\MySQLDataTypes\Integer;
	use NoxEnv;

	#[Model]
	class RecruitInterestsModel implements MySQLModelInterface
	{
		/**
		 * The name of the database this table belongs to
		 */
		private string $mysqlDatabaseName = NoxEnv::MYSQL_DB_NAME;

		/**
		 * The name of this Model in the MySQL database as a table
		 */
		private string $mysqlTableName = "recruits_interests";

		/**
		 * The string name of the class this model represents and can instantiate
		 */
		private string $representingClassName = RecruitInterests::class;

		public function getDatabaseName(): string{
			return $this->mysqlDatabaseName;
		}

		public function getName(): string{
			return $this->mysqlTableName;
		}

		public function getInstanceName(): string{
			return $this->representingClassName;
		}

		public function getColumns(): array
		{
			return [
				new ColumnDefinition(
					name: "recruit_id",
					classPropertyName: "recruitID",
					dataType: new Integer(),
					defaultValue: 0,
					isUnique: true,
				),
				new ColumnDefinition(
					name: "first_team_id",
					classPropertyName: "firstTeamID",
					dataType: new Integer(),
					defaultValue: null,
				),
				new ColumnDefinition(
					name: "first_team_score",
					classPropertyName: "firstTeamScore",
					dataType: new Integer(),
					defaultValue: null,
				),
				new ColumnDefinition(
					name: "second_team_id",
					classPropertyName: "secondTeamID",
					dataType: new Integer(),
					defaultValue: null,
				),
				new ColumnDefinition(
					name: "second_team_score",
					classPropertyName: "secondTeamScore",
					dataType: new Integer(),
					defaultValue: null,
				),
				new ColumnDefinition(
					name: "third_team_id",
					classPropertyName: "thirdTeamID",
					dataType: new Integer(),
					defaultValue: null,
				),
				new ColumnDefinition(
					name: "third_team_score",
					classPropertyName: "thirdTeamScore",
					dataType: new Integer(),
					defaultValue: null,
				),
			];
		}
	}