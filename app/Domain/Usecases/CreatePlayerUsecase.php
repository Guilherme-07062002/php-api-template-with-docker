<?php
use \Domain\Usecase\Usecase;

class CreatePlayerUseCase implements Usecase
{
    private $playerRepository;

    public function __construct($playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }
    public function execute($data)
    {
        // Lógica para criar um jogador usando $this->playerRepository
        return "Player Created!";
    }
}
