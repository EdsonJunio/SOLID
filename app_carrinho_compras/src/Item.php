<?php

namespace src;

class Item
{
    private $description;
    private $value;


    public function __construct()
    {
        $this->description = '';
        $this->value = 0;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setDescription(string $description): string
    {
        return $this->description = $description;
    }

    public function setValue(float $value): float
    {
        return $this->value = $value;
    }




















}