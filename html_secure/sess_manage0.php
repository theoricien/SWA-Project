<?php
    ini_set('session.cookie_secure', 1);
    session_start();
    session_id();
    if(isset($_POST['submit']) && isset($_COOKIE['PHPSESSID'])) {
        echo 'Session ID = ' . $_COOKIE['PHPSESSID'];
    }
?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" name="submit" value="Send request with session id in cookie!"><br>
</form>