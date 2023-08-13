<?php

namespace Inter\Controllers;

use \Application\Usecases\CreatePlayerUseCase;
use \Domain\DTOs\PlayerDTOs\CreatePlayerDTO;
use \Domain\Ports\Controller;
use \Domain\Ports\Request;
use \Domain\Ports\Response;

class CreatePlayerController implements Controller
{

    private $usecase;

    public function __construct(CreatePlayerUseCase $usecase)
    {
        $this->usecase = $usecase;
    }

    public function handle(Request $request): Response
    {
        $body = $request->body;

        $res = $this->usecase->execute($body);
        return $res;
    }
}
