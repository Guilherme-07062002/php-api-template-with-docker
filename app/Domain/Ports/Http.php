<?php

namespace Domain\Ports;

class Request
{
    public $body;
    public $params;
    public $query;

    public function __construct($body, $params, $query)
    {
        $this->body = $body;
        $this->params = $params;
        $this->query = $query;
    }
}

class Response
{
    public $status;
    public $body;

    public function __construct($status, $body)
    {
        $this->status = $status;
        $this->body = $body;
    }
}
