<?php 
    include_once('./konfigurasi/Database.php');
    $data = new Database();

    $getId = $_GET['id'];
    $sqledit = "select * from products where id='$getId' LIMIT 1";
    $resultEdit = $data->editData($sqledit);

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];

        $modified = date('Y-m-d H:i:s');

        $sqlinsert = "UPDATE products SET name='$name', description='$description', price=$price, category_id=$category_id, modified='$modified' WHERE id=$id";
        if ($data->simpanData($sqlinsert)) {
            header("location:index.php");
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
        <h1 class="display-4">Edit Data</h1>
    </div>

    <div class="container">
        <div class="card-deck mb-3">
            <div class="card mb-12 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                        
                    </h4>
                </div>
                <div class="card-body">
                    <form action="edit_produk.php" method="POST">
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="hidden" name="id" value="<?php echo $resultEdit['id'] ?>" class="form-control">
                            <input type="text" value="<?php echo $resultEdit['name'] ?>" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="description" class="form-control" cols="5" rows="5" required><?php echo $resultEdit['description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="price" value="<?php echo $resultEdit['price'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kategori</label>
                            <select name="category_id" id="" class="form-control" required>
                                <option value="">Pilih</option>
                                <?php
                                    $sql = "select * from categories order by name ASC";
                                    $result = $data->tampilData($sql);
                                    foreach ($result as $row) {
                                ?>
                                <option value="<?php echo $row['id'] ?>" <?php echo $row['id'] == $resultEdit['category_id'] ? 'selected':'' ?>>
                                    <?php echo $row['name'] ?>
                                </option>
                                <?php } ?>
                            </select>
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
