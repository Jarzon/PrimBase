<?php declare(strict_types=1);

namespace PrimBase\BasePack\Command;

use Prim\Console\Command;
use Prim\Console\{Input, Output};
use PrimBase\BasePack\Model\BaseModel;

class BaseCommand extends Command
{
    public function __construct(
        array $options,
        Input $input,
        Output $output,
        protected BaseModel $baseModel)
    {
        parent::__construct($options, $input, $output);

        $this
            ->setName('commandName')
            ->setDescription('Command description');
    }

    public function exec(): void
    {
        $firstArg = $this->input->getArgument(0);

        if ($firstArg == '') {
            $this->output->writeLine("Missing first param");
            exit;
        }

        // actual command code
    }
}
