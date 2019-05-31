<?php
/**
 * 1.Global
 */

$x=10;
echo 'Gia tri x:'.$x ;


/*
 * 2.Local
 */
function test_var_local(){
    $x=5;
    echo '<br>Bien x local:'.$x;
}
test_var_local();

/*
 * 3.Static
 */
function myTest(){
   static $x=0;
    echo '<br>Test keyword static:'.$x;
    $x++;
}
myTest();
myTest();
myTest();
myTest();