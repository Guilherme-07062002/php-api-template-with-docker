<?php

namespace Domain\Ports;

interface Usecase
{
    public function execute($data);
}
