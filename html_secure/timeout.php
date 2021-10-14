<html>
    <head>
    <link rel='stylesheet' property='stylesheet' id='s' type='text/css' href='../css/s.css' media='all'/>
    </head>
    <body>
        <iframe id='iframe' src='../tpl.html'></iframe>
        <a href="../index.html">
            <div id="home">
                /home
            </div>
        </a>
        
        <div id="cent">
            <div id="content">
                <?php
                    echo 'Session expired, login again:';
                ?>
                <form method="POST" action="sess_manage2.php">
                    <input type="submit" name="login" value="Login">
                </form>
           </div>
        </div>
    </body>
</html>