<?php
use App\Http\Controllers\BotManController;
use App\Http\Controllers\OnboardingConversation;
use App\Http\Controllers\SubscribeController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('Facebook subscribe', function ($bot) {
    $bot->reply('Thanks!');
    $bot->startConversation(new SubscribeController);
});

$botman->hears('Call me {name}', function ($bot,$name) {
    $bot->reply('Hello'. $name .'How are you?!');
});

$botman->hears('.*Hello.*', function ($bot) {
    $bot->reply('Nice to meet you!');
    $bot->startConversation(new OnboardingConversation);
});

$botman->receivesFiles(function($bot, $files) {
    foreach ($files as $file) {
        $url = $file->getUrl(); // The direct url
        $payload = $file->getPayload(); // The original payload
        $bot->reply("Thanks to you for your File");
    }
});

$botman->receivesImages(function($bot, $images) {
    foreach ($images as $image) {

        $url = $image->getUrl(); // The direct url
        $title = $image->getTitle(); // The title, if available
        $payload = $image->getPayload(); // The original payload
        $bot->reply("Thanks to you for your Image");
    }
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
