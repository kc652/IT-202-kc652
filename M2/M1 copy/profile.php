<?php
require(__DIR__ . "/partials/nav.php");
?>
<h2>Profile Page</h2>
<?php
if (is_logged_in()) {
    echo $_SESSION['user']['email'];
   
} else {
    echo "You're not logged in";
}
?>
