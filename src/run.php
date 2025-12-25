<?php

include 'helper.php';

class MyClass
{
    use \Hidenari\HelperSample\Helper;
}

class TwoClass
{
    use \Hidenari\HelperSample\Helper;
}

echo new MyClass()->fizzBuzz(15);
