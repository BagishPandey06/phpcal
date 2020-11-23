<?php
/**
 * * PHP version 7.2.10
 * 
 * @category Components
 * @package  PackageName
 * @author   Bagish <Bagishpandey999@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     http://localhost/training2/cal.php
 */ 
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
    eq($temp);
    break;    
}
/**
 * Convert an object to an array
 *
 * @addram object  $object The object to convert
 * @return add
 */
function add($temp,$value)
{
    $result=$temp+$value;
    echo $result;
}
/**
 * Convert an object to an array
 *
 * @addram object  $object The object to convert
 * @return sub
 */
function sub($temp,$value)
{
    $result=$temp-$value;
    echo $result;

}
/**
 * Convert an object to an array
 * 
 * @$temp  object  $object The object to convert
 * @return mul
 */
function mul($temp,$value)
{
    if ($temp==0) {
        $temp=1;
    }
    $result=$value*$temp;
    echo $result;
}
/**
 * Convert an object to an array
 *
 * @addram object  $object The object to convert
 * @return div
 */
function div($temp,$value)
{
    $result=$value/$temp;
    echo $result;

}

?>
