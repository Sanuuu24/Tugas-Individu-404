<?php include('template/header.php');

$students = 
[
    [
     "nama" => "Udin",
     "kelas" => "11",
     "jurusan" => "PPLG",
     "umur" => 17,
     "status" => "DISPENSASI",

    ],
    [
     "nama" => "Udin",
     "kelas" => "11",
     "jurusan" => "PPLG",
     "umur" => 17,
     "status" => "DISPENSASI",

    ],
    [
     "nama" => "Udin",
     "kelas" => "11",
     "jurusan" => "PPLG",
     "umur" => 17,
     "status" => "DISPENSASI",

    ],
];

$number = 1;

?>



    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Data Siswa XI PPLG 1
            </h2>
            <div class="input-group dashboard-filter">
                <button class="btn btn-success"><i class="fa-solid fa-plus">Tambah Siswa</i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12">
                <div class="panel chart-panel-1">
                </div>
            </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                        <tbody>
                            <!-- foreach metode -->
                            <?php foreach($students as $student) : ?>
                                <tr>
                                    <td><?= $number++ ?></td>
                                    <?php foreach($student as $s => $row) : ?>
                                        <td><?= $row; ?></td>
                                    <?php endforeach; ?>
                                        <td>
                                            <div class="btn-box">
                                                <button><i class="fa-light fa-eye"></i></button>
                                                <button><i class="fa-light fa-pen"></i></button>
                                                <button><i class="fa-light fa-trash"></i></button>
                                            </div>
                                        </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright© <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span class="text-danger">Satria Ibnu</span></p>
        </div>
        <!-- footer end -->
    </div>

<?php include('template/footer.php')?>