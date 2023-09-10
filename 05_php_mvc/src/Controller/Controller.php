<?php

declare(strict_types=1);

namespace Mvc\Controller;

interface Controller
{
    public function requestProcess(): void;
}