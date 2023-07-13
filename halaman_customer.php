 
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                           <?php if ($this->session->flashdata('sukses')): ?>
                        <script> Swal.fire(
                'Success',
                'Data berhasil disimpan',
                'success'
            );</script>
                          <?php endif; ?>
                       
                        <div class="row">
                            <div class="col-xl-6">
                               
                            </div>
                        </div>
      
          
                        
                        
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fa fa-table me-1"></i>
                                Data Customer Progress
                            </div>

                            <div class="card-body">
                            	<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="fa fa-plus"></i>&nbsp;Tambah data</button><br><br>
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                             <script>
          $(document).ready(function() {

    var table1 = $('#example1').DataTable( {
      responsive: true,
    } );

    var table2 = $('#example2').DataTable( {
      responsive: true,
    } );

    $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (event) {
      var tabID = $(event.target).attr('data-bs-target');
      if ( tabID === '#profile' ) {
        table2.columns.adjust().responsive.recalc();
      }
    } );

  } );
      </script>
      
                        
                        <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

    <table id="example1" class="display dataTable cell-border" style="width:100%">
        <thead>
            <tr>
              
                                            <th>Nama Customer</th>
                                            <th>Alamat</th>
                                            <th>Sumber Informasi</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                                foreach($cs->result_array() as $i):
                                        $id_customer=$i['id_customer'];
                                        $nama_customer=$i['nama_customer'];
                                        $daerah=$i['daerah'];
                                        $sumber_informasi=$i['sumber_informasi'];
                                        $status=$i['status'];
                                        $keterangan=$i['keterangan'];
                        ?>
                                        <tr>
                                            <td><?= $i['nama_customer'] ?></td>
                                            <td><?= $i['daerah'] ?></td>
                                            <td><?= $i['sumber_informasi'] ?></td>
                                            <td><?= $i['status'] ?></td>
                                            <td><?= $i['keterangan'] ?></td>
                                            
                                                 
                                        <td>	<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal_edit<?php echo $id_customer;?>" data-bs-whatever="@getbootstrap"><i class="fa fa-plus"></i>&nbsp;Ubah data</button>
                                            
                                            </td>
                                        </tr>
                                       <?php
                endforeach;
                ?> 
        </tbody>
    </table>

  </div>

  
                        
                    
                                   </div>
                            </div>
                        </div>
                    </div>
                 
                    
                    
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo base_url();?>assets/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="<?php echo base_url();?>assets/js/datatables-simple-demo.js"></script>
    </body>
</html>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  	<form action="<?php echo site_url('Admin/crud_konten'); ?>" method="post" role="form" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-file-alt"></i>&nbsp;Tambah data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"><i class="fas fa-user"></i>&nbsp;Nama Customer :</label>
            <input type="text" name="nama_customer" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label"><i class="fas fa-map-marked-alt"></i>&nbsp;Asal Daerah :</label>
            <textarea class="form-control" name="daerah" id="message-text"></textarea>
          </div>
          <div class="mb-3">
          	<label class="control-label"><i class="fas fa-list"></i>&nbsp;Status progress: </label>
                  <select style="height:35px" class="form-control" name="status" id="" type="text">
                    <option value="">-- Pilih status progress -- </option>
                    <option value="closing">Closing</option>
                    <option value="belum">Belum ada kabar</option>
                    <option value="batal">Cancel</option>
                  </select>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"><i class="fas fa-book"></i>&nbsp;Sumber :</label>
            <input type="text" name="sumber_informasi" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
          	<label for="message-text" class="col-form-label"><i class="far fa-sticky-note"></i>&nbsp;Keterangan :</label>
          	<textarea class="form-control" name="keterangan"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </div>
  	</form>
    </div>
  </div>
</div>

     <?php
                                foreach($cs->result_array() as $i):
                                        $id_customer=$i['id_customer'];
                                        $nama_customer=$i['nama_customer'];
                                        $daerah=$i['daerah'];
                                        $sumber_informasi=$i['sumber_informasi'];
                                        $status=$i['status'];
                                        $keterangan=$i['keterangan'];
                        ?>
   
       <div class="modal fade" id="modal_edit<?php echo $id_customer;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  	<form action="<?php echo site_url('Admin/edit_progress'); ?>" method="post" role="form" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-file-alt"></i>&nbsp;Ubah data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"><i class="fas fa-user"></i>&nbsp;ID Customer :</label>
            <input type="text" name="id_customer" value="<?php echo $id_customer;?>" class="form-control">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"><i class="fas fa-user"></i>&nbsp;Nama Customer :</label>
            <input type="text" name="nama_customer" value="<?php echo $nama_customer;?>" class="form-control"> 
          </div>
          
          <div class="mb-3">
          	<label class="control-label"><i class="fas fa-list"></i>&nbsp;Status progress: </label>
                  <select style="height:35px" class="form-control" name="status" id="" type="text">
                    <option value="<?php echo $status;?>"><?php echo $status;?></option>
                    <option value="closing">Closing</option>
                    <option value="belum">Belum ada kabar</option>
                    <option value="batal">Cancel</option>
                  </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </div>
  	</form>
    </div>
  </div>
</div>
    </div>
<?php endforeach; ?>

 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.css"/>
 
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.js"></script>

<script type="text/javascript">
     $(document).ready(function() {

    var table = $('#datatablesSimple').DataTable( {
      responsive: true,
    } );

    $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (event) {
      var tabID = $(event.target).attr('data-bs-target');
      if ( tabID === '#profile' ) {
        table2.columns.adjust().responsive.recalc();
      }
    } );

  } );

</script>


