<?php declare(strict_types = 1);

namespace Pd\Mailer;

final class Booting
{

	public static function boot(): \Nette\Configurator
	{
		$configurator = new \Nette\Configurator();

		$configurator->setDebugMode(TRUE);
		$configurator->enableTracy(__DIR__ . '/../log');

		$configurator->setTimeZone('Europe/Prague');
		$configurator->setTempDirectory(__DIR__ . '/../temp');

		$configurator->addConfig(__DIR__ . '/config/config.neon');
		$configurator->addConfig(__DIR__ . '/config/config.local.neon');

		return $configurator;
	}

}
