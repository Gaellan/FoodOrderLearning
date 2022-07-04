<?php

class Pizza extends Product
{
    private ?string $topping1 = null;
    private ?string $topping2 = null;
    private ?string $topping3 = null;
    private ?string $topping4 = null;

    public function __construct(float $price, ?string $topping1 = null, ?string $topping2 = null, ?string $topping3 = null, ?string $topping4 = null)
    {
        $this->price = $price;
        $this->topping1 = $topping1;
        $this->topping2 = $topping2;
        $this->topping3 = $topping3;
        $this->topping4 = $topping4;
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
     * @return string|null
     */
    public function getTopping1(): ?string
    {
        return $this->topping1;
    }

    /**
     * @param string|null $topping1
     */
    public function setTopping1(?string $topping1): void
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