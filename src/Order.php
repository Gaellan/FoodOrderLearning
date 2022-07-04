<?php

class Order
{
    private Customer $customer;

    private array $products;

    public function __construct(Customer $customer, array $products)
    {
        $this->customer = $customer;
        $this->products = $products;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param array $products
     */
    private function setProducts(array $products): void
    {
        $this->products = $products;
    }

    /**
     * @param Product $product
     * @return array
     */
    public function addProduct(Product $product) : array
    {
        $products = $this->products;
        $products[] = $product;
        $this->setProducts($products);

        return $this->getProducts();
    }


    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function print() : void
    {
        echo "Client : " . $this->customer->getFirstName() . " " . $this->customer->getLastName() . " a commandé " . $this->product . "<br/><br/>";
    }
}