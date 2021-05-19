<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn_PHP</title>
</head>
<body>
# Include();
<?php include('header.php'); ?>
    
    <section>
        <p> 
            asdsasdsa sfafasf gafadfdaf
        </p>
    </section>

#Session<!-- ตัวแปรที่ใช้เก็บข้อมูลข้ามเพจหน้าเว็บ-->
<?php 
    $_SESSION['name'] = "Natty";
    $_SESSION['car'] = "FORD";
    
?>
    
        <!-- $_GET, $_POST, $_REQUEST -->

#_Request   <!-- รับข้อมูลจาก Form สามารถส่ง มาแบบ get/ post ก็ได้ -->
    // call Action func to Input Name
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method = "Post">     
        Name : <input type="text" name = "fName">
        <input type="submit">
    </form>
    <br>

# GET   <!-- รับข้อมูลที่ส่งมาจาก URL -->
    <form action="test_get.php" method = "get">
        Name : <input type="text" name = "name">
        <br>
        Email : <input type="text" name="Email">
        <br>
        <input type="submit">
    </form>
    <br>

# Post  <!-- รับข้อมูลจาก Form -->
    <form action="test_post.php" method = "post">
        Name : <input type="text" name = "Name">
        <br>
        Email : <input type="text" name="email">
        <br>
        <input type="submit">
    </form>




<?php include('footer.php'); ?>
    
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

        #PHP Constants
                1. define(name, value, case-insensitive);
                - name
                - value
                - case-sensitive : true, false

                2. define(name, value);
                - name
                - value

        #Operators
                Arithmetic Operators
                    +, -, *, /, %, **
                Assignment Operators
                    x = 10
                    x += 10 -> x = x + 10
                    x -= 10 -> x = x - 10
                    x *= 10 -> x = x * 10
                    x /= 10 -> x = x / y
                    x %= 10 -> x = x % y
                Comparison Operators
                    Equal -> "=="                           // Check ค่าเท่ากันไหม
                    Identical -> "==="                      // Check ค่าและ ชนิดข้อมูลเหมือนกัน
                    Not identical -> "!=="                  // Check ค่าและ ชนิดข้อมูลไม่เท่าและเหมือนกัน
                    Not equal -> "!="
                    Not equal -> "<>"
                    Greater than -> ">"
                    Greather than or equal to -> ">="
                    Less than or equal to -> "<="
                    Spaceship -> "<=>"
                Increment / Decrement Operators
                    pre-increment ++$x      // เพิ่มค่าก่อนแล้ว return
                    post-increment $x++     // return ค่าแล้วเพิ่ม
                    pre-decrement --$x      // ลดค่าก่อนแล้ว return
                    post-decrement $x--     // return ค่าแล้วลด
                Logical Operators
                    And -> and -> $x and $y
                    Or  -> or  -> $x or  $y
                    Xor -> xor -> $x xor $y
                    And -> &&  -> $x &&  $y
                    Or  -> ||  -> $x ||  $y
                    Not -> !   -> !$x      
                String Operators
                    Concatenation -> .
                    $txt1 = "Hello";
                    $txt2 = " PHP";
                    echo $txt1 . $txt2;
                    : result =  Hello PHP
                    
                    Concatenation assignment -> .=
                    $txt1 = "Hello";
                    $txt2 = " World!";
                    $txt1 .= $txt2
                    echo $txt1;
                    : result = Hello World!
        #Function Buildin
            function functionName(parameters) {      // parameters ตัวรับค่า
                code to be excuted;
            }
            functionName(arguments); // Call The function    // argument ค่าที่ใช้ในการส่งไป parameters

        #Array
            $cars = array("Ferrari", "Ford" ,"Lambo");
            echo "My fav car is $cars[0]";              // output : My fav car is Ferrari  
            echo count($cars);                          // output : 3 จำนวน index in Array
            
            Array Types
                1. index Arrays
                    #Style 1
                        $cars = array("Honda", "BM", "Ford");
                    #Style 2
                        $cars[0] = "Honda";
                        $cars[1] = "BM";
                        $cars[2] = "Ford";
                2. Associative Arrays
                    $age = array("Key"=>"value");

                    $age = array("G"=>"12", "N"=>"11", "J"=>"9");
                    print_r($age);
                    echo $age["G"]
                    foreach($age as $Name=>$ages){
                        echo "Name is $Name age is $ages <br>";     //output : Name is G age is 12...
                    }


                3. Multidimentional Arrays
                    Name | Stock | Sold
                    BMW  | 10    | 5
                    Ford | 9     | 3
                    Lambo| 7     | 4

                    $cars = array(
                        array("BMW", 10, 5),
                        array("Ford", 9, 3),
                        arrray("Lambo", 7, 4)
                    );
                    echo $cars[0][0] : "in stock $cars[0][1], Sold $cars[0][2]";    // output : BMW in stock 10, Sold 5.


                    */

/*
        $color1 = "red";
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
    
#Superglobal PHP

    // superglobal variables
        $GLOBALS
        $_SERVER
        $_REQUEST
        $_POST
        $_GET
        $_FILES
        $_ENV
        $_COOKIE
        $_SESSION

        $x = 10;
        $y = 5;

        function Addtion(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        Addition();
        echo $z;


    */

    
