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
        <form method="post" action="http://localhost/88823665-camp-66/php_03.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">กรอกตัวเลขสูตรคูณที่ต้องการค้นหา</label>
                <input name="number" type="number" class="form-control" id="exampleFormControlInput1" placeholder="1 - ....">
            </div>

            <div class="mb-3">
            <button type="submit" class="btn btn-success">Submit</button>
            </div>

            <div class="container">
                <?php
                $my_var = 2;
                if(isset($_REQUEST['number'])){
                    $my_var = intval($_REQUEST['number']);
                }
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
        </form>
    </body>
</html>