<?php

if(isset($_COOKIE['test'])) {
    echo "document.write('I see the cookie, it is " . $_COOKIE['test'] . "')";
} else {
    echo "document.write('I do not see the cookie, but I am setting it.');";
    setcookie('test', 'banana');
}