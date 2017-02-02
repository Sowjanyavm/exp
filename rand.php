<?php

$rand=rand(0,9);
echo $rand;

$operator=array("+","-");

$op=$operator[rand(0,sizeof($operator)-1)];

echo $op;

$number=array("one","two","three","four","five","six","seven","eight","nine");

$random_name = $number[rand(0, sizeof($number) - 1)];

$num=(int)$random_name;
echo $num;

// function add($rand,)




?>