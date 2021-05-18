<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn_PHP</title>
</head>
<body>
    <?php 
        /* ! + Tab เรียกโครงสร้าง HTML @Line 1 */
        /* <?php write code here?> โครงสร้างของ php @Line 10*/ 
        // $color ประกาศตัวแปร color

        /*
        echo เรียกหรือประกาศออกมา
        .    ใช้เชื่อม 
        "<br>" ประกาศขึ้นบรรทัดใหม่
                1.echo "Print" . "<br>"
                2.echo "Print <br>";
            
        #Can print Style
            $Sth = "XX";
            1. "Name : $Sth";
            2.  "Name : " .$Sth 
            ;
            
        #Difference about Print and Echo
            1. echo "Hello","Echo";     Work !! 
                print "Hello", "print"; Fail !!

            2. $txt1 = "Echo";
                $txt2 = "print";
                echo $txt1 . " " .$txt2;
                print  $txt1 . " " .$txt2;
                
        #Data Types
            - String = "Hello World";
            - Integer = 12345;
            - Float = 3.14;
            - Boolean = true, false;
            - Array = array("Fud", "Fid", "Fo");
            - Object
            - NULL

            var_dump($...); //Check Data Types
                */

        /*$color1 = "red";
        $color2 = "green";
        echo "my car color is " . $color1 . "<br>";
        echo "my Dog name is " . $color2 . "<br>";

        // Create Variables 
        $Name = "Nattaphon";
        $Age = 19;
        $Weight = 67;

        echo "Name : $Name" . "<br>".
            "Age : $Age" . "<br>".
            "Weight $Weight<br>";

#Scope

    $x = 5;     // Global Scope

    function myfunc() {
        $x = 10; // Local Scope
        echo "Local scope is $x <br>"; //print local scope

    }
    myfunc(); //call function 'myfunc'

    echo "Global scope is $x <br>"; // print Global scope


# Call global scope from function by use Global Key
    $s = 10;
    $y = 15;
    function GlobalKey() {
        global $s, $y; // use global for call variable fromglobal
        echo "Variable from global is 10 and 15 <br>
                and plus : $s + $y = " . $s + $y . "<br>";
    }
    GlobalKey(); // call function Globalkey

# Data Types
$String = "work";
$Integer = 1234;
$Float = 3.14;
$Boolean = true;
$arr = array("Ford", "BMW", "Mer");
$txtNull = "Youuuu";
$txtNull = null;

var_dump($String);//Check Data Type
echo "<br>";
var_dump($Integer);
echo "<br>";
var_dump($Float);
echo "<br>";
var_dump($Boolean);
echo "<br>";
var_dump($arr);
echo "<br>";
var_dump($txtNull);
echo "<br>";
*/

/* class Car{
    function Car(){
$this->modal = "JA";
    }
}

$myCar = new Car();

echo $myCar->modal;
*/

echo "Test Push<br>";


    ?>
</body>
</html>