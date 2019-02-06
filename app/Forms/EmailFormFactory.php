<?php declare(strict_types = 1);

namespace Pd\Mailer\Forms;

final class EmailFormFactory
{

	public const INPUT_FROM_EMAIL = 'fromEmail';
	public const INPUT_FROM_NAME = 'fromName';
	public const INPUT_TO_EMAIL = 'toEmail';
	public const INPUT_TO_NAME = 'toName';
	public const INPUT_SUBJECT = 'subject';
	public const INPUT_HTML = 'html';


	public function create(): \Nette\Application\UI\Form
	{
		$form = new \Nette\Application\UI\Form();

		$form
			->addText(self::INPUT_FROM_EMAIL, 'E-mail odesílatele')
			->setRequired(TRUE)
		;

		$form
			->addText(self::INPUT_FROM_NAME, 'Jméno odesílatel')
			->setRequired(FALSE)
		;

		$form
			->addText(self::INPUT_TO_EMAIL, 'E-mail příjemce')
			->setRequired(TRUE)
		;

		$form
			->addText(self::INPUT_TO_NAME, 'Jméno příjemce')
			->setRequired(FALSE)
		;

		$form
			->addText(self::INPUT_SUBJECT, 'Předmět')
			->setRequired(TRUE)
		;

		$form
			->addTextArea(self::INPUT_HTML, 'Zpráva v HTML')
			->setRequired(TRUE)
		;

		return $form;
	}

}
