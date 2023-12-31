<?php

declare(strict_types=1);

namespace Mvc\Controller;

class Error404Controller implements Controller
{
    public function requestProcess(): void
    {
        http_response_code(404);
    }
}