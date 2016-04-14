<?php

namespace Controllers;

use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;
use Silex\Application;
use Symfony\Bridge\Twig\TwigEngine;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Translation\Translator;
use Doctrine\ORM\EntityManager;

abstract class AbstractController implements ControllerProviderInterface {

	/**
	 * @var ControllerCollection $controller;
	 */
	protected $controller;
	/**
	 * @var Application $app
	 */
	protected $app;
	/**
	 * @var EntityManager $em
	 */
	protected $em;


	/**
	 * @var TwigEngine $twig
	 */
	protected $twig;

	/**
	 * @var string $template
	 */
	private $template = '';

	/**
	 * @var array $parameters
	 */
	protected $parameters = [];

	/**
	 * @var Session $session
	 */
	protected $session;

	/**
	 * @var Translator $translator
	 */
	protected $translator;

	/**
	 * @param Application $app
	 * @return mixed
	 */
	public function connect(Application $app) {
		$this->app = $app;
		$this->em = $app['em'];
		$this->controller = $app['controllers_factory'];
		$this->twig = $app['twig'];
		$this->session = $app['session'];
		$this->validator = $app['validator'];
		$this->translator = $app['translator'];

		return $this->actionsHandler();
	}

	protected function setTemplate($template) {
		$this->template = $template;
	}

	protected function render() {

		if ($this->template == '') {
			throw new Exception('Template wasn\'t specified');
		}

		return $this->twig->render($this->template, $this->parameters);

	}

	protected function viewAssign($name, $value) {

		$this->parameters[$name] = $value;

	}

	protected function viewAssigns(array $parameters = []) {

		foreach($parameters as $name => $value) {
			$this->viewAssign($name, $value);
		}

	}


	abstract protected function actionsHandler();

}