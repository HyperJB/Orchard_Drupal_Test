
<?php 

if(isset($_GET['submitted'])) {

    $input = (isset($_GET['input']) ? $_GET['input'] : '');
    $result = '';

    if(!empty($input)) {

        $str = cleanStr(strtolower($input));
        $str_reverse = strrev($str);

        if($str == $str_reverse) {
            $result = 'TRUE';
        } else {
            $result = 'FALSE';
        }

    } else {
        $result = 'UNDETERMINED';
    }

}

/**
 * Clean string from non-alphanumeric characters and spaces
 */
function cleanStr($str) {

    $str = preg_replace('/[^a-zA-Z0-9\s]/', '', $str);
    $str = str_replace(" ", "", $str);

    return $str;


}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>1. emordnilaP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <h1>1. emordnilaP</h1>
    <h2 style="color:green"><?php print (!empty($input) ? 'You entered <strong>"' . $input . '"</strong>': ''); ?></h2>
    <h2 style="color:red;"><?php print (!empty($result) ? $result : '') ?></h2>

    <form action="emordnilap.php" method="GET">
        <label>Input text</label>
        <input type="text" name="input" value="" />
        <input type="hidden" name="submitted" value="1" />
        <button type="submit">Submit</button>
        <br />
        <h3>Test cases to copy and paste into text box</h3>
        emordnilaP, Kayak, No lemon, no melon
    </form>

</body>
</html>

