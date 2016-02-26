<?php

namespace Migrate;

use Migrate\Command\AddEnvCommand;
use Migrate\Command\CreateCommand;
use Migrate\Command\DownCommand;
use Migrate\Command\InitCommand;
use Migrate\Command\StatusCommand;
use Migrate\Command\UpCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MigrateBundle
 *
 * Import this class to integrate migrate commands to the symfony console.
 */
class MigrateBundle extends Bundle
{
    public function getContainerExtension()
    {
        return;
    }

    public function registerCommands(Application $application)
    {
        $application->add(new AddEnvCommand());
        $application->add(new CreateCommand());
        $application->add(new DownCommand());
        $application->add(new InitCommand());
        $application->add(new StatusCommand());
        $application->add(new UpCommand());
    }
}