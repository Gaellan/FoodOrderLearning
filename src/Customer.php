<?php

class Customer
{
    private string $firstName;

    private string $lastName;

    private int $age;

    public function __construct(string $firstName, string $lastName, int $age){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    /**
    * @return string
    */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function print() : void
    {
        echo "Je suis " . $this->firstName . " " . $this->lastName . " et j'ai " . $this->age . " ans. <br/> <br/>";
    }

    public function orderPizza(Pizza $pizza) : Order
    {
        // créer un Order avec $pizza et soi-même en customer
        $order = new Order($this, [$pizza]);
        // retourner l'Order créé
        return $order;
    }

    public function orderMenu(Pizza $pizza, Beverage $beverage) : Order
    {
        // créer un Menu avec $pizza et $beverage
        $menu = new Menu($pizza, $beverage);
        
        // créer un Order avec le menu et soi-même en customer
        $order = new Order($this, [$menu]);
        
        // retourner l'Order créé
        return $order;
    }
}