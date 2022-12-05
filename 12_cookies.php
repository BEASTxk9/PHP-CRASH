<?php
// <---- COOKIES ---->

/*
Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

// set cookie
// variable, value, expir time(in seconds) 86400s = 1day
setcookie('name', 'Shane', time() + 86400);

// display cookie on the page
if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
}
;

// unsets the cookie
// setcookie('name', '', time() - 864000);

?>