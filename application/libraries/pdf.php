<?php

class pdf {

    function __construct() {
        include_once APPPATH . '/third_party/fpdf/fpdf.php';
        require_once APPPATH . '/third_party/fpdf/fpdf.php';
    $pdf = new FPDF();
    $pdf->AddPage();

    // $CI =$ get_instance ();
    // $CI->fpdf = $pdf;

    }

}

?>
