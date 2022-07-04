<?php

class Counter
{
    private bool $status;

    private array $availableProducts = [
        "Pizza+Bière",
        "Pizza+Soda"
    ];

    private array $orders;

    public function __construct(bool $status)
    {
        $this->status = $status;
        $this->orders = [];
    }

    /**
     * @return bool
     */
    public function isOpen(): bool
    {
        return $this->status;
    }

    /**
     * @return array|string[]
     */
    public function getAvailableProducts(): array
    {
        return $this->availableProducts;
    }

    /**
     * @return array
     */
    public function getOrders(): array
    {
        return $this->orders;
    }

    /**
     * @param bool $status
     */
    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    /**
     * @param array|string[] $availableProducts
     */
    public function setAvailableProducts(array $availableProducts): void
    {
        $this->availableProducts = $availableProducts;
    }

    /**
     * @param array $orders
     */
    public function setOrders(array $orders): void
    {
        $this->orders = $orders;
    }

    public function print() : void
    {
        if($this->status)
            $status = "ouvert";
        else
            $status = "fermé";

        echo "Je suis " . $status . " et je propose " . count($this->availableProducts) . " produits différents <br/><br/>";
    }
}