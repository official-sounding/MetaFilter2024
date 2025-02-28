<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

final class Pint extends Command
{
    protected $signature = 'pint
                            {--test : If you would like Pint to simply inspect your code for style errors without actually changing the files, you may use the --test option}
                            {--dirty : If you would like Pint to only modify the files that have uncommitted changes according to Git, you may use the --dirty option}
                            {argument?* : Additional arguments for ./vendor/bin/pint like app/Models to run Pint on specific directory}';

    protected $description = 'Run Pint command';

    public function handle(): int
    {
        $options = [
            'test' => $this->option('test'),
            'dirty' => $this->option('dirty'),
            'verbose' => $this->option('verbose'),
        ];

        $additionalArguments = $this->argument('argument');

        $command = array_filter([
            './vendor/bin/pint',
            $options['test'] ? '--test' : null,
            $options['dirty'] ? '--dirty' : null,
            $options['verbose'] ? '-v' : null,
            ...$additionalArguments,
        ]);

        $this->info('Executing command: ' . implode(' ', $command));

        $process = new Process($command);

        $process->setTimeout(null);

        $process->run(function ($type, $output) {
            $typeLabel = $type === Process::ERR ? '[ERROR]' : '';
            $this->output->write($typeLabel . $output);
        });

        $exitCode = $process->getExitCode();
        $this->info('Process exit code: ' . $exitCode);

        $errorOutput = $process->getErrorOutput();
        $this->info('Error output: ' . ($errorOutput ?: 'None'));

        $this->info('Process output length: ' . strlen($process->getOutput()));

        if (!$process->isSuccessful()) {
            $this->error('Process failed with exit code: ' . $exitCode);
            $this->error($errorOutput ?: 'No error output was provided');

            return 1;
        }

        return 0;
    }
}
