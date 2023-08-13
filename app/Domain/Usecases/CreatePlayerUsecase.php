<?php
use \Domain\Usecase\Usecase;
use \Domain\DTOs\PlayerDTOs\CreatePlayerDTO;

class CreatePlayerUseCase implements Usecase
{
    private $playerRepository;

    public function __construct($playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }
    public function execute(CreatePlayerDTO $data)
    {
        // Lógica para criar um jogador usando $this->playerRepository
        return "Player Created!";
    }
}
