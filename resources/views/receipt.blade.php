<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/receipt.css" type="text/css" rel="stylesheet">
    <title>Receipt</title>
</head>
<style>
</style>

<body>
    <div class="main-container">
        <div id="print" class="print-indicator container-start"><p><b><u>Print</u></b></p><img id="print-icon" width="21" height="21" src="images/print.png"></div>
        <div class="sub-container">
            <div class="college-details">
                <div style="float: left; text-align:left; width: 7cm;">
                    <p>Email:&nbsp; accounts@coi.ac.ke</p>
                </div>
                <div style="float: left; text-align:left;  width: 6cm;">
                    <p id="copy-text">COPY OF RECEIPT</p>
                </div>
                <div style="float: left; text-align:right; width: 5cm;">
                    <p>PIN:&nbsp; AOICD93KFA</p>
                </div>
            </div>
            <table class="tg" style="table-layout: fixed; width: 21cm;">
                <colgroup>
                    <col style="width: 4cm">
                    <col style="width: 5cm">
                    <col style="width: 4cm">
                    <col style="width: 4cm">
                    <col style="width: 4cm">
                </colgroup>
                <tr>
                    <td class="tg-wo29">Voucher Type</td>
                    <td class="tg-wo29" colspan="4">&nbsp;MPesa Receipts</td>
                </tr>
                <tr>
                    <td class="tg-wo29">Tender Type</td>
                    <td class="tg-wo29" colspan="4">&nbsp;MPESA</td>
                </tr>
                <tr>
                    <td class="tg-wo29">Amount</td>
                    <td class="tg-wo29" colspan="4">&nbsp;KES 50, 000</td>
                </tr>
                <tr>
                    <td class="tg-wo29">From</td>
                    <td class="tg-wo29" colspan="4">&nbsp;PURITY NJERI NJENGA</td>
                </tr>
                <tr>
                    <td class="tg-wo29">Being</td>
                    <td class="tg-wo29" colspan="4">&nbsp;DIP 201,202,203,204 Fees - NGJ7D5F6Z3</td>
                </tr>
                <tr>
                    <td class="tg-u4qj" colspan="5"></td>
                </tr>
                <tr>
                    <td class="tg-wo29">Cashier's Name</td>
                    <td class="tg-wo29" colspan="4">&nbsp;Russel King</td>
                </tr>
                <tr>
                    <td class="tg-wo29">Cashier's Signature</td>
                    <td class="tg-wo29" colspan="4"></td>
                </tr>
                <tr>
                    <td class="tg-u4qj" colspan="5"></td>
                </tr>
                <tr>
                    <td class="tg-wo29">Cheque Number</td>
                    <td class="tg-wo29" colspan="4"></td>
                </tr>
                <tr>
                    <td class="tg-wo29">Bank Name</td>
                    <td class="tg-wo29" colspan="4"></td>
                </tr>
                <tr>
                    <td class="tg-u4qj" colspan="5"></td>
                </tr>
                <tr>
                    <td class="tg-wo29">Generated on</td>
                    <td class="tg-wo29">&nbsp;9<sup>th</sup> March 2020</td>
                    <td class="tg-wo29"></td>
                    <td class="tg-wo29">Receipt No</td>
                    <td class="tg-wo29">&nbsp;CSI39XKSCOB</td>
                </tr>
            </table>
        </div>
    </div>
    <form id="print-form" method="GET" action="/print/receipt/0"></form>
</body>
<script defer type="text/javascript" src="js/print.js"></script>

</html>