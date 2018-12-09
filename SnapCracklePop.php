
<?php 

$str = '';

for($i=1;$i<101;$i++) {

    if((!is_decimal($i / 3))&&(!is_decimal($i / 5))) {
        $str .= 'POP';
    } elseif(!is_decimal($i / 3)) {
        $str .= 'SNAP';
    } elseif(!is_decimal($i / 5)) {
        $str .= 'CRACKLE';
    } else {
        $str .= $i;
    }

}

/**
 * Check if decimal
 */
function is_decimal( $val )
{
    return is_numeric( $val ) && floor( $val ) != $val;
}


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>5. Snap, Crackle, Pop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <h1>5. Snap, Crackle, Pop</h1>
    
    <?php print $str; ?>

</body>
</html>

