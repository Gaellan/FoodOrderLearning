<?php

class HardDrink extends Beverage
{
    private int $alcoholContent;

    public function __construct(float $volume, int $alcoholContent)
    {
        $this->volume = $volume;
        $this->alcoholContent = $alcoholContent;
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * @param float $volume
     */
    public function setVolume(float $volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @return int
     */
    public function getAlcoholContent(): int
    {
        return $this->alcoholContent;
    }

    /**
     * @param int $alcoholContent
     */
    public function setAlcoholContent(int $alcoholContent): void
    {
        $this->alcoholContent = $alcoholContent;
    }
}