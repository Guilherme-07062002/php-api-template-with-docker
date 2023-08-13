<?php

namespace Domain\Ports;

use \Domain\Ports\Request;
use \Domain\Ports\Response;

interface Controller
{
    public function handle(Request $request): Response;
}
