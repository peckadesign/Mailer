<?php declare(strict_types = 1);

require __DIR__ . '/../vendor/autoload.php';

\umask(0);

\Pd\Mailer\Booting::boot()
	->createContainer()
	->getByType(\Nette\Application\Application::class)
	->run()
;
