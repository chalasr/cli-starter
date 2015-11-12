<?php

namespace Chalasdev\Console\Command;

use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\FormatterHelper;

class FindByInStoreCommand extends Command
{

   protected function configure()
   {
      $this
      ->setName('products:in-store')
      ->setDescription('Find all orders whith In-store status');
   }

   protected function execute(InputInterface $input, OutputInterface $output)
   {
       $formatter = new FormatterHelper();
       $style = new OutputFormatterStyle('white', 'blue', array('bold'));
       $output->getFormatter()->setStyle('title', $style);
       $welcome = $formatter->formatBlock("Welcome to chalasdev/console-starter", "title", true);
       $output->writeln(['', $welcome, '', 'This project provide standalone for your deployment workflow, built on top of <comment>capistrano/symfony</comment> rubygem .', 'Created by Robin Chalas - github.com/chalasr']);

       $query = $em->createQuery('SELECT u FROM ps_orders u WHERE u.current_state = 14');
       $products = $query->getResult();
       foreach ($products as $prod) {
            $output->writeln($prod);
       }
   }
}
