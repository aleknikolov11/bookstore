<?php

/**
 * Interface ViewInterface
 *
 * @author Martin Krastev <m.krastev96@gmail.com>
 */
interface ViewInterface
{
    /**
     * Displays the contents of the page
     * @return mixed
     */
    public function display(): void;
}