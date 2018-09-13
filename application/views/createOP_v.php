<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- <link href="<?php echo base_url()?>assets/multiple-select/multiple-select.css" rel="stylesheet" > -->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Welcome Back, <?php echo $this->session->userdata('ses_nama');?>! As <?php echo $this->session->userdata('akses');?></a>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                   <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url().'index.php/pagecontrol/dashboard' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard Delivery</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/pagecontrol/dashboard2' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard Back From Dest</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/pagecontrol/dashOP' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard OP</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/pagecontrol/dashAR' ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard AR</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Acount Payable<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'index.php/pagecontrol/dashAP' ?>">Dashboard Delivery</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'index.php/pagecontrol/dashAP2' ?>">Dashboard Back From Destination Town</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Trucking<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url().'index.php/pagecontrol/DashTruck' ?>">Dashboard Delivery</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url().'index.php/pagecontrol/dashTruck2' ?>">Dashboard Back From Destination Town</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'index.php/pagecontrol/dashPajak' ?>"><i class="glyphicon glyphicon-pencil  "></i> Input No. Faktur</a>
                        </li>
                        <li>

                            <a href="<?php echo base_url().'index.php/pagecontrol/logout' ?>""><i class="fa fa-sign-out fa-fw"></i> Sign Out</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header"><center>OPERASIONAL FORM</center></h1>
                <div  style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/dashOP"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left  "></i>  BACK</button></a>
                </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-offset-2">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="<?php echo base_url()."index.php/pagecontrol/insertOP"; ?>">
                                   		 <div class="form-group">
                                            <label>Instruction Memorium Order (IMO)</label>
                                            <input type="text" class="form-control" placeholder="Enter IMO" name="IMO" required>
                                            <p class="help-block"> dd-mm-(urutan container) Example : 28-04-015 </p>
                                        </div>
                                        <div class="form-group">
                                            <label>No. Container</label>
                                            <!-- <select id="demo3" name="demo3[]" multiple="multiple" style="width:300px"> -->
                                            <select id="Multi" multiple="multiple" class="form-control" required name="no_container">
                                            	<!-- <option>--Choose No Container--</option> -->
