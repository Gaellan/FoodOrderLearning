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

    private function lie() : Customer
    {
        // créer un Customer avec mes first et last name mais qui a 18 ans
        // retourner le Customer généré
    }

    public function orderPizza(Pizza $pizza) : Order
    {
        // créer un Order avec $pizza et soi-même en customer
        // retourner l'Order créé
    }

    public function orderMenu(Pizza $pizza, Beverage $beverage) : Order
    {
        // créer un Menu avec $pizza et $beverage
        // si j'ai moins de 18 ans et que je veux un HardDrink, je dois mentir (lie)
        // créer un Order avec le menu et soi-même en customer
        // retourner l'Order créé
    }
}