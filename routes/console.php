<?php

use App\Http\Controllers\ChatController;
use Illuminate\Foundation\Inspiring;
use Ratchet\Server\IoServer;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('startChatServer', function () {
    $server = IoServer::factory(
        new ChatController(),
        9000
    );
    $server->run();
})->describe('Start Chat server');