/*# Data Types
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

// echo "Test Push<br>";    Test Push On Github

#PHP Constant
/*
    // Constant are global
    define("Greeding", "Welcome");
    echo Greeding . "<br>";

    // Constant From function
    function myTest(){
        echo Greeding . " From Function<br>";
    }
    myTest();

    // Constant Array
    define("cars", ["BMW",
         "FORD",
         "MAZDA"]);
    echo cars[0] . "<br>";
*/

#Spaceship Operator <=>
 /* $x = 5;
    $y = 10;
    echo ($x <=> $y);   //return -1   # $x < $y

    $x = 5;
    $y = 5;
    echo ($x <=> $y);   // return 0   # $x = $y   

    $x = 10;
    $y = 5;
    echo ($x <=> $y);   // return +1  # $x > $y
    
    */ 

# Xor Operator
/*  $x = 100;
    $y = 80;
    if($x == 100 xor $y == 10){     // $x มีค่าเท่ากับเงื่อนไขคือ 100 
        echo "Yeah";
    }
    elseif($x == 10 xor $y == 60){  // ไม่มีตัวไหนตรงตามเงื่อนไข
        echo "Wow";
    }
*/

#Operators Array
/*
    $x = array("a" => "red", "b" => "blue");
    $y = array("c" => "gree", "d" => "yellow");
    print_r($x + $y);   //union $x and $y   
*/

#Check Array by "==" operator and "!="
/*
$x = array("a" => "red", "b" => "blue");
$y = array("a" => "red", "b" => "blue");

    var_dump($x == $y); // Key and value ทั้ง 2 เหมือนกัน
    echo "<br>";
    var_dump($x != $y); // Key and value ทั้ง 2 ไม่เหมือนกัน
*/

#If - Else statement
   /* $rain = true;

    if($rain){
        #true statement
        echo "Don't go outside.";
    }
    else{
        # false statement
        echo "You can go outside.";
    }
*/
#Switch Statement
/*
$Car = "BMW";

switch($Car){
    case "Ferrari":
        echo "Your Fav car is Ferrari.";
        break;
    case "Toyota":
        echo "Your Fav car is Ferrari.";
        break;
    case "BMW":
        echo "Your Fav car is BMW.";
        break;
    default:
        echo "Your fav car is neither Ferrari, Toyota, Ford";
    }
*/

#PHP Loop 
/*
    //while loop
    $x = 1;
    while($x <= 5){
        echo "number of x is $x <br>";
        $x++;
    }

    // do while loop
    $y = 1;
    do{
        echo "number of y is $y <br>";
        $y++;
    }while($y > 5);

    //For loop
    for($x = 0; $x <= 100; $x+= 10) {
        echo "the number is $x <br>";
    }
    
    //foreach loop for array
    $cars = array("BM" => "Person1", "FD"=>"Person2", "TY"=>"Person3");
    foreach($cars as $NameCars => $Person){
        echo "$Person : $NameCars <br>";
    }
*/

#Function
/*
    function familyName($FullName){     // Parameters : $FullName
        echo "$FullName Smith.  <br>";
    }
    familyName("Jimmy");    // arguments : Jimmy
*/

#Array
    /*
    $cars = array("Lambo", "Ford", "Ferrari");
    echo "My fav car is $cars[0] <br>";
    echo "Brand car have : " . count($cars);

    // Array in for loop <index>
    $arrlength = count($cars);
    for($x = 0; $x < $arrlength ; $x++){
        echo $cars[$x] . "<br>";
    }

    //Associative Arrays "keys"=>"values"
    $age = array("G"=>"16","N"=>"12","J"=>"1");

    foreach($age as $Name => $Year){
        echo "$Name age is $Year <br>";
    }

    //Multidimensional Arrays
    // Name | Stock | Sold
    // BMW  | 10    | 5
    // Ford | 9     | 3
    // Lambo| 7     | 4

    $Contain = array(
        array("BMW", 10, 5),
        array("Ford", 9, 3),
        array("Lambo", 7, 4)
    );
    echo $Contain[0][0]. " in stock " . $Contain[0][1] . " ,Sold : " . $Contain[0][2];

    for($row = 0; $row < 3; $row++){
        echo "<p>Row number $row</p>";
        echo "<ul>";
            for($col = 0 ; $col < 3 ; $col++){
                echo"<li>" . $Contain[$row][$col]. "</li>";
            }
        echo "</ul>";
    }   */

#Global
    $x = 10;
    $y = 5;
    function Addtion(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    Addtion();
    echo $z;
    echo "<br>";

# _Server   //บอกลายระเอียด
    echo $_SERVER['PHP_SELF'];  // ขอทราบที่อยู่ของ Path
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];  // ขอทราบที่อยู่ของ Path
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];  // ขอทราบที่อยู่ของ Path
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];  // ขอทราบที่อยู่ของ Path
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];  // ขอทราบที่อยู่ของ Path
    echo "<br>";

# _REQUEST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST['fName'];
        if(empty($name)){
            echo "Name is empty";
        } else {
            echo $name;
        }
    }



    ?>
</body>
</html>