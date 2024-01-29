<?php

namespace App\Command;

use App\Entity\Monster;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Id\AssignedGenerator;
use Faker\Factory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MonsterCommand extends Command
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();

        $this->entityManager = $entityManager;
    }

    protected function configure()
    {
        $this->setName('app:add-monster-data')
            ->setDescription('Add Monster entities with Faker data.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $monster = new Monster();
            $monster->setName($faker->name);
            $monster->setPv($faker->numberBetween(50, 200));
            $monster->setLevel($faker->numberBetween(1, 25));

            $this->entityManager->persist($monster);
        }

        $this->entityManager->flush();

        $output->writeln('Monster data added successfully.');

        return Command::SUCCESS;
    }
}
