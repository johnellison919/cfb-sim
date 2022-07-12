<?php

	namespace Route;

	use Nox\RenderEngine\Exceptions\LayoutDoesNotExist;
	use Nox\RenderEngine\Exceptions\ParseError;
	use Nox\RenderEngine\Exceptions\ViewFileDoesNotExist;
	use Nox\RenderEngine\Renderer;
	use Nox\Router\Attributes\Controller;
	use Nox\Router\Attributes\Route;
	use Nox\Router\Attributes\RouteBase;
	use Nox\Router\BaseController;

	#[Controller]
	#[RouteBase("/stats-and-records")]
	class StatsAndRecordsController extends BaseController{

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/season-stats/")]
		public function seasonStatsView(): string{
			return Renderer::renderView("/stats-and-records/season-stats.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/career-stats/")]
		public function careerStatsView(): string{
			return Renderer::renderView("/stats-and-records/career-stats.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/coaching-stats/")]
		public function coachingStatsView(): string{
			return Renderer::renderView("/stats-and-records/coaching-stats.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/school-records/")]
		public function schoolRecordsView(): string{
			return Renderer::renderView("/stats-and-records/school-records.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/ncaa-records/")]
		public function NCAARecordsView(): string{
			return Renderer::renderView("/stats-and-records/ncaa-records.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/coaching-records/")]
		public function coachingRecordsView(): string{
			return Renderer::renderView("/stats-and-records/coaching-records.php");
		}
	}