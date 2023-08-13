<?php

namespace Domain\Repositories;

use \Domain\Entities\Player;
use \Domain\DTOs\PlayerDTOs\CreatePlayerDTO;

interface PlayerRepository
{
    public function create(CreatePlayerDTO $data): Player;
}
