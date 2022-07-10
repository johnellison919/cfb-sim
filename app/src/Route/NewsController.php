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
	#[RouteBase("/news")]
	class NewsController extends BaseController{

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/recent-news/")]
		public function recentNewsView(): string{
			return Renderer::renderView("/news/recent-news.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/top-25-polls/")]
		public function top25PollsView(): string{
			return Renderer::renderView("/news/top-25-polls.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/scores-and-schedules/")]
		public function scoresAndSchedulesView(): string{
			return Renderer::renderView("/news/scores-and-schedules.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/conference-standings/")]
		public function conferenceStandingsView(): string{
			return Renderer::renderView("/news/conference-standings.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/bowls/")]
		public function bowlsView(): string{
			return Renderer::renderView("/news/bowls.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/all-americans/")]
		public function allAmericansView(): string{
			return Renderer::renderView("/news/all-americans.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/awards/")]
		public function awardsView(): string{
			return Renderer::renderView("/news/awards.php");
		}
	}