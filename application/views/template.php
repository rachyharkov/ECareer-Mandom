
<!doctype html>
<html lang="en">
  
<head>
    <title>Webs Apps</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/vendor/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/vendor/pace/themes/orange/pace-theme-minimal.css">
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/vendor/dropify/css/dropify.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/main.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/skins/sidebar-nav-darkgray.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/skins/navbar3.css" type="text/css">
    <!-- FOR DEMO PURPOSES ONLY. You should/may remove this in your project -->
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/css/demo.min.css">
    <link rel="stylesheet" href="demo-panel/style-switcher.css">
    <link rel="stylesheet" href="<?= base_url() ?>admin/assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url() ?>admin/assets/img/favicon.png">
  </head>
  <body>
    <!-- WRAPPER -->
    <div id="wrapper">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('oke'); ?>"></div>

<?php if ($this->session->flashdata('oke') ) : ?>

 <?php endif; ?>
      <!-- NAVBAR -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="brand">
          <a href="index.html">
            <img src="<?= base_url() ?>admin/assets/img/logo-white.png" alt="Klorofil Pro Logo" class="img-responsive logo">
          </a>
        </div>
        <div class="container-fluid">
          <div id="tour-fullwidth" class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="ti-arrow-circle-left"></i></button>
          </div>
          <form class="navbar-form navbar-left search-form">
            <input type="text" value="" class="form-control" placeholder="Search dashboard...">
            <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
          </form>
          <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?= base_url() ?>assets/img/default-user.png" alt="Avatar">
                  <span><?= ucfirst($this->fungsi->user_login()->name) ?></span>
                </a>
                <ul class="dropdown-menu logged-user-menu">
                  <li><a href="<?= site_url('profil') ?>"><i class="ti-user"></i> <span>My Profile</span></a></li>
                  <li><a href="<?= site_url('auth/logout') ?>"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- END NAVBAR -->
      <!-- LEFT SIDEBAR -->
      <div id="sidebar-nav" class="sidebar">
        <nav>
          <ul class="nav" id="sidebar-nav-menu">
            <li class="menu-group">Menu</li>
            <li><a href="<?= base_url() ?>dashboard"><i class="ti-home"></i> <span class="title">Dashboard</span></a></li>
            <li class="panel">
              <a href="#pengajuan" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-clipboard"></i> <span class="title">E-Career Manage</span> <i class="icon-submenu ti-angle-left"></i></a>
              <div id="pengajuan" class="collapse ">
                <ul class="submenu">
                  <li><a href="<?= base_url() ?>pengajuan_karyawan/create">Tambah Pengajuan</a></li>
                  <li><a href="<?= base_url() ?>pengajuan_karyawan">List Pengajuan <span class="badge badge-warning"><?= ucfirst($this->fungsi->count_pending()) ?></span></a></li>
                  <?php
                    if ($this->fungsi->user_login()->id_dept == 2) {
                      ?>
                      <li><a href="<?= base_url() ?>career_posts">Kelola Lowongan</a></li>
                      <?php
                    }
                  ?>
                </ul>
              </div>
            </li>
            <?php
              if ($this->session->userdata("level") == 1) {
            ?>
            <li class="panel">
              <a href="#pengaturan" data-toggle="collapse" data-parent="#sidebar-nav-menu" class="collapsed"><i class="ti-receipt"></i> <span class="title">Pengaturan</span> <i class="icon-submenu ti-angle-left"></i></a>
              <div id="pengaturan" class="collapse">
                <ul class="submenu">
                  
                      <li><a href="<?= base_url() ?>user">Kelola User</a></li>
                      <li><a href="<?= base_url() ?>user_role">Kelola Level</a></li>
                      <li><a href="<?= base_url() ?>dept">Kelola Departement</a></li>
                      <li><a href="<?= base_url() ?>posisi">Kelola Posisi</a></li>
                      <li><a href="<?= base_url() ?>Tingkat_pendidikan">Kelola Tingkat Pendidikan</a></li>
                      <li><a href="<?= base_url() ?>Fakultas">Kelola Fakultas</a></li>
                      <li><a href="<?= base_url() ?>Keahlian">Kelola Keahlian</a></li>
                      <li><a href="<?= base_url() ?>Status_karyawan">Kelola Status Kerja</a></li>
                      <li><a href="<?= base_url() ?>Priority">Kelola Prioritas</a></li>
                    
                  <li><a href="<?= base_url() ?>backup">Backup Database</a></li>
                  <li><a href="<?= base_url() ?>History_karyawan">History Login</a></li>
                </ul>
              </div>
            </li>
            <?php
              }
            ?>
          </ul>
          <button type="button" class="btn-toggle-minified" title="Toggle Minified Menu"><i class="ti-arrows-horizontal"></i></button>
        </nav>
      </div>
      <!-- END LEFT SIDEBAR -->
      <!-- MAIN -->
      <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content">
          <div class="content-heading clearfix">
            <div class="heading-left">
              <h1 class="page-title">Waktu Server</h1>
              <p class="page-subtitle"><script type="text/javascript">    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function tampilkanwaktu(){
        //buat object date berdasarkan waktu saat ini
        var waktu = new Date();
        //ambil nilai jam, 
        //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length
        var sh = waktu.getHours() + ""; 
        //ambil nilai menit
        var sm = waktu.getMinutes() + "";
        //ambil nilai detik
        var ss = waktu.getSeconds() + "";
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);"> 
           
