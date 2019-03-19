<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
  public function index(Request $request)
  {
    require_once("E:/ratan/New folder/ratan/vendor/autoload.php");

    $mpdf= new \Mpdf\Mpdf(['mode' => 'utf-8','format' => 'A4','margin_left' => 0,'margin_right' => 0,'margin_top' => 0,'margin_bottom' =>0,'margin_header' => 0,'margin_footer' => 0, 'orientation' => 'P']);
    $mpdf->SetDisplayMode('fullpage');
    $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list
    // LOAD a stylesheet
    //$stylesheet = file_get_contents('mpdfstyletables.css');
    //$mpdf->WriteHTML($stylesheet,1);
    $mpdf->WriteHTML("hello");
    $mpdf->Output();
      //return view('buyticket.index');
  }
}
