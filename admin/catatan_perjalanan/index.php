<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- style tabel start -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">
  <!-- style tabel end -->
  <!-- style sidebar start -->
  <link rel="stylesheet" href="../assets/css/style.admin.css">
  <!-- style sidebar end -->
  <title>halaman dashboar</title>
</head>

<body>
  <!-- card tolbol end search start-->
   <div class="card mt-2 ">
      <div class="card-header ">
        <a href="?page=Dashboard" class="btn btn-primary me-2">Kembali</a>
       
        
      </div>
    </div>
  <!-- card tolbol end search end-->

  
  <!-- tabel start -->
    <div class="card mt-4">
      <div class="card-body">
        <table id="example" class="table table-striped" style="width:100%; height:100%;">
          <thead>
            <tr>
              <th>no</th>
              <th>nama</th>
              <th>tanggal</th>
              <th>jam</th>
              <th>tujuan</th>
              <th>suhu tubuh</th>
              <th>kondisi</th>
              <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
         include '../inc/koneksi.php';
         $query =mysqli_query($koneksi,"SELECT * FROM catatan ");
        $no = 1;
        
        while($data = mysqli_fetch_array($query)){
   ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $data['nama_lengkap']?></td>
              <td><?php echo $data['tanggal']?></td>
              <td><?php echo $data['jam']?></td>
              <td><?php echo $data['tujuan']?></td>
              <td><?php echo $data['suhu_tubuh']?></td>
              <td><?php echo $data['kondisi']?></td>
              <td><a href="catatan_perjalanan/hapus.php?id_catatan=<?php echo $data[0]; ?>"
                  onclick="return confirm('apakah anda Yakin untuk menghapus?')"
                  class="btn btn-danger me-2 btn-sm">Hapus </a>|
                <a href="?page=edit_catatan&&id_catatan=<?php echo $data['id_catatan'];?>" type="button"
                  class="btn btn-warning me-2 btn-sm">Edit</a>|
                <a href="?page=detail&&id_catatan=<?php echo $data ['id_catatan'];?>" type="button" class="btn btn-primary me-2 btn-sm">Lihat</a>
              </td>
              <?php
    $no++;
  } 
   ?>
          </tbody>
        </table>
      </div>
    </div>
  <!-- tabel end -->

  <!-- boostrap js start -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <!-- boostrap js end -->

  <!--  -->
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
  <!--  -->

  <!-- js script tabel start  -->
  <script>
    $(document).ready(function () {
      var table = $('#example').DataTable({
         buttons: [ 'excel', 'pdf', 'colvis' ] , 
        // buttons: [ 'copy', 'excel', 'pdf', 'colvis' ] ,
        // dom : untuk membuat style


        // buttons: [ 'copy', 'excel', 'print', 'csv', 'pdf', 'colvis' ]

        // menampilkan 5 data start
        lengthMenu: [
          [5, 10, 25, 50, 100, -1],
          [5, 10, 25, 50, 100, "All"]
        ]
        //  menampilkan 5 data end
      });

      table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
    });
  </script>
  <!-- js script tabel end -->

</body>

</html>