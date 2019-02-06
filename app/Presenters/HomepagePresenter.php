<?php declare(strict_types = 1);

namespace Pd\Mailer\Presenters;

final class HomepagePresenter extends \Nette\Application\UI\Presenter
{

	/**
	 * @var \Pd\Mailer\Forms\EmailFormFactory
	 */
	private $emailFormFactory;

	/**
	 * @var \Nette\Mail\IMailer
	 */
	private $mailer;


	public function __construct(\Pd\Mailer\Forms\EmailFormFactory $emailFormFactory, \Nette\Mail\IMailer $mailer)
	{
		parent::__construct();

		$this->emailFormFactory = $emailFormFactory;
		$this->mailer = $mailer;
	}


	protected function createComponentEmailForm(): \Nette\Application\UI\Form
	{
		$form = $this->emailFormFactory->create();

		$form->addSubmit('send', 'Odeslat');

		$form->onSuccess[] = function (\Nette\Application\UI\Form $form, $values) {
			$message = new \Nette\Mail\Message();
			$message->setFrom($values[\Pd\Mailer\Forms\EmailFormFactory::INPUT_FROM_EMAIL], $values[\Pd\Mailer\Forms\EmailFormFactory::INPUT_FROM_NAME]);
			$message->addTo($values[\Pd\Mailer\Forms\EmailFormFactory::INPUT_TO_EMAIL], $values[\Pd\Mailer\Forms\EmailFormFactory::INPUT_TO_NAME]);
			$message->setSubject($values[\Pd\Mailer\Forms\EmailFormFactory::INPUT_SUBJECT]);
			$message->setHtmlBody($values[\Pd\Mailer\Forms\EmailFormFactory::INPUT_HTML]);

			$this->mailer->send($message);

			$this->flashMessage('Odesláno', 'ok');
		};

		return $form;
	}

}
