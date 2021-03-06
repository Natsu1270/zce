<?php
/**
*@author by Vuong
*@category ZCE62 ArrayObject (this class can iterate if you use the function getIterator() first) and ArrayIterator; Read my comment on php.net http://php.net/manual/en/class.arrayobject.php
*/

$array = [1, 2, 3, 4];
$a = new ArrayObject($array);
$b = new ArrayIterator($array);

$iterator = $a->getIterator();

for($iterator->rewind(); $iterator->valid(); $iterator->next()){
    echo $iterator->current()*2;
    
}

for($b->rewind(); $b->valid(); $b->next()){
    echo $b->current()*2;
    
}

//https://3v4l.org/aXjQr