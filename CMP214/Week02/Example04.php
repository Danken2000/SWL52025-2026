<?php
class User {
    public $name;
    public $email;
    function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
    function display() {
        echo "Name: $this->name, Email: $this->email";
    }
}
$user = new User("John", "john@example.com");
$user->display();
?>
