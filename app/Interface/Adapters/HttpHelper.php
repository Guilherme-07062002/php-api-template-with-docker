<?php

namespace Interfac\Http;

use \Domain\Ports\Response;

function created($data): Response
{
    return new Response(201, $data);
}

function badRequest($data): Response
{
    return new Response(400, $data);
}
