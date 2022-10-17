<?php

namespace Pdp\Structural\Composite;

class Song implements Music
{
    public string $id;
    public string $name;

    public function  __construct(string $name)
    {
        $this->id = uniqid();
        $this->name = $name;
        echo '__construct -> ' . $name . ' ' . $this->id . PHP_EOL;
    }

    public function play()
    {
        printf("Playing song #%s, %s.\n", $this->id, $this->name);
    }
}