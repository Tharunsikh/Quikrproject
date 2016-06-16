<?php
//taking an array objet and encoding it into JSON
$new="mynameistharun";
echo json_encode($new);
echo json_encode(array("Apple", "Banana", "Pear"));

// Returns: {"4":"four","8":"eight"}
echo json_encode(array(4 => "four", 8 => "eight"));

// Returns: {"apples":true,"bananas":null}
print_r(json_encode(array("apples" => true, "bananas" => null),JSON_PRETTY_PRINT));

?>
