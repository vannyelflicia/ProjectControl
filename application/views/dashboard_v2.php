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

    <!-- Data Tables CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_table/jquery.dataTables.css"> -->

<!-- cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css -->
</head>

<body>
<style>
.dtHorizontalExampleWrapper {
  max-width: 600px;
  margin: 0 auto;
}
#dtHorizontalExample th, td {
  white-space: nowrap;
}
</style>
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
                    <h1 ><center>CONTROL OF ACTIVITY PT.TBS</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Keterangan Warna : <br>
                            <br><img src="<?php echo base_url(); ?>assets/image/ap.jpg" width=30px> Acount Payable
                            <br><img src="<?php echo base_url(); ?>assets/image/truck.jpg" width=30px> Truck
                        </div>
                    </div>
                </div>
            </div>


             <div class="row">
                <div class="col-lg-12">
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <center>BACK FROM DEST TOWN REPORT</center>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                <div class="table-responsive-sm">
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr >
                                        <th style="background-color: SandyBrown; color: white">Instrution Memorium Order</th>
                                        <th style="background-color: SandyBrown; color: white">Instrution Memorium Order (back)</th>
                                        <th style="background-color: SandyBrown; color: white">Name CUSTOMER</th>
                                        <th style="background-color: SandyBrown; color: white">Invoice CUSTOMER</th>
                                        <th style="background-color: SandyBrown; color: white">Invoice AGEN</th>
                                        <th style="background-color: SandyBrown; color: white">Payment AGEN</th>
                                        <th style="background-color: SandyBrown; color: white">Invoice GENSET</th>
                                        <th style="background-color: SandyBrown; color: white">Payment GENSET</th>
                                        <th style="background-color: SandyBrown; color: white">Invoice SHIP</th>
                                        <th style="background-color: SandyBrown; color: white">Payment SHIP</th>
                                        <th></th>
                                        <th style="background-color: IndianRed; color: white">Name TRUCK</th>
                                        <th style="background-color: IndianRed; color: white">Invoice TRUCK</th>
                                        <th style="background-color: IndianRed; color: white">Payment TRUCK</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ($datahasil as $p) { ?>
                                    <tr class="odd gradeX">
                                        <td style="color: red"><?php echo $p->IMO ?></td>
                                        <td><?php echo $p->IMO_v2 ?></td>
                                        <td><?php echo $p->name_cust ?></td>
                                        <td><?php echo $p->inv_cust ?></td>
                                        <td><?php echo $p->inv_ag ?></td>
                                        <td><?php echo $p->pay_ag ?></td>
                                        <td><?php echo $p->inv_genset ?></td>
                                        <td><?php echo $p->pay_genset ?></td>
                                        <td><?php echo $p->inv_ship ?></td>
                                        <td><?php echo $p->pay_ship ?></td>
                                        <td>
                                        <a href="editAP2/<?php echo $p->IMO_v2; ?>"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button></a>
                                        <button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-trash"></i></button>
                                        <td><?php echo $p->name_truck ?></td>
                                        <td><?php echo $p->inv_truck ?></td>
                                        <td><?php echo $p->pay_truck ?></td>
                                        <td>
                                        <a href="editAP2/<?php echo $p->IMO_v2; ?>"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button></a>
                                        <button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-trash"></i></button>
                                        </td>
                                    </tr>  
                                    <?php } ?>
                                             
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </div>

                <!-- /.col-lg-6 -->
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

    <!-- Data Tables JQuery  -->
    <!-- <script type="text/javascript" charset="utf8" src="<?php echo base_url()?>assets/js_table/jquery.dataTable.js"></script> -->

    <!-- Page-Level Data Tables Scripts - Tables - Use for reference -->
   <!--  <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
        });
    </script> -->

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function () {
  $('#dtHorizontalExample').DataTable({
    "scrollX": true
  });
  $('.dataTables_length').addClass('bs-select');
});
    // $(document).ready(function() {
    //     $('#dataTables-example').DataTable({
    //         responsive: true
    //     });
    // });
    </script>

</body>

</html>
