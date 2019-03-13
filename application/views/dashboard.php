<?php 
if(isset($_SESSION['id_login'])) {
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title><?=$title;?></title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="<?=base_url();?>css/templatemo_main.css">
  <!-- FONT AWESOME ICONS  -->
  <link href=<?php echo base_url('assets/css/font-awesome.css')?> rel="stylesheet" />
  <!-- CUSTOM STYLE  -->
  <link href=<?php echo base_url('assets/css/style.css')?> rel="stylesheet" />
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
  <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1><b>Dashboard - Admin</b></h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li>
            <li class="active"><a href="<?=base_url();?>utama/beranda"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-database"></i> Master Data <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="<?=base_url();?>barang">Barang</a></li>
              <li><a href="<?=base_url();?>supplier">Supplier</a></li>
              <li><a href="<?=base_url();?>konsumen">Konsumen</a></li>
             
            </ul>
          </li>
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-refresh"></i> Proses Data <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="<?=base_url();?>barang_masuk">Barang Masuk</a></li>
              <li><a href="<?=base_url();?>barang_out">Barang Keluar</a></li>
              <li><a href="<?=base_url();?>barang_return">Barang Return</a></li>
              
            </ul>
          </li>
          
          <li class="sub open">
            <a href="javascript:;">
              <i class="fa fa-bar-chart-o"></i> Laporan <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="<?=base_url();?>daftarlist_barang">Laporan Data Barang</a></li>
              <li><a href="<?=base_url();?>daftarlist_barangout">Laporan Data Barang Keluar</a></li>
              <li><a href="<?=base_url();?>daftarlist_barangmasuk">Laporan Data Barang Masuk</a></li>
              <li><a href="<?=base_url();?>daftarlist_barangreturn">Laporan Data Barang Return</a></li>
           
              
            </ul>
          </li>
          <li><a href="<?=base_url();?>utama/logout"><i class="fa fa-sign-out"></i>Keluar</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <?php
          $this->load->view($main); 
          ?>
        </div>  
      </div>
      <footer class="templatemo-footer">
        <div class="templatemo-copyright">
          <p>Copyright &copy; 2019 Nando Oktoviandi</p>
        </div>
      </footer>
    </div>

    <script src="<?=base_url();?>js/jquery.min.js"></script>
    <script src="<?=base_url();?>js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>js/Chart.min.js"></script>
    <script src="<?=base_url();?>js/templatemo_script.js"></script>
    <script type="text/javascript">
    // Line chart
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
      {
        label: "My First dataset",
        fillColor : "rgba(220,220,220,0.2)",
        strokeColor : "rgba(220,220,220,1)",
        pointColor : "rgba(220,220,220,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(220,220,220,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      },
      {
        label: "My Second dataset",
        fillColor : "rgba(151,187,205,0.2)",
        strokeColor : "rgba(151,187,205,1)",
        pointColor : "rgba(151,187,205,1)",
        pointStrokeColor : "#fff",
        pointHighlightFill : "#fff",
        pointHighlightStroke : "rgba(151,187,205,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      }
      ]

    }

    window.onload = function(){
      var ctx_line = document.getElementById("templatemo-line-chart").getContext("2d");
      window.myLine = new Chart(ctx_line).Line(lineChartData, {
        responsive: true
      });
    };

    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
      var btn = $(this);
      btn.button('loading');
      // $.ajax(...).always(function () {
      //   btn.button('reset');
      // });
  });
  </script>
</body>
</html>
<?php 
}else {
  redirect('utama');
}
?>