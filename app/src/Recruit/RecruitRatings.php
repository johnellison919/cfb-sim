<?php

	namespace Recruit;

	use Nox\ORM\Exceptions\NoPrimaryKey;
	use Nox\ORM\Interfaces\ModelInstance;
	use Nox\ORM\Interfaces\MySQLModelInterface;
	use Nox\ORM\ModelClass;

	class RecruitRatings extends ModelClass implements ModelInstance
	{
		public int $recruitID;
		// TODO: add different recruit ratings like speed, throwing, etc. (make sure to include school preference stats)

		public static function getModel(): MySQLModelInterface
		{
			return new RecruitRatingsModel();
		}

		public function __construct()
		{
			parent::__construct($this);
		}

		/**
		 * @param int $recruitID
		 * @return RecruitRatings
		 */
		public static function createRecruitRatings(
			int $recruitID
		): RecruitRatings{
			$recruitRatings = new RecruitRatings();
			$recruitRatings->recruitID = $recruitID;
			$recruitRatings->save();
			return $recruitRatings;
		}

		/**
		 * @param RecruitRatings $recruitRatings
		 * @param int|null $recruitID
		 * @return RecruitRatings
		 */
		public static function editRecruitRatings(
			RecruitRatings $recruitRatings,
			int $recruitID = null
		): RecruitRatings{
			if($recruitID !== null) {
				$recruitRatings->recruitID = $recruitID;
			}
			$recruitRatings->save();
			return $recruitRatings;
		}

		/**
		 * @param RecruitRatings $recruitRatings
		 * @return void
		 * @throws NoPrimaryKey
		 */
		public static function deleteRecruitRatings(
			RecruitRatings $recruitRatings,
		): void{
			$recruitRatings->delete();
		}
	}