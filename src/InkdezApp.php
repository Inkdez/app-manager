<?php

namespace Inkdez\AppManager;

use Inkdez\AppManager\Traits\InkdezAppTrait;

class InkdezApp implements InkdezAppInterface
{
    use InkdezAppTrait;

    public function index(): string {
        return "Test facade";
    }

}
