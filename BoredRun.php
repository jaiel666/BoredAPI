<?php

require 'vendor/autoload.php';

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use App\BoredApplication;

$output = new ConsoleOutput();

$outputStyle = new OutputFormatterStyle('black', 'white');
$output->getFormatter()->setStyle('fire', $outputStyle);

$output->writeln('<fire>----Random activity list-----</>');

$app = new BoredApplication();
$app->run();
