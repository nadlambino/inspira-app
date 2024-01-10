<?php

declare(strict_types=1);

namespace Console;

use Inspira\Console\Contracts\InputInterface;
use Inspira\Console\Contracts\OutputInterface;
use Inspira\Console\Enums\Color;
use Inspira\Console\Styles\Styles;
use Inspira\Framework\Commands\CommandRegistry as Registry;

class CommandRegistry extends Registry
{
	public function register(): void
	{
		$this->addCommand('hello', function(InputInterface $input, OutputInterface $output) {
			$name = ucwords($input->getArgument('name', 'Developer'));
			$message = Styles::make()
				->paint(Color::GREEN)
				->paddingX(20)
				->paddingY(1)
				->apply("Hello $name, have a great day!");

			$output->writeln($message);
		});
	}
}
