<?php 
    include_once('./konfigurasi/Database.php');
    
    $data = new Database();
    $sql = "select prod.id, prod.name, prod.description, prod.price, prod.modified, cat.name as cat_name from products as prod INNER JOIN categories as cat ON prod.category_id=cat.id order by prod.modified desc";
    $hasil = $data->tampilData($sql);
?>

<!doctype html>
<html lang="en">
<?php include_once('./layouts/head.php') ?>

<body>
    <?php include_once('./layouts/menu.php') ?>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Data Produk</h1>
    </div>

    <div class="container-fluid">
        <div class="card-deck mb-3">
            <div class="card mb-12 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">
                        <a href="product_add.php" class="btn btn-primary btn-sm">Add New</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Kategori</th>
                                    <th>Modified</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($hasil) > 0) {
                                    $no = 1;
                                    foreach ($hasil as $row) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo ucfirst($row['name']) ?></td>
                                        <td><?php echo $row['description'] ?></td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td><?php echo $row['cat_name'] ?></td>
                                        <td><?php echo $row['modified'] ?></td>
                                        <td>
                                            <a href="edit_produk.php?id=<?php echo $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="hapus_produk.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                } else {
                                ?>
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada data</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('./layouts/footer.php') ?>
    </div>

    <?php include_once('./layouts/js.php') ?>
</body>
</html>
