<?php 

class User
{
    public $username;

    public function __construct(String $name)
    {
        $this->username = $name;
    }
}


$user = [
    new User('Jeyziel'),
    new User('joao'),
    new User('maria'),
];

print_r( array_column( $user, 'username') );