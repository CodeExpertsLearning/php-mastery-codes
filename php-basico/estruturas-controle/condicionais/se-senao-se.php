<?php

$countString = strlen('Carlos'); //6

if($countString == 5) {
    
    echo "String possui 5 caracteres...";

} else if($countString == 6) {
    
    echo "String possui 6 caracteres...";

} else {

    echo "A string não possui cinco caracteres...";

}


if ($countString == 5):

    echo "String possui 5 caracteres...";
elseif ($countString == 6):

    echo "String possui 6 caracteres...";
else:

    echo "A string não possui cinco caracteres...";
endif;