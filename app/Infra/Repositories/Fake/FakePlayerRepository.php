<?php
namespace Infra\Repositories;

use \Domain\Repositories\PlayerRepository;
use \Domain\DTOs\PlayerDTOs\CreatePlayerDTO;
use \Domain\Entities\Player;

class FakePlayerRepository implements PlayerRepository
{
    public function __construct()
    {

    }
    public function create(CreatePlayerDTO $data): Player
    {
        echo "Player Salvo com sucesso";
        return new Player($data->name, $data->email);
    }
}
