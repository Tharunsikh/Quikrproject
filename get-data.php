<!-- Generate some data !-->
<?php

class User {
   public $name ;
   public $userid ;
   public function __construct()
    {
    	$this->name = "MisterX";
        $this->userid = 111; 
    }
}
$obj=new User();
$enc=json_encode($obj);
echo $enc;
?>