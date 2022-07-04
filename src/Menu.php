<?php

class Menu extends Product
{
    private Pizza $pizza;
    private Beverage $beverage;

    public function __construct(float $price, Pizza $pizza, Beverage $beverage)
    {
        $this->price = $price;
        $this->pizza = $pizza;
        $this->beverage = $beverage;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return Pizza
     */
    public function getPizza(): Pizza
    {
        return $this->pizza;
    }

    /**
     * @param Pizza $pizza
     */
    public function setPizza(Pizza $pizza): void
    {
        $this->pizza = $pizza;
    }

    /**
     * @return Beverage
     */
    public function getBeverage(): Beverage
    {
        return $this->beverage;
    }

    /**
     * @param Beverage $beverage
     */
    public function setBeverage(Beverage $beverage): void
    {
        $this->beverage = $beverage;
    }
}