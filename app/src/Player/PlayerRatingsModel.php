<?php

	namespace Player;

	use Nox\ORM\Attributes\Model;
	use Nox\ORM\ColumnDefinition;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\MySQLDataTypes\Integer;
	use NoxEnv;

	#[Model]
	class PlayerRatingsModel implements MySQLModelInterface
	{
		/**
		 * The name of the database this table belongs to
		 */
		private string $mysqlDatabaseName = NoxEnv::MYSQL_DB_NAME;

		/**
		 * The name of this Model in the MySQL database as a table
		 */
		private string $mysqlTableName = "players_ratings";

		/**
		 * The string name of the class this model represents and can instantiate
		 */
		private string $representingClassName = Player::class;

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
					name: "player_id",
					classPropertyName: "playerID",
					dataType: new Integer(),
					defaultValue: 0,
					isUnique: true,
				),
			];
		}
	}