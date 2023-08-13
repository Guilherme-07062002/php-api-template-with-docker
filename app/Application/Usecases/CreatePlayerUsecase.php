<?php

namespace Application\Usecases;

use \Domain\Ports\Usecase;
use \Domain\DTOs\PlayerDTOs\CreatePlayerDTO;
use \Domain\Repositories\PlayerRepository;
use \Domain\Entities\Player;

class CreatePlayerUseCase implements Usecase
{
    private $playerRepository;
    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }
    public function execute(CreatePlayerDTO $data): Player
    {
        $response = $this->playerRepository->create($data);
        return $response;
    }
}
