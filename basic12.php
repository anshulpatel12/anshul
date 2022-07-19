<?php
$email = 'test@.com';
if (filter_var($email, FILTER_VALIDATE_EMAIL))
 {
    echo $email ." email is valid";
}else {
    echo $email . " email is not valid";
}
?>
