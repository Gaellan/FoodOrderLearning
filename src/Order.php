<?php

class Order
{
    private Customer $customer;

    private string $product;

    public function __construct(Customer $customer, string $product)
    {
        $this->customer = $customer;
        $this->product = $product;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @return string
     */
    public function getProduct(): string
    {
        return $this->product;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * @param string $product
     */
    public function setProduct(string $product): void
    {
        $this->product = $product;
    }

    public function print() : void
    {
        echo "Client : " . $this->customer->getFirstName() . " " . $this->customer->getLastName() . " a commandé " . $this->product . "<br/><br/>";
    }
}