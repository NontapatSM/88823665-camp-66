<?php
/** แสดงตารางสูตรคูณ ตามแม่สูตรคูณที่ระบุในตัวแปร */
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <?php
            $my_var = 2;
            ?>
            <h1>สูตรคูณแม่ <?php echo $my_var; ?></h1>
            <div class="row">
                <div class="col h2 text-center">
                    <?php
                        for ($x = 1; $x <= 12; $x++){
                            echo $my_var." * ".$x." = ".( $my_var * $x )."<br>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>