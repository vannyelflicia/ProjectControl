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
                    <h1 class="page-header"><center>CONTROL OF ACTIVITY PT.TBS</center></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            Keterangan Warna : <br>
                            <img src="<?php echo base_url(); ?>assets/image/op.jpg" width=30px> Operasional 
                            <br><img src="<?php echo base_url(); ?>assets/image/ar.jpg" width=30px> Acount Receivable
                            <br><img src="<?php echo base_url(); ?>assets/image/pajak.jpg" width=30px> Pajak
                            <br><img src="<?php echo base_url(); ?>assets/image/ap.jpg" width=30px> Acount Payable
                            <br><img src="<?php echo base_url(); ?>assets/image/truck.jpg" width=30px> Truck
                        </div>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            <center>DELIVERY FROM JAKARTA REPORT</center>
                        </div>

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="table-responsive-sm">
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <tr >
                                        <th style="background-color: Royalblue; color: white" >IMO</th>
                                        <th style="background-color: Royalblue; color: white">No. Container</th>
                                        <th style="background-color: Royalblue; color: white">No. Shipment</th>
                                        <th style="background-color: Royalblue; color: white">No. Seal</th>
                                        <th style="background-color: Royalblue; color: white">Stuffing Date</th>
                                        <th style="background-color: Royalblue; color: white">Payment</th>
                                        <th style="background-color: Royalblue; color: white">Delivery From JKT (ETD)</th>
                                        <th style="background-color: Royalblue; color: white">Destination Town</th>
                                        <th style="background-color: Royalblue; color: white">Vessel Name</th>
                                        <th style="background-color: Royalblue; color: white">Arv At Dest (ETA)</th>
                                        <th style="background-color: Royalblue; color: white">Unload At Conc</th>
                                        <th style="background-color: Royalblue"></th>

                                        <th style="background-color: MediumSeaGreen; color: white">Name CUST</th>
                                        <th style="background-color: MediumSeaGreen; color: white">No. Invoice</th>
                                        <th style="background-color: MediumSeaGreen; color: white">Payment Inv</th>
                                        <th style="background-color: MediumSeaGreen; color: white">No. Plug</th>
                                        <th style="background-color: MediumSeaGreen; color: white">Payment Plug</th>
                                        <th style="background-color: MediumSeaGreen"></th>

                                        <th style="background-color: PowderBlue; color: white">No Faktur</th>
                                        <th style="background-color: PowderBlue"></th>

                                        <th style="background-color: SandyBrown; color: white">Name AGEN</th>
                                        <th style="background-color: SandyBrown; color: white">Invoice AGEN</th>
                                        <th style="background-color: SandyBrown; color: white">Payment AGEN</th>
                                        <th style="background-color: SandyBrown; color: white">Payment Date AGEN</th>

                                        <th style="background-color: SandyBrown; color: white">Rental GENSET</th>
                                        <th style="background-color: SandyBrown; color: white">Invoice GENSET</th>
                                        <th style="background-color: SandyBrown; color: white">Payment GENSET</th>
                                        <th style="background-color: SandyBrown; color: white">Payment Date GENSET</th>

                                        <th style="background-color: SandyBrown; color: white">Name SHIP</th>
                                        <th style="background-color: SandyBrown; color: white">Invoice SHIP</th>
                                        <th style="background-color: SandyBrown; color: white">Payment SHIP</th>
                                        <th style="background-color: SandyBrown; color: white">Payment Date SHIP</th>

                                        <th style="background-color: SandyBrown; color: white">Invoice THC</th>
                                        <th style="background-color: SandyBrown; color: white">Payment THC</th>
                                        <th style="background-color: SandyBrown; color: white">Payment Date THC</th>

                                        <th style="background-color: SandyBrown; color: white">Invoice HANDLING</th>
                                        <th style="background-color: SandyBrown; color: white">Payment HANDLING</th>
                                        <th style="background-color: SandyBrown; color: white">Payment Date HANDLING</th>

                                        <th style="background-color: SandyBrown; color: white">Invoice PLUG</th>
                                        <th style="background-color: SandyBrown; color: white">Payment PLUG</th>
                                        <th style="background-color: SandyBrown; color: white">Payment Date PLUG</th>

                                        <th style="background-color: SandyBrown; color: white">Invoice LAIN</th>
                                        <th style="background-color: SandyBrown; color: white">Payment LAIN</th>
                                        <th style="background-color: SandyBrown; color: white">Payment Date LAIN</th>
                                        <th style="background-color: SandyBrown"></th>

                                        <th style="background-color: IndianRed; color: white">No. Invoice</th>
                                        <th style="background-color: IndianRed; color: white">Name</th>
                                        <th style="background-color: IndianRed; color: white">Date</th>
                                        <th style="background-color: IndianRed; color: white">Tujuan</th>
                                        <th style="background-color: IndianRed; color: white">Pesanan</th>
                                        <th style="background-color: IndianRed; color: white">No Polisi</th>
                                        <th style="background-color: IndianRed; color: white">Jam</th>
                                        <th style="background-color: IndianRed; color: white">Muatan</th>
                                        <th style="background-color: IndianRed; color: white">Ukuran</th>
                                        <th style="background-color: IndianRed; color: white">Biaya Jajan</th>
                                        <th style="background-color: IndianRed; color: white">Biaya Komisi</th>
                                        <th style="background-color: IndianRed; color: white">Biaya Kawalan</th>
                                        <th style="background-color: IndianRed; color: white">Biaya Lain2</th>
                                        <th style="background-color: IndianRed"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php foreach ($datahasil as $key) { ?>
                                        <tr class="odd gradeX">
                                        <td><?php echo $key->IMO ?></td>
                                        <td><?php echo $key->no_container ?></td>
                                        <td><?php echo $key->no_shipment ?></td>
                                        <td><?php echo $key->no_seal ?></td>
                                        <td><?php echo $key->stuff_date ?></td>
                                        <td><?php echo $key->payment ?></td>
                                        <td><?php echo $key->deliv_date ?></td>
                                        <td><?php echo $key->dest_town ?></td>
                                        <td><?php echo $key->vessel_name ?></td>
                                        <td><?php echo $key->arv_at_dest ?></td>
                                        <td><?php echo $key->unload_at_conc ?></td>
                                        <td>
                                        <a href="editOP/<?php echo $key->IMO; ?>"<button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i>
                                            </button>  </a>
                                        <button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-trash"></i>
                                            </button>
                                        </td>

                                        <td><?php echo $key->name_cust ?></td>
                                        <td><?php echo $key->inv_cust ?></td>
                                        <td><?php echo $key->pay_inv ?></td>
                                        <td><?php echo $key->no_plug ?></td>
                                        <td><?php echo $key->pay_plug ?></td>
                                        <td>
                                        <a href="editAR/<?php echo $key->IMO; ?>"<button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button></a>
                            <button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-trash"></i></button>

                                        <td><?php echo $key->no_faktur ?></td>
                                        <td>
                                        <a href="editnoFaktur/<?php echo $key->IMO; ?>"<button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button></a>
                            <button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-trash"></i></button>

                                        <td><?php echo $key->name_ag ?></td>
                                        <td><?php echo $key->inv_ag ?></td>
                                        <td><?php echo $key->pay_ag ?></td>
                                        <td><?php echo $key->date_ag ?></td>

                                        <td><?php echo $key->rent_genset ?></td>
                                        <td><?php echo $key->inv_genset ?></td>
                                        <td><?php echo $key->pay_genset ?></td>
                                        <td><?php echo $key->date_genset ?></td>

                                        <td><?php echo $key->name_ship ?></td>
                                        <td><?php echo $key->inv_ship ?></td>
                                        <td><?php echo $key->pay_ship ?></td>
                                        <td><?php echo $key->date_ship ?></td>

                                        <td><?php echo $key->inv_thc ?></td>
                                        <td><?php echo $key->pay_thc ?></td>
                                        <td><?php echo $key->date_thc ?></td>

                                        <td><?php echo $key->inv_handl ?></td>
                                        <td><?php echo $key->pay_handl ?></td>
                                        <td><?php echo $key->date_handl ?></td>

                                        <td><?php echo $key->inv_plug ?></td>
                                        <td><?php echo $key->pay_plug ?></td>
                                        <td><?php echo $key->date_plug ?></td>

                                        <td><?php echo $key->inv_lain ?></td>
                                        <td><?php echo $key->pay_lain ?></td>
                                        <td><?php echo $key->date_lain ?></td>
                                        <td>
                                        <a href="editAP/<?php echo $key->IMO; ?>"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button></a>
                                        <button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-trash"></i></button>

                                        <td><?php echo $key->inv_truck ?></td>
                                        <td><?php echo $key->name ?></td>
                                        <td><?php echo $key->date ?></td>

                                        <td><?php echo $key->tujuan ?></td>
                                        <td><?php echo $key->pesanan ?></td>
                                        <td><?php echo $key->no_pol ?></td>

                                        <td><?php echo $key->jam ?></td>
                                        <td><?php echo $key->muatan ?></td>

                                        <td><?php echo $key->ukuran ?></td>
                                        <td><?php echo $key->b_jajan ?></td>
                                        <td><?php echo $key->b_kom ?></td>

                                        <td><?php echo $key->b_kawal ?></td>
                                        <td><?php echo $key->b_lain ?></td>
                                        <td>
                                        <a href="editTruck/<?php echo $key->IMO; ?>"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></button></a>
                            <button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-trash"></i></button>
                                        </td>

                                        <?php }  ?> 
                                    </tr>             
                                    
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <!-- /.panel-body -->
                        <div  style="padding: 15px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/cetak"?>"><button type="button" class="btn btn-success"><i class="fa   fa-download"></i>  DOWNLOAD</button></a>
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
