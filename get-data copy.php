<!-- Generate some data !-->
<?php

class User {
   public $name ;
   public $userid ;
   public function __construct()
    {
    	$this->name = "MisterY";
        $this->userid = 420; 
    }
}
$obj=new User();
$enc=json_encode($obj);
echo $enc;
?>