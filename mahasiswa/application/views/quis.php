<h1>Quis</h1>
<div class="x_panel">
	<div class="x_title">
        <h2>Pengantar Ekonomi 1 - Quis #123001</h2>
         <ul class="nav navbar-right panel_toolbox">
           <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
           </li>
           <li><a class="close-link"><i class="fa fa-close"></i></a>
           </li>
         </ul>
        <div class="clearfix"></div>
    </div>    
   <div class="x_content">
      <section class="content jadwal">
        <div class="row">
          <div class="col-md-6">
            <div class="col-sm-4">Dosen Pengajar</div>
            <div class="col-sm-8">: <b>John Doe</b></div>
            <div class="col-sm-4">Jumlah SKS</div>
            <div class="col-sm-8">: <b>3</b></div>
            <div class="col-sm-4">Jenis Quis</div>
            <div class="col-sm-8">: <b>Pilihan Ganda</b></div>
          </div>
          <div class="col-md-6">
            <div class="col-sm-4">Jumlah Soal</div>
            <div class="col-sm-8">: <b>30</b></div>
            <div class="col-sm-4">Waktu Mengerjakan</div>
            <div class="col-sm-8">: <b>90 Menit</b></div>
          </div>
        </div>
      </section>
      <hr>
      <div id="quis_start" class="text-center">
        <a href="<?php echo base_url("matakuliah");?>" class="btn btn-default"><< Matakuliah Lain</a>
        <a href="#" class="btn btn-primary start">Mulai Mengerjakan >></a>
      </div>
   </div>
</div>
<script type="text/javascript">
  $(document).ready(function(e) {
    $("#quis_start .start").click(function(e) {
      swal({
        title: "Anda Yakin?",
        text: "Ketika anda yakin memulia untuk megerjakan, maka anda harus mengerjakan hingga waktu yang ditentukan. Pastikan jaringan anda terkoneksi dengan baik ke server.",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, Mulai",
        closeOnConfirm: true,
      },
      function(){
          $.ajax({
            type: 'POST',
            url: "<?php echo base_url("matakuliah/soal"); ?>",
          }).done(function(response) {
              $("#quis_start").removeClass("text-center");
              $("#quis_start").html(response);
          }).fail(function() {
          })
      });
    })
  })
</script>