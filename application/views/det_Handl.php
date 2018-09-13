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
                <h1 class="page-header"><center>Customer Payment Invoice Details </center></h1>
                <div  style="padding-bottom: 10px">
                    <a href="<?php echo base_url()."index.php/pagecontrol/dashAR"?>"><button type="button" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left  "></i>  BACK</button></a>
                </div>
                    <div class="panel panel-green">
                        <div class="panel-heading"></div>
                        <div class="panel-body">

                            <div class="row">
                            <div class="col-md-offset-2">
                                <div class="col-lg-8">
                                    
                                    <?php foreach ($detHandl as $r) { ?>
                                    
                                         <div class="form-group">
                                         
                                            <label>Instruction Memorium Order (IMO) : </label><br>
                                            <label><?php echo $r->IMO ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Invoice Handling : </label>
                                            <label><?php echo $r->inv_handl ?></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Payment Date Handling : </label>
                                            <label><?php echo $r->date_handl ?></label>
                                        </div>

                                        <p>Payment : DPP + PPN 1%/10% + Admin Bank - PPH 2%</p>
                    <?php
                        echo form_open();
                        $bil1 = array(
                            'class'     => 'from-control',
                            'type'      => 'number',
                            'name'      => 'bil1',
                            'id'        => 'bil1'
                            );
                        echo "<p> DPP : </p>";
                        echo form_input($bil1);
                        echo "<br>";
                        echo "<br>";
                        $bil2 = array(
                            'class'     => 'from-control',
                            'type'      => 'number',
                            'name'      => 'bil2',
                            'id'        => 'bil2'
                            );
                        echo "<p> Admin Bank : </p>";
                        echo form_input($bil2);
                        echo "<br><br>";
                        ?>
                        <select id="hitung">
                            <option value="PPN 1%">PPN 1%</option>
                            <option value="PPN 10%">PPN 10%</option>
                        </select>
                        <?php
                        echo "<br> <br>";
                            echo form_submit('submit', 'Hasil', "class='btn btn-primary btn-sm submit'");
                            
                            echo form_close();
                            ?>
                                <br><p style="font-style: bold">Payment : </p>
                                <p id="value" ></p>
                                <form role="form" method="post" action="<?php echo base_url()."index.php/pagecontrol/simpandetHandl"; ?>">
                                      <input type="hidden" name="value" id='pay'>
                                <input class="form-control" type="hidden" value="<?php echo $r ->IMO ?>" name="IMO">
                                    <?php } ?>
                                        <input type="submit" class="btn btn-default submitpayment" value='Submit Button'>
                                        <input type="reset" class="btn btn-default" value="Reset Button">
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
    <script src="<?php echo base_url()?>assets/ajax-jquery.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    $(".submit").click(function(event) {
            event.preventDefault();
            var bilangan1 = $("#bil1").val();
            var bilangan2 = $("#bil2").val();
            var option  = $("#hitung").find("option:selected").val();
            
            jQuery.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>"+"index.php/pagecontrol/hitung",
            dataType: 'json',
            data: {bil1: bilangan1, bil2: bilangan2, hitung:option},
            success: function(res) {
                $('#pay').val(res.hasil);
            jQuery("#value").html(res.hasil);
            }
            });
            });
    </script>

</body>

</html>
