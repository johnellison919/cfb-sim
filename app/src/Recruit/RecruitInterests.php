<?php

	namespace Recruit;

	use Nox\ORM\Exceptions\NoPrimaryKey;
	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class RecruitInterests extends ModelClass implements ModelInstance
	{
		public int $recruitID;
		public ?int $firstTeamID;
		public ?int $firstTeamScore;
		public ?int $secondTeamID;
		public ?int $secondTeamScore;
		public ?int $thirdTeamID;
		public ?int $thirdTeamScore;
		// TODO: Add more teams; maybe 15?

		public static function getModel(): MySQLModelInterface
		{
			return new RecruitInterestsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}

		/**
		 * @param int $recruitID
		 * @return RecruitInterests
		 */
		public static function createRecruitInterests(
			int $recruitID,
		): RecruitInterests{
			$recruitInterests = new RecruitInterests();
			$recruitInterests->recruitID = $recruitID;
			$recruitInterests->save();
			return $recruitInterests;
		}

		/**
		 * @param RecruitInterests $recruitInterests
		 * @param int|null $recruitID
		 * @param int|null $firstTeamID
		 * @param int|null $firstTeamScore
		 * @param int|null $secondTeamID
		 * @param int|null $secondTeamScore
		 * @param int|null $thirdTeamID
		 * @param int|null $thirdTeamScore
		 * @return RecruitInterests
		 */
		public static function editRecruitInterests(
			RecruitInterests $recruitInterests,
			int $recruitID = null,
			int $firstTeamID = null,
			int $firstTeamScore = null,
			int $secondTeamID = null,
			int $secondTeamScore = null,
			int $thirdTeamID = null,
			int $thirdTeamScore = null,
		): RecruitInterests{
			if($recruitID !== null) {
				$recruitInterests->recruitID = $recruitID;
			}
			if($firstTeamID !== null) {
				$recruitInterests->firstTeamID = $firstTeamID;
			}
			if($firstTeamScore !== null) {
				$recruitInterests->firstTeamScore = $firstTeamScore;
			}
			if($secondTeamID !== null) {
				$recruitInterests->secondTeamID = $secondTeamID;
			}
			if($secondTeamScore !== null) {
				$recruitInterests->secondTeamScore = $secondTeamScore;
			}
			if($thirdTeamID !== null) {
				$recruitInterests->thirdTeamID = $thirdTeamID;
			}
			if($thirdTeamScore !== null) {
				$recruitInterests->thirdTeamScore = $thirdTeamScore;
			}
			$recruitInterests->save();
			return $recruitInterests;
		}

		/**
		 * @param RecruitInterests $recruitInterests
		 * @return void
		 * @throws NoPrimaryKey
		 */
		public static function deleteRecruitInterests(
			RecruitInterests $recruitInterests
		): void{
			$recruitInterests->delete();
		}
	}