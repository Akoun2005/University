<?php

// Ορισμός κλάσης
class Person
{
    // Ιδιότητες (μεταβλητές της κλάσης)
    public $name;
    public $age;

    // Constructor (εκτελείται όταν δημιουργείται αντικείμενο)
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Μέθοδος της κλάσης
    public function introduce()
    {
        return "Ονομάζομαι {$this->name} και είμαι {$this->age} ετών.";
    }
}

// Δημιουργία αντικειμένων
$person1 = new Person("Γιάννης", 25);
$person2 = new Person("Μαρία", 30);

// Χρήση αντικειμένων
echo $person1->introduce();
echo "<br>";
echo $person2->introduce();

?>