<html>
<head>
    <title>Основы</title>
</head>
<body>
<?php
function summ($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function comp($a, $b)
{
    return $a * $b;
}

function del($a, $b)
{
    return $a / $b;
}

function mathOperation($arg1, $arg2, $op)
{
    switch ($op) {
        case'+':
            echo summ($arg1, $arg2);
            break;
        case'-':
            echo sub($arg1, $arg2);
            break;
        case'*':
            echo comp($arg1, $arg2);
            break;
        case'/':
            echo del($arg1, $arg2);
            break;
    }
    echo "<br>";
}

function operation($a, $b)
{
    if ($a > 0 && $b > 0) {
        $ans = $a + $b;
        echo "$ans<br />";
    } elseif ($a < 0 && $b < 0) {
        $ans = $a - $b;
        echo "$ans<br />";
    } else {
        $ans = $a * $b;
        echo "$ans<br />";
    }
}

function power($val, $pow)
{
    if ($pow == 0)
        return 1;
    else
        return $val * power($val, --$pow);
}


echo "<br><br><b>ВЕТВЛЕНИЯ И ФУНКЦИИ</b><br />";
$a = 6;
$b = 7;

echo operation($a, $b);

$ans = $a < $b ? $b : $a;
echo "$ans <br />";

switch ($a) {
    case 0:
        echo "0 1 2 3 4 5 6 7 8 9<br/>";
        break;
    case 1:
        echo "1 2 3 4 5 6 7 8 9<br/>";
        break;
    case 2:
        echo "2 3 4 5 6 7 8 9<br/>";
        break;
    case 3:
        echo "3 4 5 6 7 8 9<br/>";
        break;
    case 4:
        echo "4 5 6 7 8 9<br/>";
        break;
    case 5:
        echo "5 6 7 8 9<br/>";
        break;
    case 6:
        echo "6 7 8 9<br/>";
        break;
    case 7:
        echo "7 8 9<br/>";
        break;
    case 8:
        echo "8 9<br/>";
        break;
    case 9:
        echo "9<br/>";
        break;
}
mathOperation(5, 3, '/');
echo power(2, 7);

?>
</body>
</html>