<?php
/** แสดงข้อมูลตัวเลข จาก $start ถึง $end ว่าเป็นเลขคู่ หรือ เลขคี่ */
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <form method="post" action="http://localhost/88823665-camp-66/php_04.php">
            <div class="row">
                <div class="col">
                    <label for="startnumber" class="form-label">กรอกตัวเลขเริ่มต้น</label>
                    <input name="start" type="number" class="form-control" id="startnumber" placeholder="Start Number" >
                </div>
                <div class="col">
                    <label for="endnumber" class="form-label">กรอกตัวเลขสิ้นสุด</label>
                    <input name="end" type="number" class="form-control" id="endnumber" placeholder="End Number" >
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

            <div class="container">
                <?php
                    $start = 1;
                    $end = 100;
                    if(isset($_REQUEST['start']) && isset($_REQUEST['end'])){
                        $start = intval($_REQUEST['start']);
                        $end = intval($_REQUEST['end']);
                    } else {
                        $start = 1;
                        $end = 100;
                    }   
                ?>

                <h1><?php echo "ตัวเลข ".$start." - ".$end ?></h1>
                <div class="row">
                    <div class="col h2 text-center">
                        <?php
                            if($start <= $end){
                                for ($x = $start; $x <= $end; $x++){
                                    if ($x % 2 == 0){
                                        echo $x."  เป็นเลขคู่<br><br>";
                                    } else {
                                        echo $x."  เป็นเลขคี่<br><br>";
                                    }
                                }
                            } else {
                                echo "กรุณาใส่ตัวเลขเริ่มต้นให้น้อยกว่าตัวเลขตัวสุดท้าย";
                            }
                        ?>
                    </div>
                </div>
                    
            </div>
        </form>    
    </body>
</html>