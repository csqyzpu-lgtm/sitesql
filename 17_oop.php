<?php
class User {
    /*
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    */
    public $name;
    public $email;
    public $password;

    //a constructor is a method that runs when an object is created
    public function __construct($name, $email, $password){
        echo 'constructor test';
        $this->name = $name;
        $this->email =  $email;
        $this->password= $password;
    }

    //set
    //method is a function that belong to a class
    function set_name($name){
        //$this is current object
        $this->name = $name;
    }

    //get
    function get_name(){
        return $this->name;
    }
}

$user1 = new User('natalia', 'natalia@gmail.com', 'stupidèassword');
$user2 = new User('dipsy', 'tipsy@gmail.com', 'genericpassword');

echo $user1->email;
echo $user2->name;
//$user1->set_name('Neo');
//$user2->set_name('Trinity');

var_dump($user1);


//Inheritance
Class Employee extends User {
    public function __construct($name, $email, $password, $title){
        {
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }
    }

    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@type.com', 'thatboringoffice', 'CEO');

echo $employee1->get_title();