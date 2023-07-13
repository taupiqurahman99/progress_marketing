 <!DOCTYPE html>
 <html lang="indonesia" class="notranslate">
 <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="google" content="notranslate">
    <title>Dashboard - Progress Akses Gate</title>
  
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.23/sweetalert2.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.23/sweetalert2.css" integrity="sha512-gAU9FxrcktP/m5fRrn5P4FmIutdMP/kpVKsPerqffFy9gKQkR4cxrcrK3PtgTAgFiiN7b5+fwRbpCcO1F5cPew==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="jam.js"></script>

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</head>


<body class="sb-nav-fixed">
   <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="<?php echo base_url();?>Admin"><img src="<?php echo base_url();?>logo.png" width="80%"></a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars fa-2x " style="color: #1c66a5
    "></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
          <b><marquee scrolldelay=”300″ style="color: red;">Progress Akses Gate </marquee></b>

      </div>
  </form>
  <!-- Navbar-->
  <ul class="ms-auto ms-md-0  me-lg-4">
  &nbsp;<h3 id="jam" style="color: #fff;"> <i style="color: #fff;" class="far fa-clock"></i></h3>
</ul>
</nav>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>assets/assets/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url();?>assets/assets/demo/chart-bar-demo.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
    window.onload = function() { jam(); }
    
    function jam() {
       var e = document.getElementById('jam'),
       d = new Date(), h, m, s;
       h = d.getHours();
       m = set(d.getMinutes());
       s = set(d.getSeconds());
       
       e.innerHTML = h +':'+ m +':'+ s;
       
       setTimeout('jam()', 1000);
   }
   
   function set(e) {
       e = e < 10 ? '0'+ e : e;
       return e;
   }
</script>
