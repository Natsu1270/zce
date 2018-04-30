<?php
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}


$generator = gen_one_to_three();

var_dump($generator). PHP_EOL;

foreach ($generator as $value) {
    echo "$value" .PHP_EOL;
}
