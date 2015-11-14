<?php

namespace Chalasdev\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Process\ProcessBuilder;
use Symfony\Component\Process\PhpExecutableFinder;

class ServerCommand extends Command
{
    protected function configure()
    {
        $this
        ->setDefinition([
            new InputArgument('address', InputArgument::OPTIONAL, 'Address:port', 'localhost:3000'),
        ])
        ->setName('server:run')
        ->setDescription('PHP built-in server');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->setVerbosity(10);
        $finder = new PhpExecutableFinder();
        if (false === $binary = $finder->find()) {
          $output->writeln('<error>Unable to find PHP binary to run server</error>');

          return;
        }
        $builder = new ProcessBuilder([$binary, '-S', $input->getArgument('address'), '-t', 'web/']);
        $builder->setTimeout(null);
        $process = $builder->getProcess();
        $process->run(function ($type, $buffer) use ($output) {
            if (OutputInterface::VERBOSITY_VERBOSE <= $output->getVerbosity()) {
                $output->write($buffer);
            }
        });
        if (!$process->isSuccessful()) {
            $output->writeln('<error>Built-in server terminated unexpectedly</error>');

            if (OutputInterface::VERBOSITY_VERBOSE > $output->getVerbosity()) {
                $output->writeln('<error>Run the command again with -v option for more details</error>');
            }
        }

        return $process->getExitCode();
    }
}
