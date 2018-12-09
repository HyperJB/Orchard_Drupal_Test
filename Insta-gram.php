
<?php 

$input = (isset($_GET['input']) ? $_GET['input'] : '');

if(!empty($input)) {

    $arr = setup(strtolower($input));

    $result = "";

    if(heterogram_check($arr) == true) {
        $result = 'HETEROGRAM';
    } elseif(isogram_check($arr) == true) {
        $result = 'ISOGRAM';
    } else {
        $result = 'NOTAGRAM';
    }

}

/**
 * Count each letter into array
 */
function setup($str) {

    $arr = array();

    for($i=0;$i<strlen($str);$i++) {

        if(!empty($arr[$str[$i]])) {
            $arr[$str[$i]]++;
        }
        else {
            $arr[$str[$i]] = 1;
        }

    }

    return $arr;

}

/**
 * HETEROGRAM check
 */
function heterogram_check($arr) {

    $h_check = true;

    foreach($arr as $a) {
        if($a != 1) {
            $h_check = false;
        }
    }
    
    return $h_check;

}

/**
 * ISOGRAM check
 */
function isogram_check($arr) {

    // Set base number to check on.
    $base_number = array_values($arr)[0];

    $i_check = true;

    foreach($arr as $a) {
        if($a != $base_number) {
            $i_check = false;
        }
    }

    return $i_check;

}


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2. Insta-gram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <h1>2. Insta-gram</h1>
    <h2 style="color:green"><?php print (!empty($input) ? 'You entered <strong>"' . $input . '"</strong>': ''); ?></h2>
    <h2 style="color:red;"><?php print (!empty($result) ? $result : '') ?></h2>

    <form action="Insta-gram.php" method="GET">
        <label>Input text</label>
        <input type="text" name="input" value="" />
        <button type="submit">Submit</button>
        <br />
        <h3>Test cases to copy and paste into text box</h3>
        Caucasus, uncopyrightable, authorising
    </form>

</body>
</html>

