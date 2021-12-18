<?php
use Spatie\Async\Pool;

$pool = Pool::create();

foreach ($things as $thing) {
    $pool->add(function () use ($thing) {
        // Do a thing
    })->then(function ($output) {
        // Handle success
    })->catch(function (Throwable $exception) {
        // Handle exception
    });
}

$pool->wait();

// commented by Anoop