<?php

namespace Factory;

// use Domain\Ports\Env;
use Application\Usecases\CreatePlayerUsecase;
use Interfac\Controllers\CreatePlayerController;
// use Interfac\Ports\MakeController;
use \Infra\FakeUserRepository;

class ControllerFactory
{
    public static function makeCreatePlayerController()
    {
        return function () {
            $userRepo = new FakeUserRepository();
            $usecase = new CreatePlayerUsecase($userRepo);
            return new CreatePlayerController($usecase);
        };
    }
}
