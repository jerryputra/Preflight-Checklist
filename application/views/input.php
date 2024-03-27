<?php

// buat koneksi database
include "koneksi.php";
include 'application/controllers/logic.php';

?>

<html>

<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script>
        function validateForm() {
            var inputField = document.getElementById('inputField').value;

            if (inputField == "") {
                alert("Input field cannot be empty");
                return false; // Menghentikan pengiriman form
            }
            return true; // Memungkinkan pengiriman form
        }
    </script>



</head>

<body>
    <?php 
    
    ?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="background-color: slategray" ;>
            <a class="navbar-brand" href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('/assets/img/pelita.png'); ?>" alt="" style="width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url('home'); ?>">Preflight Checklist</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- content -->
    <form action="<?php echo base_url('logic/logicc')?>" method="POST" onsubmit="return validateForm()"
        >
        <div class="container-lg">
            <h3>Tambahkan Data Preflight Checklist</h3>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th colspan="1">FLT. NO: IP</th>
                        <th colspan="5">DATE</th>
                    </tr>
                    <tr>
                        <td colspan="4"><input class="form-control" placeholder="Masukan Flight Number" name="tflt" id="inputField"></td>
                        <td colspan="4"><input type="date" class="form-control" placeholder="" name="tdate" id="inputField"></td>
                    </tr>
                    <tr>
                        <th colspan="1">A/C REG.: PK</th>
                        <th colspan="5">DEP. A/P</th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <select class="form-control" name="treg" id="inputField">
                                <option selected>Pilihan</option>
                                <option value="JKT">JKT</option>
                                <option value="BDG">BDG</option>
                                <option value="LMP">LMP</option>
                                <option value="KOR">KOR</option>
                                <option value="JPN">JPN</option>
                                <option value="SMG">SMG</option>
                            </select>
                        </td>
                        <td colspan="4">
                            <!-- <input class="form-control" placeholder="Masukan Kode Departure" name="tdep"> -->
                            <select class="form-control" name="tdep" id="inputField">
                                <option selected>Pilihan</option>
                                <option value="JKT">JKT</option>
                                <option value="BDG">BDG</option>
                                <option value="LMP">LMP</option>
                                <option value="KOR">KOR</option>
                                <option value="JPN">JPN</option>
                                <option value="SMG">SMG</option>
                            </select>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th rowspan="2">Emergency Equipment</th>
                        <th></th>
                        <th></th>
                        <th colspan="4">Preflight</th>
                        <th colspan="3">Postflight</th>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <th>S</th>
                        <th>U/S</th>
                        <th>Remark</th>
                        <th>S</th>
                        <th>U/S</th>
                        <th>Remark</th>
                    </tr>
                    <tr>
                        <td>Lav Smoke Detector</td>
                        <td><input type="number" name="qty" id="emer2" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status" id="checkbox" value=""></td>
                        <td><input type="text" name="remark1" id="emer5" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status2" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status2" id="checkbox" value=""></td>
                        <td><input type="text" name="remark2" id="emer5" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Lav Build In Firex</td>
                        <td><input type="number" name="qty1" id="emer3" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status3" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status3" id="checkbox" value=""></td>
                        <td><input type="text" name="remark3" id="emer6" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status4" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status4" id="checkbox" value=""></td>
                        <td><input type="text" name="remark4" id="emer6" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Halon / BCF</td>
                        <td><input type="number" name="qty2" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status5" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status5" id="checkbox" value=""></td>
                        <td><input type="text" name="remark5" id="emer7" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status6" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status6" id="checkbox" value=""></td>
                        <td><input type="text" name="remark6" id="emer8" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>H2O</td>
                        <td><input type="number" name="qty3" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status7" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status7" id="checkbox" value=""></td>
                        <td><input type="text" name="remark7" id="emer9" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status8" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status8" id="checkbox" value=""></td>
                        <td><input type="text" name="remark8" id="emer10" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Megaphone</td>
                        <td><input type="number" name="qty4" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status9" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status9" id="checkbox" value=""></td>
                        <td><input type="text" name="remark9" id="emer11" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status10" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status10" id="checkbox" value=""></td>
                        <td><input type="text" name="remark10" id="emer12" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Silde Raft/Escape Slide</td>
                        <td><input type="number" name="qty5" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status11" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status11" id="checkbox" value=""></td>
                        <td><input type="text" name="remark11" id="emer13" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status12" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status12" id="checkbox" value=""></td>
                        <td><input type="text" name="remark12" id="emer14" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Flashlight</td>
                        <td><input type="number" name="qty6" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status13" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status13" id="checkbox" value=""></td>
                        <td><input type="text" name="remark13" id="emer15" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status14" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status14" id="checkbox" value=""></td>
                        <td><input type="text" name="remark14" id="emer15" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>POB</td>
                        <td><input type="number" name="qty7" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status15" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status15" id="checkbox" value=""></td>
                        <td><input type="text" name="remark15" id="emer16" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status16" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status16" id="checkbox" value=""></td>
                        <td><input type="text" name="remark16" id="emer17" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Oxygen Mask</td>
                        <td><input type="number" name="qty8" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status17" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status17" id="checkbox" value=""></td>
                        <td><input type="text" name="remark17" id="emer18" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status18" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status18" id="checkbox" value=""></td>
                        <td><input type="text" name="remark18" id="emer19" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>PBE</td>
                        <td><input type="number" name="qty9" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status19" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status19" id="checkbox" value=""></td>
                        <td><input type="text" name="remark19" id="emer20" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status20" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status20" id="checkbox" value=""></td>
                        <td><input type="text" name="remark20" id="emer21" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Crew Life Vest</td>
                        <td><input type="number" name="qty10" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status21" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status21" id="checkbox" value=""></td>
                        <td><input type="text" name="remark21" id="emer22" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status22" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status22" id="checkbox" value=""></td>
                        <td><input type="text" name="remark22" id="emer23" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Passenger Life Vest</td>
                        <td><input type="number" name="qty11" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status23" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status23" id="checkbox" value=""></td>
                        <td><input type="text" name="remark23" id="emer24" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status24" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status24" id="checkbox" value=""></td>
                        <td><input type="text" name="remark24" id="emer25" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Spare Adult Life Vest</td>
                        <td><input type="number" name="qty12" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status25" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status25" id="checkbox" value=""></td>
                        <td><input type="text" name="remark25" id="emer26" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status26" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status26" id="checkbox" value=""></td>
                        <td><input type="text" name="remark26" id="emer27" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Infant Life Vest</td>
                        <td><input type="number" name="qty13" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status27" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status27" id="checkbox" value=""></td>
                        <td><input type="text" name="remark27" id="emer28" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status28" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status28" id="checkbox" value=""></td>
                        <td><input type="text" name="remark28" id="emer29" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Infant Seat Belt</td>
                        <td><input type="number" name="qty14" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status29" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status29" id="checkbox" value=""></td>
                        <td><input type="text" name="remark29" id="emer30" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status30" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status30" id="checkbox" value=""></td>
                        <td><input type="text" name="remark30" id="emer31" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Extension Seat Belt</td>
                        <td><input type="number" name="qty15" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status31" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status31" id="checkbox" value=""></td>
                        <td><input type="text" name="remark31" id="emer32" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status32" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status32" id="checkbox" value=""></td>
                        <td><input type="text" name="remark32" id="emer33" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Spare Seat Belt</td>
                        <td><input type="number" name="qty16" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status33" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status33" id="checkbox" value=""></td>
                        <td><input type="text" name="remark33" id="emer34" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status34" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status34" id="checkbox" value=""></td>
                        <td><input type="text" name="remark34" id="emer35" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Survival Kit</td>
                        <td><input type="number" name="qty17" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status35" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status35" id="checkbox" value=""></td>
                        <td><input type="text" name="remark35" id="emer36" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status36" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status36" id="checkbox" value=""></td>
                        <td><input type="text" name="remark36" id="emer37" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>ELT</td>
                        <td><input type="number" name="qty18" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status37" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status37" id="checkbox" value=""></td>
                        <td><input type="text" name="remark37" id="emer38" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status38" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status38" id="checkbox" value=""></td>
                        <td><input type="text" name="remark38" id="emer39" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Firts Aid Kit</td>
                        <td><input type="number" name="qty19" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status39" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status39" id="checkbox" value=""></td>
                        <td><input type="text" name="remark39" id="emer40" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status40" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status40" id="checkbox" value=""></td>
                        <td><input type="text" name="remark40" id="emer41" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>EMK</td>
                        <td><input type="number" name="qty20" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status41" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status41" id="checkbox" value=""></td>
                        <td><input type="text" name="remark41" id="emer42" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status42" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status42" id="checkbox" value=""></td>
                        <td><input type="text" name="remark42" id="emer43" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Safety Demo Kit</td>
                        <td><input type="number" name="qty21" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status43" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status43" id="checkbox" value=""></td>
                        <td><input type="text" name="remark43" id="emer44" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status44" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status44" id="checkbox" value=""></td>
                        <td><input type="text" name="remark44" id="emer45" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Door Barrier Strap</td>
                        <td><input type="number" name="qty22" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status45" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status45" id="checkbox" value=""></td>
                        <td><input type="text" name="remark45" id="emer46" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status46" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status46" id="checkbox" value=""></td>
                        <td><input type="text" name="remark46" id="emer47" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Cabin Headset</td>
                        <td><input type="number" name="qty23" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status47" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status47" id="checkbox" value=""></td>
                        <td><input type="text" name="remark47" id="emer49" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status48" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status48" id="checkbox" value=""></td>
                        <td><input type="text" name="remark48" id="emer50" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Restraint Kit</td>
                        <td><input type="number" name="qty24" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status49" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status49" id="checkbox" value=""></td>
                        <td><input type="text" name="remark49" id="emer51" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status50" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status50" id="checkbox" value=""></td>
                        <td><input type="text" name="remark50" id="emer52" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>MRT</td>
                        <td><input type="number" name="qty25" id="emer2" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status51" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status51" id="checkbox" value=""></td>
                        <td><input type="text" name="remark51" id="emer53" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status52" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status52" id="checkbox" value=""></td>
                        <td><input type="text" name="remark52" id="emer54" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Fire Proof Gloves</td>
                        <td><input type="number" name="qty26" id="emer2" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status53" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status53" id="checkbox" value=""></td>
                        <td><input type="text" name="remark53" id="emer55" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status54" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status54" id="checkbox" value=""></td>
                        <td><input type="text" name="remark54" id="emer56" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Life Line</td>
                        <td><input type="number" name="qty27" id="emer2" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status55" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status55" id="checkbox" value=""></td>
                        <td><input type="text" name="remark55" id="emer57" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status56" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status56" id="checkbox" value=""></td>
                        <td><input type="text" name="remark56" id="emer58" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>UPK</td>
                        <td><input type="number" name="qty28" id="emer2" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status57" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status57" id="checkbox" value=""></td>
                        <td><input type="text" name="remark57" id="emer59" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status58" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status58" id="checkbox" value=""></td>
                        <td><input type="text" name="remark58" id="emer60" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>DG Kit</td>
                        <td><input type="number" name="qty29" id="emer2" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status59" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status59" id="checkbox" value=""></td>
                        <td><input type="text" name="remark59" id="emer61" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status60" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status60" id="checkbox" value=""></td>
                        <td><input type="text" name="remark60" id="emer62" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Safety Instruction Card</td>
                        <td><input type="number" name="qty30" id="emer2" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status61" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status61" id="checkbox" value=""></td>
                        <td><input type="text" name="remark61" id="emer63" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status62" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status62" id="checkbox" value=""></td>
                        <td><input type="text" name="remark62" id="emer64" value="" style="margin-left: 5px;"></td>
                    </tr>
                    <tr>
                        <td>Exit Row Seating Criteria</td>
                        <td><input type="number" name="qty31" id="emer2" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status63" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status63" id="checkbox" value=""></td>
                        <td><input type="text" name="remark63" id="emer65" value="" style="margin-left: 5px;"></td>
                        <td><input type="checkbox" name="s_status64" id="checkbox" value=""></td>
                        <td><input type="checkbox" name="us_status64" id="checkbox" value=""></td>
                        <td><input type="text" name="remark64" id="emer66" value="" style="margin-left: 5px;"></td>
                    </tr>
                </table>
            </div>






            <div class="mt-3">
                <div class="position-relative">
                    <div class="position-absolute top-100 start-50 translate-middle">
                        <!-- <button type="submit" class="btn btn-success" formaction="index.php">Simpan</button> -->
                        <!-- <button type="button" class="btn btn-danger">Keluar</button> -->
                        <button type="submit"  class="btn btn-success" name="bsimpan">Simpan</button>
                        <!-- <a href="" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true" name="bsimpan">Simpan</a> -->
                        <a href="<?php echo base_url('home')?>" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Keluar</a>
                    </div>
                </div>
            </div>




            <!-- <table class="table table-md table-responsive table-bordered position-absolute top-50 start-50 translate-middle">
                <tr>
                    <th style="width: 100px;">FLT.NO:IP</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <th style="width: 100px;">A/C REG:PK</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <th style="width: 100px;">DATE</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
                <tr>
                    <th style="width: 100px;">FLT.NO:IP</th>
                    <td><input type="text" name="" id=""></td>
                </tr>
            </table> -->
        </div>
    </form>



    <!-- content end -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>