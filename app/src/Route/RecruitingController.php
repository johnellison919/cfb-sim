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
	#[RouteBase("/recruiting")]
	class RecruitingController extends BaseController{

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/recruiting-board/")]
		public function recruitingBoardView(): string{
			return Renderer::renderView("/recruiting/recruiting-board.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/prospects/")]
		public function prospectsView(): string{
			return Renderer::renderView("/recruiting/prospects.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/my-school/")]
		public function mySchoolView(): string{
			return Renderer::renderView("/recruiting/my-school.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/team-needs/")]
		public function teamNeedsView(): string{
			return Renderer::renderView("/recruiting/team-needs.php");
		}

		/**
		 * @throws ParseError
		 * @throws ViewFileDoesNotExist
		 * @throws LayoutDoesNotExist
		 */
		#[Route("GET", "/recruiting-plan/")]
		public function recruitingPlanView(): string{
			return Renderer::renderView("/recruiting/recruiting-plan.php");
		}
	}