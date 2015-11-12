<?php

namespace Chalasdev\Console\Command;

use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

class TestCommand extends Command
{

   protected function configure()
   {
      $this
      ->setName('chalasdev:test')
      ->setDescription('Test autoload from namespace');
   }

   protected function execute(InputInterface $input, OutputInterface $output)
   {
      $formatter = new FormatterHelper();
       $style = new OutputFormatterStyle('white', 'blue', array('bold'));
       $output->getFormatter()->setStyle('title', $style);
       $welcome = $formatter->formatBlock("Welcome to chalasdev/doctrine-cli - Test Autoload !", "title", true);
       $output->writeln(['', $welcome, '', 'This project provide cli-centered application to manage databases and create interactive commands, using <comment>symfony/console</comment> and <comment>doctrine/orm</comment> .', 'Created by Robin Chalas - github.com/chalasr']);
   }

}
