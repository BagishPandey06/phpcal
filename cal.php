<?php
global $temp;
global $result;
global $op;
$temp=$_REQUEST['temp'];
$value=$_REQUEST['value'];
$op=$_REQUEST['opt'];
switch($op){
case 'add':
    add($temp, $value);
    break;
case 'sub':
    sub($temp, $value);
    break;
case 'mul':
    mul($temp, $value);
    break;
case 'div':
    div($temp, $value);
    break;
case 'eq':
    eq();
    break;    
}
function add($temp,$value)
{
    $result=$temp+$value;
    echo $result;
}
function sub($temp,$value)
{
    $result=$value-$temp;
    echo $result;

}
function mul($temp,$value)
{
    if ($temp==0) {
    $temp=1;
}
    $result=$value*$temp;
    echo $result;
}
function div($temp,$value)
{
    $result=$value/$temp;
    echo $result;

}
?>