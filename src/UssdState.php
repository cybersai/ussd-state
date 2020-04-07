<?php

namespace Cybersai\UssdState;

use Cybersai\UssdStore\UssdStore;

abstract class UssdState
{
    const START = 1;
    const CONTINUE = 2;
    const END = 3;

    protected $type = self::CONTINUE;

    /**
     * The menu to be displayed to users
     */
    public abstract function menu(): string;

    /**
     * The view to be displayed to users
     */
    public final function render(): string
    {
        $this->beforeRendering();
        return $this->menu();
    }

    /**
     * The new State full path
     */
    public abstract function next(string $input): string;

    /**
     * The function to run before the render method
     */
    public function beforeRendering(): void {}
}
