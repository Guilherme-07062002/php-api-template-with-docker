<?php

namespace Domain\Usecases;

use \Domain\Ports\Usecase;
use \Domain\DTOs\PlayerDTOs\CreatePlayerDTO;
use \Domain\Repositories\PlayerRepository;

class CreatePlayerUseCase implements Usecase
{
    private $playerRepository;
    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }
    public function execute(CreatePlayerDTO $data)
    {
        $this->playerRepository->create($data);
    }
}
