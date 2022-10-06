<?php
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Hamzabedwi\ActionMattermostNotify\SendCommand;

# Load version information from the composer file
# You will need to add a version tag to your composer.json
$version = json_decode(file_get_contents(__DIR__ . '/composer.json'), true);

$app = new Application('Action Mattermost Notify', $version['version']);

$app->add(new SendCommand());

$app->run();


