<?php
// <---- OBJECT ORIENTED PROGRAMMING ---->

/*
From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes taht can hold "properties" and "methods". Objects can be created from classes. 
*/

class User{
    // Properties are $attributes that belong to a class

    // Access Modifies: public, private, protected
    // Public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes

    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class(SETTER)
    function set_name($name){
        $this->name = $name;
    }

    // (GETTER)
    function get_name(){
        return $this->name;
    }

};

// Instatite a user object
$user1 = new User('Shane', 'shanestevensxk9@gmail.com', 'password');
$user2 = new User('John', 'john@gmail.com', 'password');

// display
// echo $user1->email. '<br>';
// echo $user2->name;

// add value to object
// $user1->set_name('Shane');
// $user2->set_name('Beast');

// display object
// var_dump($user1);
// var_dump($user2);

// get object
// echo $user1->get_name();
// echo $user2->get_name();

// Inheritence
class Employee extends User{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
};

$employee1 = new Employee('Sara', 'sara@gmail.com', 'password', 'Manager');

echo $employee1->get_title();




?>