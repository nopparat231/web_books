<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">ผู้ใช้งาน</h1>

<?php if (isset($_GET['add'])) { ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">เพิ่มข้อมูล ผู้ใช้งาน</h6>

        </div>

        <div class="card-body">

            <form action="?users&add_db" method="post">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">รหัสผู้ใช้งาน</label>
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

    <?php } elseif (isset($_GET['edit'])) {
        //qr


    ?>

        <div class="card shadow mb-4">
            <div class="card-header py-3">

                <h6 class="m-0 font-weight-bold text-primary">แก้ไขข้อมูล ผู้ใช้งาน</h6>

            </div>

            <div class="card-body">

                <form action="?users&edit_db" method="post">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">รหัสผู้ใช้งาน</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="Email" value="001" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput5" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="exampleFormControlInput5" name="Firstname" value="ทดสอบชื่อ" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label"> นามสกุล</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" name="Lastname" value="ทดสอบสกุล" autocomplete="off" required>
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


    <?php

    //เพิ่ม db
} elseif (isset($_GET['add_db'])) {
 

    //แก้ไข db
} elseif (isset($_GET['edit_db'])) {

    //ลบ
} elseif (isset($_GET['del'])) {

   
} else {

    ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <a href="?users&add" class="btn btn-success btn-circle float-end">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ชื่อผู้ใช้งาน</th>
                            <th>นามสกุล</th>
                            <th>Status</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>

                    <tbody>

                    <tr>
                        <td>1</td>
                        <td>ทดสอบชื่อ</td>
                        <td>ทดสอบสกุล</td>
                        <td>Admin</td>
                        <td><a href="?users&edit" class="btn btn-warning btn-sm float-end"><i class="fas fa-pencil-alt"></i></a></td>
                        <td><a href="?users&edit" class="btn btn-danger btn-sm float-end" onclick="return confirm('ต้องการลบรายการนี้ใช่หรือไม่?')"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>

                   
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php } ?>