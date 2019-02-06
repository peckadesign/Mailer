<?php declare(strict_types = 1);

require __DIR__ . '/../vendor/autoload.php';

\Pd\Mailer\Booting::boot()
	->createContainer()
	->getByType(\Nette\Application\Application::class)
	->run()
;
