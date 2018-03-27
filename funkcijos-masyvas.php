<?php


$m =[1, 3, 5, 10];

var_dump (in_array(5, $m)) ."<br>";
var_dump (in_array(2, $m)) ."<br>";

list ($a, $b) = $m;
echo $a . ' ' . $b .'<br>';

$s = ' ccc, aaa, ddd, bbb';

$m = explode( ' ', $s);
var_dump($m); echo '<br>';
sort ($m);
var_dump($m); echo '<br>';
echo implode(' ', $m) .'<br>';

$m1 = [1, 3, 5, 10];
$m2 = [1, 2, 7];
$m3 = array_merge($m1, $m2);
echo json_encode($m3);
//$m4 = array_unique($m3) .'<br>';
//echo json_encode($m4) . '<br>';



$m = ['a' =>'bbb', 'b' =>'aaa', 'c'=>'ddd'];
echo json_encode(array_keys($m)) . '<br>';
echo json_encode(array_values($m)) . '<br>';


function myfunction($v)
{
    return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));

echo json_encode(array_map(function($p) {
    return $p**2;
}, $a)) .'<br>';


$n = [
    ['vardas' => 'jonas', 'amzius' =>30],
    ['vardas' => 'petras', 'amzius' =>25],
    ['vardas' => 'antanas', 'amzius' =>31],
];

usort ($n, function($a, $b){
    if($a['amzius'] == $b['amzius']) return 0;
    elseif ($a['amzius'] > $b['amzius']) return 1;
    else return -1;
});
echo json_encode($n) .'<br>';
