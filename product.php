<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">รายการสินค้าทั้งหมด</h1>

<?php if (isset($_GET['add'])) { ?>

    <div class="card shadow mb-4">

        <div class="card-body">

            <form action="?prosuct&add_db" method="post">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">รหัสรายการสินค้าทั้งหมด</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="Email" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput5" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="exampleFormControlInput5" name="Firstname" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label"> นามสกุล</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" name="Lastname" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="select1" class="form-label"> Status</label>
                    <select class="form-select form-control" aria-label="Default select example" id="select1" name="Status" required>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" onclick="history.back()">Cancle</a>
            </form>

        </div>

    </div>

<?php } elseif (isset($_GET['cart'])) {
    //qr


?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">สินค้าในตะกร้า</h6>

        </div>


        <form action="?prosuct&cart_db" method="post">

            <div class="card-body">
                The styling for this basic card example is created by using default Bootstrap
                utility classes. By using utility classes, the style of the card component can be
                easily modified with no need for any custom CSS!
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" onclick="history.back()">Cancle</a>
            </div>

        </form>

    </div>


<?php

    //เพิ่ม db
} elseif (isset($_GET['add_db'])) {

    //แก้ไข db
} elseif (isset($_GET['cart_db'])) {

    //ลบ
} elseif (isset($_GET['del'])) {
} else {

?>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ชื่อ</th>
                            <th>รายละเอียด</th>
                            <th>สินค้าในสต็อค</th>
                            <th style="width: 4rem;">จำนวณ</th>
                            <th>สั่งซื้อ</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>ทดสอบ</td>
                            <td>ทดสอบ</td>
                            <td>150</td>
                            <td><input type="number" value="" style="width: 4rem;"></td>
                            <td><a href="?prosuct&cart" class="btn btn-success btn-sm float-end"><i class="fas fa-shopping-cart"></i></a></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php } ?>