<?php

echo "testCookies_2";

setcookie("style_2", "light", time() + 5);


echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

if (isset($_COOKIE["style_2"])) {

    echo $_COOKIE["style_2"];

}



