<?php
//打印100以内的素数
echo '------1. print primary number less than 100----' . PHP_EOL;
mm_print_pn_100();

//打印200以内的素数
echo '------2. print primary number less than 200----' . PHP_EOL;
mm_print_pn_any();
mm_print_pn_any('xyz');
mm_print_pn_any(200);

//计算1-100的和
echo '------3. calculate sum of 1 ~ 100 ----' . PHP_EOL;
$sum = mm_sum_1_100();
echo 'sum (1~100) = ' . $sum . PHP_EOL;

echo '------4. calculate sum of all parameters ----' . PHP_EOL;
$sum = mm_sum_all(1,2,'3','5');
echo 'sum (1,2,\'3\',\'5\') = ' . $sum . PHP_EOL;

echo '------4. calculate sum of array ----' . PHP_EOL;
$nums = array(1,3,5,7);
$sum = mm_sum_array($nums);
echo 'sum (array(1,3,5,7)) = ' . $sum . PHP_EOL;


//获取30以内的所有素数
echo '------5. get all primary numbers less than 30----' . PHP_EOL;
$pn = mm_get_pn_30();
var_dump($pn);