<option value="TBSU 1002421 20">TBSU 1002421 20</option>
<option>TBSU 1002735 20</option>
<option>TBSU 1002843 20</option>
<option>TBSU 1003014 20</option>
<option>TBSU 1006369 20</option>
<option>TBSU 1008672 20</option>
<option>TBSU 1012335 20</option>
<option>TBSU 1012696 20</option>
<option>TBSU 1018423 20</option>
<option>TBSU 1018640 20</option>
<option>TBSU 1018721 20</option>
<option>TBSU 1018887 20</option>
<option>TBSU 1024555 20</option>
<option>TBSU 1033217 20</option>
<option>TBSU 1033243 20</option>
<option>TBSU 1033876 20</option>
<option>TBSU 1033881 20</option>
<option>TBSU 1034678 20</option>
<option>TBSU 1035307 20</option>
<option>TBSU 1035457 20</option>
<option>TBSU 1037043 20</option>
<option>TBSU 1037233 20</option>
<option>TBSU 1037362 20</option>
<option>TBSU 1037470 20</option>
<option>TBSU 1038093 20</option>
<option>TBSU 1038414 20</option>
<option>TBSU 1038419 20</option>
<option>TBSU 1038482 20</option>
<option>TBSU 1038693 20</option>
<option>TBSU 1038923 20</option>
<option>TBSU 1039107 20</option>
<option>TBSU 1041906 20</option>
<option>TBSU 1043133 20</option>
<option>TBSU 1043940 20</option>
<option>TBSU 1045481 20</option>
<option>TBSU 1048201 20</option>
<option>TBSU 1050984 20</option>
<option>TBSU 1051695 20</option>
<option>TBSU 1051843 20</option>
<option>TBSU 1052496 20</option>
<option>TBSU 1052602 20</option>
<option>TBSU 1052620 20</option>
<option>TBSU 1052726 20</option>
<option>TBSU 1052802 20</option>
<option>TBSU 1053105 20</option>
<option>TBSU 1053255 20</option>
<option>TBSU 1053510 20</option>
<option>TBSU 1053569 20</option>
<option>TBSU 1054631 20</option>
<option>TBSU 1054884 20</option>
<option>TBSU 1055094 20</option>
<option>TBSU 1055279 20</option>
<option>TBSU 1055704 20</option>
<option>TBSU 1055920 20</option>
<option>TBSU 1055941 20</option>
<option>TBSU 1056315 20</option>
<option>TBSU 1056510 20</option>
<option>TBSU 1057158 20</option>
<option>TBSU 1057380 20</option>
<option>TBSU 1058004 20</option>
<option>TBSU 1058257 20</option>
<!-- <option></option>TBSU 1058811 20
<option></option>TBSU 1059382 20
<option></option>TBSU 1060151 20
<option></option>TBSU 1061883 20
<option></option>TBSU 1070993 20
<option></option>TBSU 1073204 20
<option></option>TBSU 1073396 20
<option></option>TBSU 1073457 20
<option></option>TBSU 1938057 20
<option></option>TBSU 1971693 20
<option></option>TBSU 2005637 20
<option></option>TBSU 2005935 20
<option></option>TBSU 2007331 20
<option></option>TBSU 2007769 20
<option></option>TBSU 2007774 20
<option></option>TBSU 2012002 20
<option></option>TBSU 2041511 20
<option></option>TBSU 2041611 20
<option></option>TBSU 2070428 20
<option></option>TBSU 2160377 20
<option></option>TBSU 2160485 20
<option></option>TBSU 2214516 20
<option></option>TBSU 2295307 20
<option></option>TBSU 2594791 20
<option></option>TBSU 2605161 20
<option></option>TBSU 2610112 20
<option></option>TBSU 2637746 20
<option></option>TBSU 2641089 20
<option></option>TBSU 2671740 20
<option></option>TBSU 2674436 20
<option></option>TBSU 2676130 20
<option></option>TBSU 2700428 20
<option></option>TBSU 2701276 20
<option></option>TBSU 2701677 20
<option></option>TBSU 2701757 20
<option></option>TBSU 2701996 20
<option></option>TBSU 2703089 20
<option></option>TBSU 2703504 20
<option></option>TBSU 2704276 20
<option></option>TBSU 2704378 20
<option></option>TBSU 2704870 20
<option></option>TBSU 2704871 20
<option></option>TBSU 2705626 20
<option></option>TBSU 2707858 20
<option></option>TBSU 2709341 20
<option></option>TBSU 2709526 20
<option></option>TBSU 2763867 20
<option></option>TBSU 2854318 20
<option></option>TBSU 2869050 20
<option></option>TBSU 2939333 20
<option></option>TBSU 2944900 20
<option></option>TBSU 2944962 20
<option></option>TBSU 2945526 20
<option></option>TBSU 2946158 20
<option></option>TBSU 2946332 20
<option></option>TBSU 2947196 20
<option></option>TBSU 2950559 20
<option></option>TBSU 2953331 20
<option></option>TBSU 2954791 20
<option></option>TBSU 2955526 20
<option></option>TBSU 3119340 20
<option></option>TBSU 3119843 20
<option></option>TBSU 3119859 20
<option></option>TBSU 3124080 20
<option></option>TBSU 3124135 20
<option></option>TBSU 3125770 20
<option></option>TBSU 3126349 20
<option></option>TBSU 3126760 20
<option></option>TBSU 3127047 20
<option></option>TBSU 3127303 20
<option></option>TBSU 3127319 20
<option></option>TBSU 3127366 20
<option></option>TBSU 3127474 20
<option></option>TBSU 3130668 20
<option></option>TBSU 3130673 20
<option></option>TBSU 3131356 20
<option></option>TBSU 3132167 20
<option></option>TBSU 3132819 20
<option></option>TBSU 3133585 20
<option></option>TBSU 3145586 20
<option></option>TBSU 3152517 20
<option></option>TBSU 3153088 20
<option></option>TBSU 3158109 20
<option></option>TBSU 3158541 20
<option></option>TBSU 3158599 20
<option></option>TBSU 3160256 20
<option></option>TBSU 3160317 20
<option></option>TBSU 3160718 20
<option></option>TBSU 3160847 20
<option></option>TBSU 3161150 20
<option></option>TBSU 3161273 20
<option></option>TBSU 3161340 20
<option></option>TBSU 3161714 20
<option></option>TBSU 3162259 20
<option></option>TBSU 3162536 20
<option></option>TBSU 3162768 20
<option></option>TBSU 3162876 20
<option></option>TBSU 3162979 20
<option></option>TBSU 3163213 20
<option></option>TBSU 3163215 20
<option></option>TBSU 3163240 20
<option></option>TBSU 3163743 20
<option></option>TBSU 3163907 20
<option></option>TBSU 3163954 20
<option></option>TBSU 3164143 20
<option></option>TBSU 3164159 20
<option></option>TBSU 3164230 20
<option></option>TBSU 3164544 20
<option></option>TBSU 3164740 20
<option></option>TBSU 3164950 20
<option></option>TBSU 3165010 20
<option></option>TBSU 3165140 20
<option></option>TBSU 3165279 20
<option></option>TBSU 3165350 20
<option></option>TBSU 3172175 20
<option></option>TBSU 3172180 20
<option></option>TBSU 3172410 20
<option></option>TBSU 3172642 20
<option></option>TBSU 3172787 20
<option></option>TBSU 3826077 20
<option></option>TBSU 3826647 20
<option></option>TBSU 3826689 20
<option></option>TBSU 3828444 20
<option></option>TBSU 3833815 20
<option></option>TBSU 5001475 20
<option></option>TBSU 5030583 20
<option></option>TBSU 5156907 20
<option></option>TBSU 5201230 20
<option></option>TBSU 5202359 20
<option></option>TBSU 5204520 20
<option></option>TBSU 5206400 20
<option></option>TBSU 5206800 20
<option></option>TBSU 5207710 20
<option></option>TBSU 5207978 20
<option></option>TBSU 5208030 20
<option></option>TBSU 5213063 20
<option></option>TBSU 5226579 20
<option></option>TBSU 5264447 20
<option></option>TBSU 5305978 20
<option></option>TBSU 5510984 20
<option></option>TBSU 5518546 20
<option></option>TBSU 5552290 20
<option></option>TBSU 5646773 20
<option></option>TBSU 5650032 20
<option></option>TBSU 5664519 20
<option></option>TBSU 5665074 20
<option></option>TBSU 5676113 20
<option></option>TBSU 5676129 20
<option></option>TBSU 5676880 20
<option></option>TBSU 5676936 20
<option></option>TBSU 5682303 20
<option></option>TBSU 5686770 20
<option></option>TBSU 5689055 20
<option></option>TBSU 5689471 20
<option></option>TBSU 5718918 20
<option></option>TBSU 5723058 20
<option></option>TBSU 5725019 20
<option></option>TBSU 5727958 20
<option></option>TBSU 5750818 20
<option></option>TBSU 5751096 20
<option></option>TBSU 5752045 20
<option></option>TBSU 5752472 20
<option></option>TBSU 5760185 20
<option></option>TBSU 5776569 20
<option></option>TBSU 5776596 20
<option></option>TBSU 5777683 20
<option></option>TBSU 5777693 20
<option></option>TBSU 5778750 20
<option></option>TBSU 5779249 20
<option></option>TBSU 5779260 20
<option></option>TBSU 5779340 20
<option></option>TBSU 5779357 20
<option></option>TBSU 5779383 20
<option></option>TBSU 5796179 20
<option></option>TBSU 5796207 20
<option></option>TBSU 5798004 20
<option></option>TBSU 5798489 20
<option></option>TBSU 5804465 20
<option></option>TBSU 5804853 20
<option></option>TBSU 5829360 20
<option></option>TBSU 5940540 20
<option></option>TBSU 5952204 20
<option></option>TBSU 5956650 20
<option></option>TBSU 5962394 20
<option></option>TBSU 6002859 20
<option></option>TBSU 6003859 20
<option></option>TBSU 6005075 20
<option></option>TBSU 6005300 20
<option></option>TBSU 6019367 20
<option></option>TBSU 6021929 20
<option></option>TBSU 6022714 20
<option></option>TBSU 6023330 20
<option></option>TBSU 6034633 20
<option></option>TBSU 6038290 20
<option></option>TBSU 6049910 20
<option></option>TBSU 6050043 20
<option></option>TBSU 6051008 20
<option></option>TBSU 6051498 20
<option></option>TBSU 6051610 20
<option></option>TBSU 6052447 20
<option></option>TBSU 6052730 20
<option></option>TBSU 6053654 20
<option></option>TBSU 6072633 20
<option></option>TBSU 6072905 20
<option></option>TBSU 6074106 20
<option></option>TBSU 6074343 20
<option></option>TBSU 6200781 20
<option></option>TBSU 6200816 20
<option></option>TBSU 6201577 20
<option></option>TBSU 6201638 20
<option></option>TBSU 6201730 20
<option></option>TBSU 6201770 20
<option></option>TBSU 6201812 20
<option></option>TBSU 6201880 20
<option></option>TBSU 6202070 20
<option></option>TBSU 6202486 20
<option></option>TBSU 6202613 20
<option></option>TBSU 6203008 20
<option></option>TBSU 6203163 20
<option></option>TBSU 6203918 20
<option></option>TBSU 6203986 20
<option></option>TBSU 6206268 20
<option></option>TBSU 6206326 20
<option></option>TBSU 6218348 20
<option></option>TBSU 6219128 20
<option></option>TBSU 6219348 20
<option></option>TBSU 6219534 20
<option></option>TBSU 6255070 20
<option></option>TBSU 6259178 20
<option></option>TBSU 6457893 20
<option></option>TBSU 6459730 20
<option></option>TBSU 6470982 20
<option></option>TBSU 6471238 20
<option></option>TBSU 6472178 20
<option></option>TBSU 6480682 20
<option></option>TBSU 6480743 20
<option></option>TBSU 6581472 20
<option></option>TBSU 6602610 20
<option></option>TBSU 6603600 20
<option></option>TBSU 6603787 20
<option></option>TBSU 6603914 20
<option></option>TBSU 6604040 20
<option></option>TBSU 6604090 20
<option></option>TBSU 6604145 20
<option></option>TBSU 6604417 20
<option></option>TBSU 6604504 20
<option></option>TBSU 6604802 20
<option></option>TBSU 6605075 20
<option></option>TBSU 6605100 20
<option></option>TBSU 6660030 20
<option></option>TBSU 6674369 20
<option></option>TBSU 6674712 20
<option></option>TBSU 6675350 20
<option></option>TBSU 6677970 20
<option></option>TBSU 6804853 20
<option></option>TBSU 6955499 20
<option></option>TBSU 6957110 20
<option></option>TBSU 6971238 20
<option></option>TBSU 6975444 20
<option></option>TBSU 6979274 20
<option></option>TBSU 6983305 20
<option></option>TBSU 7200207 20
<option></option>TBSU 7203504 20
<option></option>TBSU 7204619 20
<option></option>TBSU 7205852 20
<option></option>TBSU 7206268 20
<option></option>TBSU 7206822 20
<option></option>TBSU 7207449 20
<option></option>TBSU 7332156 20
<option></option>TBSU 7332652 20
<option></option>TBSU 7338652 20
<option></option>TBSU 7341630 20
<option></option>TBSU 7400530 20
<option></option>TBSU 7400588 20
<option></option>TBSU 7401250 20
<option></option>TBSU 7401590 20
<option></option>TBSU 7401619 20
<option></option>TBSU 7401882 20
<option></option>TBSU 7401901 20
<option></option>TBSU 7402451 20
<option></option>TBSU 7402580 20
<option></option>TBSU 7402657 20
<option></option>TBSU 7402770 20
<option></option>TBSU 7402826 20
<option></option>TBSU 7403634 20
<option></option>TBSU 7440889 20
<option></option>TBSU 7440940 20
<option></option>TBSU 7490233 20
<option></option>TBSU 7500162 20
<option></option>TBSU 7500917 20
<option></option>TBSU 7540740 20
<option></option>TBSU 7617396 20
<option></option>TBSU 7617415 20
<option></option>TBSU 7618160 20
<option></option>TBSU 7618427 20
<option></option>TBSU 7619465 20
<option></option>TBSU 7619658 20
<option></option>TBSU 7619895 20
<option></option>TBSU 7620959 20
<option></option>TBSU 7620970 20
<option></option>TBSU 7621098 20
<option></option>TBSU 7621260 20
<option></option>TBSU 7621528 20
<option></option>TBSU 7900209 20
<option></option>TBSU 7905453 20
<option></option>TBSU 7905812 20
<option></option>TBSU 7980499 20
<option></option>TBSU 8028360 20
<option></option>TBSU 8351200 20
<option>TBSU 8470174 20</option>
<option>TBSU 8475237 20</option>
<option></option>TBSU 8513819 20
<option></option>TBSU 8524141 20
<option></option>TBSU 8709865 20
<option></option>TBSU 8716010 20
<option></option>TBSU 8720335 20
<option></option>TBSU 8721460 20
<option></option>TBSU 8721619 20
<option></option>TBSU 8721943 20
<option></option>TBSU 8722148 20
<option></option>TBSU 8825589 20
<option></option>TBSU 8828536 20
<option></option>TBSU 8880001 20
<option></option>TBSU 8880002 20
<option></option>TBSU 9084012 20
<option></option>TBSU 9084619 20
<option></option>TBSU 9084814 20
<option></option>TBSU 9084877 20
<option></option>TBSU 9085282 20
<option></option>TBSU 9086186 20
<option></option>TBSU 9086910 20
<option></option>TBSU 9087310 20
<option></option>TBSU 9087808 20
<option></option>TBSU 9087881 20
<option></option>TBSU 9199990 20
<option></option>TBSU 9297110 20
<option></option>TBSU 0002361 20
<option></option>TBSU 0004024 20
<option></option>TBSU 0005165 20
<option></option>TBSU 0050858 20
<option></option>TBSU 0102463 20
<option></option>TBSU 0106900 20
<option></option>TBSU 0620020 20
<option></option>TBSU 0620842 20
<option></option>TBSU 0621495 20
<option></option>TBSU 0750862 20
<option></option>TBSU 0880001 20
<option></option>TBSU 1107817 40
<option></option>TBSU 1108074 40
<option></option>TBSU 1108201 40
<option></option>TBSU 1108270 40
<option></option>TBSU 1108789 40
<option></option>TBSU 1108829 40
<option></option>TBSU 1109281 40
<option></option>TBSU 1379775 40
<option></option>TBSU 1379780 40
<option></option>TBSU 1379857 40
<option></option>TBSU 1379862 40
<option></option>TBSU 1476859 40
<option></option>TBSU 1763806 40
<option></option>TBSU 1807400 40
<option></option>TBSU 1824326 40
<option></option>TBSU 1825457 40
<option></option>TBSU 1825467 40
<option></option>TBSU 1829101 40
<option></option>TBSU 1847419 40
<option></option>TBSU 1848349 40
<option></option>TBSU 1848462 40
<option></option>TBSU 1848673 40
<option></option>TBSU 1849330 40
<option></option>TBSU 1849920 40
<option></option>TBSU 1850665 40
<option></option>TBSU 1955096 40
<option></option>TBSU 1976859 40
<option></option>TBSU 1983708 40
<option></option>TBSU 2346995 40
<option></option>TBSU 3341731 40
<option></option>TBSU 5020829 40
<option></option>TBSU 5022436 40
<option></option>TBSU 5022483 40
<option></option>TBSU 5022781 40
<option></option>TBSU 5023047 40
<option></option>TBSU 5023052 40
<option></option>TBSU 5025245 40
<option></option>TBSU 5025522 40
<option></option>TBSU 5026299 40
<option></option>TBSU 5026827 40
<option></option>TBSU 5027799 40
<option></option>TBSU 5028368 40
<option></option>TBSU 5028814 40
<option></option>TBSU 5028840 40
<option></option>TBSU 5030182 40
<option></option>TBSU 5047100 40
<option></option>TBSU 5050870 40
<option></option>TBSU 5058130 40
<option></option>TBSU 5060143 40
<option></option>TBSU 5153695 40
<option></option>TBSU 5184323 40
<option></option>TBSU 5208814 40
<option></option>TBSU 5209325 40
<option></option>TBSU 5209876 40
<option></option>TBSU 5210352 40
<option></option>TBSU 5213860 40
<option></option>TBSU 5214390 40
<option></option>TBSU 5214960 40
<option></option>TBSU 5228304 40
<option></option>TBSU 5229506 40
<option></option>TBSU 5229949 40
<option></option>TBSU 5236850 40
<option></option>TBSU 5237230 40
<option></option>TBSU 5278847 40
<option></option>TBSU 5278908 40
<option></option>TBSU 5279756 40
<option></option>TBSU 5281199 40
<option></option>TBSU 5281239 40
<option></option>TBSU 5281706 40
<option></option>TBSU 5282180 40
<option></option>TBSU 5283273 40
<option></option>TBSU 5283606 40
<option></option>TBSU 5284264 40
<option></option>TBSU 5285260 40
<option></option>TBSU 5287221 40
<option></option>TBSU 5288125 40
<option></option>TBSU 5288465 40
<option></option>TBSU 5290478 40
<option></option>TBSU 5294180 40
<option></option>TBSU 5297549 40
<option></option>TBSU 5302521 40
<option></option>TBSU 5304294 40
<option></option>TBSU 5304777 40
<option></option>TBSU 5308469 40
<option></option>TBSU 5308978 40
<option></option>TBSU 5309830 40
<option></option>TBSU 5311375 40
<option></option>TBSU 5315690 40
<option></option>TBSU 5441401 40
<option></option>TBSU 5517328 40
<option></option>TBSU 5557579 40
<option></option>TBSU 5562301 40
<option></option>TBSU 5565105 40
<option></option>TBSU 5750417 40
<option></option>TBSU 5751239 40
<option></option>TBSU 5751310 40
<option></option>TBSU 5911090 40
<option></option>TBSU 5930255 40
<option></option>TBSU 5968520 40
<option></option>TBSU 5969280 40
<option></option>TBSU 5972446 40
<option></option>TBSU 5975874 40
<option></option>TBSU 5976145 40
<option></option>TBSU 6002404 40
<option></option>TBSU 6042217 40
<option></option>TBSU 6045690 40
<option></option>TBSU 6046505 40
<option></option>TBSU 6050932 40
<option></option>TBSU 6051522 40
<option></option>TBSU 6052112 40
<option></option>TBSU 6052339 40
<option></option>TBSU 6053470 40
<option></option>TBSU 6055702 40
<option></option>TBSU 6055761 40
<option></option>TBSU 6056761 40
<option></option>TBSU 6080995 40
<option></option>TBSU 6139107 40
<option></option>TBSU 6170152 40
<option></option>TBSU 6211661 40
<option></option>TBSU 6211881 40
<option></option>TBSU 6244268 40
<option></option>TBSU 6251101 40
<option></option>TBSU 6495461 40
<option></option>TBSU 6579665 40
<option></option>TBSU 6660083 40
<option></option>TBSU 6663966 40
<option></option>TBSU 6664577 40 -->
<option>TBSU 6667004 40</option>
<option>BSU 6701027 40</option>T
<option>TBSU 6712211 40</option>
<option>TBSU 6713692 40</option>
<option>TBSU 6716177 40</option>
<option>TBSU 6940704 40</option>
<option>TBSU 6944480 40</option>
<option>TBSU 6944731 40</option>
<option>TBSU 6945384 40</option>
<option>TBSU 6945698 40</option>
<!-- <option></option>TBSU 6948836 40
<option></option>TBSU 6966062 40
<option></option>TBSU 6973375 40
<option></option>TBSU 6995461 40
<option></option>TBSU 7013797 40
<option></option>TBSU 7017133 40
<option></option>TBSU 7019291 40
<option></option>TBSU 7019943 40
<option></option>TBSU 7029509 40
<option></option>TBSU 7923971 40
<option></option>TBSU 8108789 40
<option></option>TBSU 8150015 40
<option></option>TBSU 8150611 40
<option></option>TBSU 8151578 40
<option></option>TBSU 8152580 40
<option></option>TBSU 8152656 40
<option></option>TBSU 8239210 40
<option></option>TBSU 8241310 40
<option></option>TBSU 8260033 40
<option></option>TBSU 8282990 40
<option></option>TBSU 8296252 40
<option></option>TBSU 8296268 40
<option></option>TBSU 8329171 40
<option></option>TBSU 8332529 40
<option></option>TBSU 8332880 40
<option></option>TBSU 8335282 40
<option></option>TBSU 8335283 40
<option></option>TBSU 8337011 40
<option></option>TBSU 8337285 40
<option></option>TBSU 8337985 40
<option></option>TBSU 8338770 40
<option></option>TBSU 8338933 40
<option></option>TBSU 8341731 40
<option></option>TBSU 8341984 40
<option></option>TBSU 8342044 40
<option></option>TBSU 8342105 40
<option></option>TBSU 8342790 40
<option></option>TBSU 8350060 40
<option></option>TBSU 8352103 40
<option></option>TBSU 8352417 40
<option></option>TBSU 8352525 40
<option></option>TBSU 8352717 40
<option></option>TBSU 8352755 40
<option></option>TBSU 8354261 40
<option></option>TBSU 8355864 40
<option></option>TBSU 8356109 40
<option></option>TBSU 8358966 40
<option></option>TBSU 8362755 40
<option></option>TBSU 8364995 40
<option></option>TBSU 8378094 40
<option></option>TBSU 8394995 40
<option></option>TBSU 8435933 40
<option></option>TBSU 8435949 40
<option></option>TBSU 8436204 40
<option></option>TBSU 8436288 40
<option></option>TBSU 8436565 40
<option></option>TBSU 8436858 40
<option></option>TBSU 8436950 40
<option></option>TBSU 8437535 40
<option></option>TBSU 8437670 40
<option></option>TBSU 8504756 40
<option></option>TBSU 8508900 40
<option></option>TBSU 8644281 40
<option></option>TBSU 8801333 40
<option></option>TBSU 8803022 40
<option></option>TBSU 8807136 40
<option></option>TBSU 8807603 40
<option></option>TBSU 8807795 40
<option></option>TBSU 8815527 40
<option></option>TBSU 8815548 40
<option></option>TBSU 8816800 40
<option></option>TBSU 8816966 40
<option></option>TBSU 8822629 40
<option></option>TBSU 8825459 40
<option></option>TBSU 8828817 40
<option></option>TBSU 8839004 40
<option></option>TBSU 8839792 40
<option></option>TBSU 8839880 40
<option></option>TBSU 8840010 40
<option></option>TBSU 8840047 40
<option></option>TBSU 8840303 40
<option></option>TBSU 8853229 40
<option></option>TBSU 9200679 40
<option></option>TBSU 9220917 40
<option></option>TBSU 9220919 40
<option></option>TBSU 9945384 40
<option></option>TBSU 0205179 40
<option></option>TBSU 0205306 40
<option></option>TBSU 0404191 40
<option></option>TBSU 0500385 40 -->
                                            </select>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>No. Shipment</label>
                                            <input type="text" class="form-control" placeholder="Enter No. Shipment" name="no_shipment">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>No. Seal</label>
                                            <input type="text" class="form-control" placeholder="Enter No. Seal" name="no_seal" >
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Stuffing Date</label>
                                            <input type="Date" class="form-control" placeholder="Enter Stuffing Date" name="stuff_date" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Payment</label>
                                            <input type="text" class="form-control" placeholder="Enter Payment" name="payment" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Delivery Date (ETD)</label>
                                            <input type="Date" class="form-control" placeholder="Enter Delivery Date" name="deliv_date" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Destination Town</label>
                                            <input class="form-control" placeholder="Enter Destination Town" name="dest_town" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Vessel Name</label>
                                            <input class="form-control" placeholder="Enter Vessel Name" name="vessel_name" required>
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Arrive At Destination (ETA)</label>
                                            <input class="form-control" placeholder="Enter Arrive At Destination" name="arv_at_dest">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Unload At Conc</label>
                                            <input class="form-control" placeholder="Enter Unload At Conc" name="unload_at_conc">
                                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.col-lg- -->
            </div>

        </div>
        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/dist/js/sb-admin-2.js"></script>

    <!-- <script src="<?php echo base_url()?>assets/multiple-select/demos/assets/jquery.min.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/multiple-select/multiple.select.js"></script> -->

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!-- <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script> -->

    <script>
    $(document).ready(function(){
        $('#Multi').multipleSelect({
            filter:true
                });
            });
    </script>

</body>

</html>
