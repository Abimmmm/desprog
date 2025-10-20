<?php
session_start();
?>
<html>
    <body>
        <?php
            session_start();
            session_destroy();

            echo "All session variable are now removed, and the session is destroyed";
        ?>
    </body>
</html>