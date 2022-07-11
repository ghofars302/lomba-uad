<html>
    <head>
        <?php
            $test_value = true;
        ?>
    </head>
    <body>
        <?php
            require '../api/get-guru-list.php';
            $gurulist = ob_get_contents();
            ob_end_clean();

            echo $gurulist;
        ?>
    </body>
</html>