<html>
<head>
    <title>Основы</title>
</head>
<body>
<?php

function translit($st)
{
    /*$arr= array('a'=>'а','b'=>'б','v'=>'в','g'=>'г','d'=>'д','ye'=>'е','yo'=>'ё','zh'=>'ж','z'=>'з',
        'i'=>'и','j'=>'й','k'=>'к','l'=>'л','m'=>'м','n'=>'н','o'=>'о','p'=>'п','r'=>'р','s'=>'с',
        't'=>'т','u'=>'у','f'=>'ф','h'=>'х','ts'=>'ц','ch'=>'ч','sh'=>'ш','shch'=>'щ','y'=>'ы',
        'e'=>'э','yu'=>'ю','ya'=>'я');
    foreach ($arr as $key => $to){
        $str=strtr($st,$to,$key);

    }echo $str;
    echo "$st";*/
    $aLetters = array(
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "y",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "ts",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "s'h",
        "ъ" => "",
        "ы" => "i",
        "ь" => "'",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
        " " => " "
    );

    $word = strtr($st, $aLetters);
    // echo $word;
    return $word;
}

function trans($st)
{
    $st = strtr($st, ' ', '_');
    return $st;
}

function transfig($st)
{
    $st = translit($st);
    $st = trans($st);
    return $st;
}

function bubble($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i; $j < $n; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $tmp;
            }
        }
    }
    return $arr;
}

echo "<br><br><b>ЦИКЛЫ И МАССИВЫ</b><br />";
$i = 0;
while ($i < 100) {
    if ($i % 3 == 0)
        echo "$i ";
    $i++;
}
echo "<br>";

$i = 0;
do {
    if ($i == 0)
        echo "$i - это ноль<br />";
    elseif ($i % 2 == 0)
        echo "$i - четное число<br />";
    else echo "$i - нечетное число<br />";
} while (++$i < 11);
echo "<br>";

for ($i = 0; $i < 10; print $i, print " ", $i++) ;
print "<br>";

$arr = array('Москва', 'Челябинск', 'Саратов');
foreach ($arr as $value)
    echo "$value ";
print "<br>";
unset($arr);


$arr = array(
    "Московская область" => array("Мосва", "Зеленоград", "Клин"),
    "Ленинградская область" => array("Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт")
);
echo "<br> Московская область: <br />";
foreach ($arr["Московская область"] as $value) {
    echo "$value ";
}
echo "<br>Ленинградская область: <br />";
foreach ($arr["Ленинградская область"] as $value) {
    echo "$value ";
}
unset ($arr);


echo "<br>";
$st = "привет";
echo translit($st);

echo "<br>";
$st = "мама мыла раму";
echo trans($st);

echo "<br>";
$st = "мама мыла раму";
echo transfig($st);

echo "<br>";
$arr = array(5, 7, 3, 8, 4, 12, 67, 45, 34, 56);
$arr = bubble($arr);
foreach ($arr as $value)
    echo "$value ";
?>
</body>
</html>