<span id="clock"></span>
<?php
$hari = date('l');
/*$new = date('l, F d, Y', strtotime($Today));*/
if ($hari=="Sunday") {
  echo "Minggu";
}elseif ($hari=="Monday") {
  echo "Senin";
}elseif ($hari=="Tuesday") {
  echo "Selasa";
}elseif ($hari=="Wednesday") {
  echo "Rabu";
}elseif ($hari=="Thursday") {
  echo("Kamis");
}elseif ($hari=="Friday") {
  echo "Jum'at";
}elseif ($hari=="Saturday") {
  echo "Sabtu";
}
?>,
<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
  echo " Januari ";
}elseif ($bulan=="February") {
  echo " Februari ";
}elseif ($bulan=="March") {
  echo " Maret ";
}elseif ($bulan=="April") {
  echo " April ";
}elseif ($bulan=="May") {
  echo " Mei ";
}elseif ($bulan=="June") {
  echo " Juni ";
}elseif ($bulan=="July") {
  echo " Juli ";
}elseif ($bulan=="August") {
  echo " Agustus ";
}elseif ($bulan=="September") {
  echo " September ";
}elseif ($bulan=="October") {
  echo " Oktober ";
}elseif ($bulan=="November") {
  echo " November ";
}elseif ($bulan=="December") {
  echo " Desember ";
}
$tahun=date('Y');
echo $tahun;
?>
</center></p>
            </div>
          </div>
           <div class="container-fluid">
          <!-- OVERVIEW -->
          <div class="panel panel-headline">
            <div class="panel-body">
              <?php echo $contents ?>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- END MAIN -->
      <div class="clearfix"></div>
      <footer>
        <div class="container-fluid">
          <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com/" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
        </div>
      </footer>
    </div>
    <!-- END WRAPPER -->
    <!-- Javascript -->
    <script src="<?= base_url() ?>admin/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>admin/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>admin/assets/vendor/pace/pace.min.js"></script>
    <script src="<?= base_url() ?>admin/assets/scripts/klorofilpro-common.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>admin/assets/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url();?>admin/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="<?= base_url() ?>admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> <!-- untuk sweet alret -->
    <script src="<?php echo base_url();?>admin/assets/js/dataflash.js"></script>
    <script src="<?= base_url() ?>admin/assets/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>admin/assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?= base_url() ?>admin/assets/vendor/dropify/js/dropify.min.js"></script>
    <script src="<?= base_url() ?>assets/js/signature.js"></script>
    <script>
      $(document).ready(function() {
        $('#table1').DataTable()
        $('#table2').DataTable()
        $('#table3').DataTable()
        $('[data-toggle="popover"]').popover();

        $('#sp_keahlian').multiselect(
        {
          maxHeight: 300
        });
        $('.dropify').dropify();

        $("#kdganti").click(function () {
          if ($("#kdganti").is(":checked")) {
              $("#karyawan_out")
                  .css("display","unset")
                  .val('Nama Karyawan yang keluar? (gunakan separator koma jika lebih dari satu) ');
          }
          else {
              $("#karyawan_out")
                  .css("display","none")
                  .val('Tidak Ada');
          }
        });

        $('#exporttoworddetailpengajuanbtn').on('click', function(){
          var id_form = $('#id_formnyasatu').val();
          Swal.fire({
            title: '' + id_form + ' Berhasil di Export',
            text :'Unduhan jalan pada tab browser baru.',
            icon :'success',
            showCancelButton: false,
            showConfirmButton: true
          });
        });

        $('#declinedbtn').on('click', function(){
          (async () => {
            const { value: text } = await Swal.fire(
            {
                title: 'Yakin ingin tolak pengajuan?',
                text: "Masukan alasannya",
                input: 'textarea',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#F9354C',
                cancelButtonColor: '#41B314',
                confirmButtonText: 'Submit'
            })
            if(text) {
              var id_form = $('#id_formnya').val();
              var status_pengajuan = "Ditolak";
              $.ajax({
                  type : "POST",
                  url  : "<?php echo base_url('/pengajuan_karyawan/declined')?>",
                  dataType : "JSON",
                  data : {id_form:id_form,status_pengajuan:status_pengajuan,keterangan:text},
                  success: function(data){
                  }
              });
              Swal.fire(
                '' + id_form + ' Ditolak',
                'Departemen terkait akan menerima informasi penolakan yang diberikan.',
                'success').then(function() {
                  window.location.reload(true);// <--- submit for prmogrammatically
                });
            } else {
              Swal.fire({
                icon: 'error',
                text: "Text kosong, tindakan dibatalkan"
              });
            }
          })()
        });
      })
    </script>
  </body>
</html>


  