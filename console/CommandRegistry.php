<?php

declare(strict_types=1);

namespace Console;

use Inspira\Console\Input;
use Inspira\Console\Output;
use Inspira\Framework\Commands\CommandRegistry as Registry;

class CommandRegistry extends Registry
{
	public function register(): void
	{
		$this->console->command('hello', function(Input $input, Output $output) {
			$name = ucwords($input->getArguments('name', 'Developer'));
			$output->success("Hello $name, have a great day!");
		});
	}
}
