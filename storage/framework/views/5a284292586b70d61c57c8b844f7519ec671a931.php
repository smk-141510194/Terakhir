<!DOCTYPE html>
<html lang="en">
<head>
<title>UJIKOM</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title=""  data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        
      </ul>
    </li>
    
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div>
   <ul class="nav navbar-nav side-nav">
   <li><a href="login"><i class="icon-key"></i> Log Out</a></li>
                    <li>
                        <a href="Jabatan"> Jabatan</a>
                    </li>
                    <li>
                        <a href="Golongan"> Golongan</a>
                    </li>
                    <li>
                        <a href="Pegawai"> Pegawai</a>
                    </li>
                    <li>
                        <a href="Kategori_Lembur"> Kategori Lembur</a>
                    </li>
                    <li>
                        <a href="Lembur_Pegawai"> Lembur Pegawai</a>
                    </li>
                    <li>
                        <a href="Tunjangan"> Tunjangan</a>
                    </li>
                    <li>
                        <a href="Tunjangan_Pegawai"> Tunjangan Pegawai</a>
                    </li>
                    <li>
                        <a href="Penggajian"> Penggajian</a>
                    </li>
                    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <?php echo $__env->yieldContent('content'); ?>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
 <center> <div id="footer" class="span12"> UJIKOM SMK ASSALAAM  by <a href="https://www.facebook.com/epidmahpudin">Epid Mahpudin</a> </div></center>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
