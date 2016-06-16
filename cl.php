<?php
class User {
    public $name ;
    protected $userid ;
    //private $priv = "hidden too";

    //public $func;
    //public $notUsed;

    public function __construct()
     {
        //$this->func = function()
        {
            //return "Foo";
        };
    }
}

$user = new User();
$user->name="Mister.Y";
echo json_encode($user);
$retre=json_decode('{"name":"Mister X."}');
var_dump($retre);
echo $retre["name"];
?>