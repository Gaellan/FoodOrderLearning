<?php

class Pizza extends Product
{
    private string $topping1;
    private ?string $topping2 = null;
    private ?string $topping3 = null;
    private ?string $topping4 = null;

    public function __construct(?string $topping1, ?string $topping2 = null, ?string $topping3 = null, ?string $topping4 = null)
    {
        $price = 5.00;
        $this->topping1 = $topping1;

        if($topping2 !== null)
        {
            $this->topping2 = $topping2;
            $price += 1;
        }

        if($topping3 !== null )
        {
            $this->topping3 = $topping3;
            $price += 1;
        }

        if($topping4 !== null)
        {
            $this->topping4 = $topping4;
            $price += 1;
        }

        $this->price = $price;
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
     * @return string
     */
    public function getTopping1(): string
    {
        return $this->topping1;
    }

    /**
     * @param string $topping1
     */
    public function setTopping1(string $topping1): void
    {
        $this->topping1 = $topping1;
    }

    /**
     * @return string|null
     */
    public function getTopping2(): ?string
    {
        return $this->topping2;
    }

    /**
     * @param string|null $topping2
     */
    public function setTopping2(?string $topping2): void
    {
        $this->topping2 = $topping2;
    }

    /**
     * @return string|null
     */
    public function getTopping3(): ?string
    {
        return $this->topping3;
    }

    /**
     * @param string|null $topping3
     */
    public function setTopping3(?string $topping3): void
    {
        $this->topping3 = $topping3;
    }

    /**
     * @return string|null
     */
    public function getTopping4(): ?string
    {
        return $this->topping4;
    }

    /**
     * @param string|null $topping4
     */
    public function setTopping4(?string $topping4): void
    {
        $this->topping4 = $topping4;
    }
}