<?php

namespace Factory;

// use Domain\Ports\Env;
use Application\Usecases\CreatePlayerUsecase;
use Interfac\Controllers\CreatePlayerController;
// use Interfac\Ports\MakeController;
use \Infra\Repositories\FakePlayerRepository;

class ControllerFactory
{
    public static function makeCreatePlayerController()
    {
        return function () {
            $userRepo = new FakePlayerRepository();
            $usecase = new CreatePlayerUsecase($userRepo);
            return new CreatePlayerController($usecase);
        };
    }
}
