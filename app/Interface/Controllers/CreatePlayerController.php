<?php
namespace Interfac\Controllers;

use \Application\Usecases\CreatePlayerUseCase;
use \Domain\Ports\Controller;
use \Domain\Ports\Request;
use \Domain\Ports\Response;
use \Interfac\Http;

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
        return \Http::created($res);
    }
}
