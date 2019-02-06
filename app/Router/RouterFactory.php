<?php declare(strict_types = 1);

namespace Pd\Mailer\Router;

final class RouterFactory
{

	use \Nette\StaticClass;


	public static function createRouter(): \Nette\Application\Routers\RouteList
	{
		$router = new \Nette\Application\Routers\RouteList();
		$router[] = new \Nette\Application\Routers\Route('<presenter>/<action>[/<id>]', 'Homepage:default');

		return $router;
	}

}
