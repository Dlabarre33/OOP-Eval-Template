<?php

declare(strict_types=1);

namespace App\Controller;

use App\Models\Game;

class GameController
{
    public function index(): string
    {
        $game = new Game();

        return (new \App\View('game/index', ['game' => $game]))->render();
    }
    public function createGame()
    {
        return;
    }
}
