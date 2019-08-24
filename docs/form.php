<?php
$name = htmlspecialchars($_GET['name']);
$message = htmlspecialchars($_GET['message']);


echo 'Hey ', $name, '! We seriously too busy doing science things and we don\'t want your message. Deleting: ', $message;

?>

<html>
    <p> If you really need to contact us, please call (951)-262-3062. Santa Claus manages our customer service department.</p>
    <form action="contact.html">
        <input type="submit" value ="Go back to FutureWorks"/>
    </form>
</html>