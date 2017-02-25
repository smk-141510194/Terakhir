<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UJIKOM</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home">Penggajian</a>
            
            <!-- Top Menu Items -->
           

                    <!-- Branding Image -->
                   
                    
                    
                

                



                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>"><!-- Login --></a></li>
                             <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>


                                        </form>

                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                    </div>
                    </nav>
                    </div>
                </div>
            </div>
        </nav>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="Jabatan"><i class="fa fa-fw fa-dashboard"></i> Jabatan</a>
                    </li>
                    <li class="active">
                        <a href="Golongan"><i class="fa fa-fw fa-dashboard"></i> Golongan</a>
                    </li>
                    <li class="active">
                        <a href="Kategori_Lembur"><i class="fa fa-fw fa-dashboard"></i> Kategori Lembur</a>
                    </li>
                    <li class="active">
                        <a href="Pegawai"><i class="fa fa-fw fa-dashboard"></i> Pegawai</a>
                    </li>
                    <li class="active">
                        <a href="Lembur_Pegawai"><i class="fa fa-fw fa-dashboard"></i> Lembur Pegawai</a>
                    </li>
                    <li class="active">
                        <a href="Tunjangan"><i class="fa fa-fw fa-dashboard"></i> Tunjangan</a>
                    </li>
                    <li class="active">
                        <a href="Tunjangan_Pegawai"><i class="fa fa-fw fa-dashboard"></i> Tunjangan Pegawai</a>
                    </li>
                    </ul>
                    </div>

                    

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
