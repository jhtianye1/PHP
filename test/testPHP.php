<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
</head>
<body>
<!--<p id="p1">1111</p>-->
<?php
    $x = 15555; // global scope

    function myTest() {
        global $x;//global用来访问全局变量
        $GLOBALS['x'] = 10000;
        static $y = 10; // local scope 局部和静态变量, 静态变量在每次函数被使用完成后都不会被销毁
        echo "<p>在函数内部测试变量：</p>";
        echo "变量 x 是： $x";//变量在双引号里面也可以发挥作用, 和其他语言不同.
        echo "<br>";
        echo "变量 y 是：$y";
        $y++;//对静态变量累加
    }


    myTest();


    echo "<p>在函数之外测试变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";
    myTest();


    echo "<p>在函数之外测试变量：</p>";
    echo "变量 x 是：$x";
    echo "<br>";
    echo "变量 y 是：$y";

?>

//
<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3School.com.cn";
    $cars = array("Volvo", "BMW", "SAAB");
    echo $txt1;
    echo "<br>";
    echo "Study PHP at $txt2";
    echo "<br>";
    echo "My car is a $cars[0]";
?>

<!--//测试数据类型-->
<?php
    $x = 5985;
    var_dump($x);
    echo "<p>测试数据类型</p>";
    echo "<hr>";
    //echo "<br>";
    $x = -345; // 负数
    var_dump($x); //用var_dump调试变量
    echo "<br>";
    $x = 0x8C; // 十六进制数
    var_dump($x);
    echo "<br>";
    $x = 047; // 八进制数
    var_dump($x);
    $x = "a";//
    echo "<br>";
    var_dump($x)

?>
<!--测试数组-->
<?php
    echo "<hr>测试数组</br>";
    $cars = array("Volvo", "BMW", "SAAB");
    var_dump($cars);

?>
<?php
    echo "<hr>测试类</br>";

    class Car {
        var $color;
        var $size;

        function Car($color = "green", $size = "10") { //构造函数
            $this->color = $color;
            $this->size = $size;
        }

        function what_color() { //方法
            return $this->color;
        }

        function what_size() {
            return $this->size;
        }
    }

    function print_vars($obj) { //函数
        foreach (get_object_vars($obj) as $prop => $val) {//遍历对象的属性
            echo "\n$prop = $val";
        }
    }

    // instantiate one object
    $herbie = new Car("white", 20);

    // show herbie properties
    echo "herbie: Properties";
    print_vars($herbie);

?>

<?php
    echo "<hr>测试字符串</br>";

    echo strlen("Hello world!"), '</br>';
    echo strpos("Hello world!", "world");

?>

<?php
    echo "<hr>测试字符串运算</br>";

    $a = "Hello";
    $b = $a . " world!";
    echo $b; // 输出 Hello world!

    echo "<br>";

    $x = "Hello";
    $x .= " world!";
    echo $x; // 输出 Hello world!
?>
<?php
    echo "<hr>测试加加 减减运算符</br>";

    $x = 10;
    echo ++$x; // 11
    echo "<br>";

    $y = 10;
    echo $y++; //10
    echo "<br>";

    $z = 5;
    echo --$z; //4
    echo "<br>";

    $i = 5;
    echo $i--; //5
?>
<?php
    echo "<hr>测试比较运算符</br>";

    $x = 100;
    $y = "100";

    var_dump($x == $y); // 因为值相等，返回 true
    echo "<br>";
    var_dump($x === $y); // 因为类型不相等，返回 false    ===表示完全相同
    echo "<br>";
    var_dump($x != $y); // 因为值相等，返回 false
    echo "<br>";
    var_dump($x !== $y); // 因为数值相等，返回 true  !==完全不同
    echo "<br>";

    $a = 50;
    $b = 90;

    var_dump($a > $b);
    echo "<br>";
    var_dump($a < $b);
?>
<?php
    echo "<hr>数组比较</br>";

    $x = array("a" => "red", "b" => "green");
    $x2 = array("b" => "green", "a" => "red");
    $x3 = array("b" => "green1", "a" => "red");

    echo "<br>";
    var_dump($x3 != $x); //true
    echo "<br>";

    echo "<br>";
    var_dump($x2 != $x);//false  只是顺序不同, 键值对相同.
    echo "<br>";

    echo "x2!==x";
    var_dump($x2 !== $x); //true
    echo "<br>";
    echo "x2";
    var_dump($x2);
    echo "<br>";
    echo "$x";
    var_dump($x);

?>
<?php
    echo "<hr>if语句</br>";

    $t = date(H); //双引号有没有不影响结果
    if ($t < "0") {  //双引号有没有不影响结果
        echo "have a good day";


    } else {
        echo "111";
    }

?>

</body>
</html>


