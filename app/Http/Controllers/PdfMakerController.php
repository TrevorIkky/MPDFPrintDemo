<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mpdf\Mpdf;
use Carbon\Carbon;

class PdfMakerController extends Controller
{
    //


    public function examRegister()
    {
        return view('examattendanceregister');
    }

    public function examCard()
    {
        return view('examcard');
    }

    public function receipt()
    {
        return view('receipt');
    }

    public function invoice()
    {
        return view('invoice');
    }

    private function setPDFHeader($mpdf, $headerTemplate)
    {
        $mpdf->SetHTMLHeader($headerTemplate);
    }

    public function print(Request $request)
    {
        $viewName = $request->doc;
        $id = $request->id;
        $parsedHTML = view($viewName)->render();


        $mpdf = new Mpdf([
            'orientation' => "p",
            'setAutoTopMargin' => 'stretch',
            'mode' => 'utf-8',
            'format' => "A4"
        ]);

        switch ((int) $id) {
            case 0:
                $name = "";
                $mpdfs = new Mpdf([
                    'orientation' => "L",
                    'setAutoTopMargin' => 'stretch',
                    'mode' => 'utf-8',
                    'format' => "A5"
                ]);
                $this->setPDFHeader($mpdfs, '<div><div style="width: 100%; vertical-align: center; text-align: center; display: table-cell; "> <img width="115" height="85" src="images/logo-min.png"></div><div style="width: 100%; vertical-align: center; text-align: center; display: table-cell; "><h5> </h5></div></div>');

                break;
            case 1:
                $this->setPDFHeader($mpdf, '<div>
                <div style="width: 100%; vertical-align: center; text-align: center; display: table-cell; "> <img width="115"
                        height="85" src="images/logo-min.png"></div>
                <div style="width: 100%; vertical-align: center; text-align: center; display: table-cell; ">
                    <h5> EXAM ATTENDANCE REGISTER</h5>
                </div>
                <table  autosize= "1" id="details-table-1" class="tz" style="table-layout: fixed; width: 852px;">
                    <tr>
                      <th width ="129px" class="tz-ke5m">EXAMINATION</th>
                      <th class="tz-ke5m">CENTER</th>
                      <th class="tz-ke5m"> SUBJECT</th>
                      <th class="tz-gb3q">SITTING &amp; YEAR</th>
                    </tr>
                    <tr>
                      <td class="tz-9wq8">DIPLOMA</td>
                      <td class="tz-9wq8">1 COLLEGE OF INSURANCE</td>
                      <td class="tz-9wq8">DIP 101 INTRODUCTION TO INSURANCE</td>
                      <td class="tz-c3ow">OCTOBER/NOVEMBER 2019</td>
                    </tr>
                  </table>
            </div>
            <br>');
                break;
            case 2:
                $this->setPDFHeader($mpdf, '<div><div style="width: 100%; vertical-align: center; text-align: center; display: table-cell; "> <img width="115" height="85" src="images/logo-min.png"></div><div style="width: 100%; vertical-align: center; text-align: center; display: table-cell; "><h5> EXAM CARD</h5></div></div>');
                break;

            case 3:
                $this->setPDFHeader($mpdf, '<div>
            <div style="width: 100%; vertical-align: center; text-align: center; display: table-cell; "> <img width="115"
                    height="85" src="images/logo-min.png"></div>
            <table class="ty" style="table-layout: fixed; width: 407px; margin-top:20px; margin-bottom: 23px;">
                <colgroup>
                    <col style="width: 407px">
                </colgroup>
                <tr>
                    <th class="ty-aykm"><span style="font-weight:normal">PIN: P000606572</span><br></th>
                </tr>
                <tr>
                    <td class="ty-aykm"><span style="font-weight:normal">VAT: 0131976B</span><br></td>
                </tr>
                <tr>
                    <td class="ty-o6sr">INVOICE</td>
                </tr>
            </table>
        </div>');

            default:
                echo "Document type reached default";
                break;
        }

        $newHTML = str_replace('<div id="print" class="print-indicator container-start"><p><b><u>Print</u></b></p><img id="print-icon" width="21" height="21" src="images/print.png"></div>', '', $parsedHTML);
        $mpdf->SetHTMLFooter('<table style="font-size:10px;" width="100%"><tr><td width="33%"> Downloaded on: ' . Carbon::now()->toFormattedDateString() . '</td><td width="33%" align="center"></td><td width="33%" style="text-align: right;">{PAGENO} of {nbpg}</td></tr></table>');
        $mpdf->WriteHTML($newHTML);
        $mpdf->Output();
    }
}
