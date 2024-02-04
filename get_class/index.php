<?php
class Test1 {
    public $name;
    
    function __construct($name) {
        $this->name = $name;
    }
}

class Test2 {
    public $name;
    
    function __construct($name) {
        $this->name = $name;
    }
}

class Test {
    public $prop1;
    public $prop2;
    private $prop3;
    private $prop4;
    
    function __construct($prop1, $prop2, $prop3, $prop4) {
        $this->prop1 = $prop1;
        $this->prop2 = $prop2;
        $this->prop3 = $prop3;
        $this->prop4 = $prop4;
    }
}

$obj1 = new Test1("Object 1 of Test1");
$obj2 = new Test1("Object 2 of Test1");
$obj3 = new Test2("Object 1 of Test2");
$obj4 = new Test2("Object 2 of Test2");
$obj5 = new Test("value1", "value2", "value3", "value4");

$arr = array($obj1, $obj2, $obj3, $obj4, $obj5);

foreach ($arr as $obj) {
    $className = get_class($obj);
    if ($className == "Test") {
        echo "Object of class Test <br>";
        echo "prop1: " . $obj->prop1 . ", prop2: " . $obj->prop2 . "<br>";
        $vars = get_class_vars('Test');
        echo "Available properties: <br>";
        print_r($vars);
    } else {
        echo "Object name: " . $obj->name . ", Class name: " . $className . "<br>";
    }
}
?>
