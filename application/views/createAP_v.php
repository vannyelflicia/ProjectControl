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
                <h1 class="page-header"><center>ACOUNT PAYABLE FORM</center></h1>
                <div  style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/dashAP"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left  "></i>  BACK</button></a>
                </div>
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">

                            <div class="row">
                            <div class="col-md-offset-2">
                                <div class="col-lg-8">
                                    <form role="form" method="post" action="<?php echo base_url()."index.php/pagecontrol/insertAP"; ?>">
                                   		 <div class="form-group">
                                            <label>Instruction Memorium Order (IMO)</label><br>
                                            <select class="form-control" required name="IMO" required>
                                            <?php foreach ($noIMO as $no) { ?>
                                            <option><?php echo $no ->IMO ?></option> 
                                            <?php } ?>
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name Agent</label>
                                            <select class="form-control" required name="name_ag" required>
                                            	<option>--Choose Agent--</option>
                                                <option>ANTALI JAYA MANDIRI, PT</option>
                                                <option>ANUGERAH PRIMA SEJAHTERAH , PT</option>
                                                <option>ALDORA SUKSES PERKASA</option>
                                                <option>ADIB COLD LOGISTIC</option>
                                                <option>BERKAH MUTIARA LAUT</option>
                                                <option>BERKAH AGUNG MULIA, PT</option>
                                                <option>BINTANG LAUT PLATINUM, PT</option>
                                                <option>BORNEO FAMILI TRANSPORTAMA PT.</option>
                                                <option>BINTAN MEGAH ABADI</option>
                                                <option>BUANA KONTENINDO EXPRESS, PT</option>
                                                <option>BERKAT RUKUN</option>
                                                <option>CV. MAJU TRANS</option>
                                                <option>CITRA MANDIRI SEJATI, PT</option>
                                                <option>CHARISMA SRIWIJAYA TRASINDO, PT (PALEMBANG)</option>
                                                <option>EMKL IDAR GEMILANG, PT</option>
                                                <option>HALUANREZKI NUSACINDO, PT</option>
                                                <option>HARIBIMA ANUGRAH DAMARA , PT</option>
                                                <option>INTI LINGGA SEJAHTERA , PT</option>
                                                <option>JASA BERSAUDARA TRANS</option>
                                                <option>JATIM PETROLEUM TRANSPORT, PT</option>
                                                <option>JOSEP LEO RUMIMPUNU</option>
                                                <option>KARTATIRTA BUANA PT.</option>
                                                <option>LAUTAN ANUGERAH SERVIS, PT</option>
                                                <option>LINTAS DIRGA NUSANTARA, CV</option>
                                                <option>MULIA GUNUNG MAS , PT</option>
                                                <option>MALINO NIRWANA TRANS, PT </option>
                                                <option>MITRA INTERTRANS FORWARDING - KUMAI</option>
                                                <option>MUSI UTAMA , CV  (PALEMBANG)</option>
                                                <option>NUSA TIMUR MEGAH, PT</option>
                                                <option>NUSA TIMOR PT</option>
                                                <option>PAN MARITIME SERVICES, PT</option>
                                                <option>PURNAMA AGUNG , PD</option>
                                                <option>PT TRANSPORINDO AGUNG SEJAHTERAH</option>
                                                <option>RAMAYANA PT</option>
                                                <option>RUKUN JAYA SEJATI, PT</option>
                                                <option>SAKURA</option>
                                                <option>SUDI JAYA AGUNG, PT</option>
                                                <option>SAMUDERA ADIGUNG SENTOSA</option>
                                                <option>TANGKIAN KURNIA BAHARI , PT</option>
                                                <option>TRANSINDO BUANA SENTOSA MEDAN, PT</option>
                                                <option>WINSON PRIMA SEJAHTERA, PT</option>
                                            </select>  
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Agen</label>
                                            <input class="form-control" placeholder="Enter Invoice" name="inv_ag">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Agen</label>
                                            <input class="form-control" placeholder="Enter Payment" name="pay_ag">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Agen</label>
                                            <input type="date" class="form-control" placeholder="Enter Payment" name="date_ag">
                                        </div>
                                        <div class="form-group">
                                            <label>Rental Genset</label>
                                            <input class="form-control" placeholder="Enter Rental" name="rent_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Genset</label>
                                            <input class="form-control" placeholder="Enter Invoice" name="inv_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Genset</label>
                                            <input class="form-control" placeholder="Enter Payment" name="pay_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Genset</label>
                                            <input type="date" class="form-control" placeholder="Enter Payment" name="date_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Company Name Ship</label>
                                            <select class="form-control" required name="name_ship" required>
                                                <option>--Choose Ship--</option>
                                                <option>INDONESIAN FORTUNE LLOYD, PT</option>
                                                <option>CTP Line</option>
                                                <option>INDO CONTAINER LINE, PT</option>
                                                <option>PELAYARAN MERATUS, PT</option>
                                                <option>PELNI, PT</option>
                                                <option>PT PPN PANURJWAN</option>
                                                <option>PELAYARAN MERATUS, PT (SBY)</option>
                                                <option>PELAYARAN TEMPURAN EMAS</option>
                                                <option>SALAM PASCIFIC INDONESIA LINES </option>
                                                <option>TANTO INTIM LINE, PT</option>
                                                <option>TANTO INTIM LINE, PT (SBY)</option>
                                            </select>  
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Ship</label>
                                            <input class="form-control" placeholder="Enter Invoice" name="inv_ship">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Ship</label>
                                            <input class="form-control" placeholder="Enter Payment" name="pay_ship">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Ship</label>
                                            <input type="date" class="form-control" placeholder="Enter Payment" name="date_ship ">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice THC</label>
                                            <input class="form-control" placeholder="Enter Invoice" name="inv_thc">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment THC</label>
                                            <input class="form-control" placeholder="Enter Payment" name="pay_thc">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date THC</label>
                                            <input type="date" class="form-control" placeholder="Enter Payment" name="date_thc ">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Handling</label>
                                            <input class="form-control" placeholder="Enter Invoice" name="inv_handl">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Handling</label>
                                            <input class="form-control" placeholder="Enter Payment" name="pay_handl">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Handling</label>
                                            <input type="date" class="form-control" placeholder="Enter Payment" name="date_handl">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Plug</label>
                                            <input class="form-control" placeholder="Enter Invoice" name="inv_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Plug</label>
                                            <input class="form-control" placeholder="Enter Payment" name="pay_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Plug</label>
                                            <input type="date" class="form-control" placeholder="Enter Payment" name="date_plug">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Genset</label>
                                            <input class="form-control" placeholder="Enter Invoice" name="inv_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Genset</label>
                                            <input class="form-control" placeholder="Enter Payment" name="pay_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Genset</label>
                                            <input type="date" class="form-control" placeholder="Enter Payment" name="date_genset">
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Lain</label>
                                            <input class="form-control" placeholder="Enter Invoice" name="inv_lain">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Lain</label>
                                            <input class="form-control" placeholder="Enter Payment" name="pay_lain">
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Lain</label>
                                            <input type="date" class="form-control" placeholder="Enter Payment" name="date_lain ">
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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
