<?php 
    include_once('./konfigurasi/Database.php');
    $data = new Database();

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];

        $modified = date('Y-m-d H:i:s');

        $sqlinsert = "INSERT INTO categories (name, created, modified) values('$name', '$modified', '$modified')";
        if ($data->simpanData($sqlinsert)) {
            header("location:kategori.php");
        }
        //header("location:product_add.php");
    }
?>

<!doctype html>
<html lang="en">
<?php include_once('./layouts/head.php') ?>

<body>
    <?php include_once('./layouts/menu.php') ?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Add New</h1>
    </div>

    <div class="container">
        <div class="card-deck mb-3">
            <div class="card mb-12 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                        
                    </h4>
                </div>
                <div class="card-body">
                    <form action="kategori_add.php" method="POST">
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary bt-sm">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include_once('./layouts/footer.php') ?>
    </div>

    <?php include_once('./layouts/js.php') ?>
</body>
</html>
