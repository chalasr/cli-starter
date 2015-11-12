<?php

namespace Chalasdev\Console\Command;

use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\FormatterHelper;
use Chalasdev\Console\Entity;

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
       $this->setHelperSet($this->getApplication()->getHelperSet());
       $formatter = new FormatterHelper();
       $style = new OutputFormatterStyle('white', 'blue', array('bold'));
       $output->getFormatter()->setStyle('title', $style);
       $welcome = $formatter->formatBlock("Welcome to chalasdev/console-starter", "title", true);
       $output->writeln(['', $welcome, '', 'This project provide standalone for your deployment workflow, built on top of <comment>capistrano/symfony</comment> rubygem .', 'Created by Robin Chalas - github.com/chalasr']);

       $em = $this->getApplication()->getHelperSet()->get('em')->getEntityManager();
       $repo = $em->getRepository('Chalasdev\Console\Entity\Product');
       $products = $repo->findAll();
       foreach ($products as $prod) {
            $output->writeln($prod->getName());
       }
   }
}
