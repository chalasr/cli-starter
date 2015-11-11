<?php

namespace Chalasdev\Console\Command;

use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Filesystem\Filesystem;


class RunCommand extends Command
{

   protected function configure()
   {
      $this
      ->setName('chalasdev:run')
      ->setDescription('Setup capistrano deployment configuration in interactive mode');
   }

   protected function execute(InputInterface $input, OutputInterface $output)
   {
       $fs = new Filesystem();
       $formatter = $this->getHelper('formatter');
       $style = new OutputFormatterStyle('white', 'blue', array('bold'));
       $output->getFormatter()->setStyle('title', $style);
       $welcome = $formatter->formatBlock("Welcome to chalasdev/console-starter", "title", true);
       $output->writeln(['', $welcome, '', 'This project provide standalone for your deployment workflow, built on top of <comment>capistrano/symfony</comment> rubygem .', 'Created by Robin Chalas - github.com/chalasr']);
   }

}