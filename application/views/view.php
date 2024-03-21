<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href='<?php echo base_url('/assets/style.css')?>'>

</head>

<body>
    <div class="container-fluid">
        <form action="aksi.php" method="post">
            <div class="container-sm">
                <?php
                if (isset($_GET['id'])) {
                    $id_flight = $_GET['id'];

                    // Query database untuk mendapatkan data berdasarkan id_flight
                    $query = "SELECT * FROM title_flight WHERE id_flight = $id_flight";
                    $result = $koneksi->query($query);

                    // Periksa apakah hasil query ada
                    if ($result->num_rows > 0) {
                        // Ambil data dari hasil query
                        $data = $result->fetch_assoc();
                    } else {
                        echo 'Data tidak ditemukan';
                    }
                } else {
                    echo 'ID tidak valid';
                }

                $s_status = $data["S"];
                $us_status = $data["US"];
                $s_status2 = $data["S2"];
                $us_status2 = $data["US2"];

                $s_status3 = $data['S3'];
                $us_status3 = $data['US3'];
                $s_status4 = $data['S4'];
                $us_status4 = $data['US4'];

                $s_status5 = $data['S5'];
                $us_status5 = $data['US5'];
                $s_status6 = $data['S6'];
                $us_status6 = $data['US6'];

                $s_status7 = $data['S7'];
                $us_status7 = $data['US7'];
                $s_status8 = $data['S8'];
                $us_status8 = $data['US8'];

                $s_status9 = $data['S9'];
                $us_status9 = $data['US9'];
                $s_status10 = $data['S10'];
                $us_status10 = $data['US10'];

                $s_status11 = $data['S11'];
                $us_status11 = $data['US11'];
                $s_status12 = $data['S12'];
                $us_status12 = $data['US12'];

                $s_status13 = $data['S13'];
                $us_status13 = $data['US13'];
                $s_status14 = $data['S14'];
                $us_status14 = $data['US14'];

                $s_status15 = $data['S15'];
                $us_status15 = $data['US15'];
                $s_status16 = $data['S16'];
                $us_status16 = $data['US16'];

                $s_status17 = $data['S17'];
                $us_status17 = $data['US17'];
                $s_status18 = $data['S18'];
                $us_status18 = $data['US18'];

                $s_status19 = $data['S19'];
                $us_status19 = $data['US19'];
                $s_status20 = $data['S20'];
                $us_status20 = $data['US20'];

                $s_status21 = $data['S21'];
                $us_status21 = $data['US21'];
                $s_status22 = $data['S22'];
                $us_status22 = $data['US22'];

                $s_status23 = $data['S23'];
                $us_status23 = $data['US23'];
                $s_status24 = $data['S24'];
                $us_status24 = $data['US24'];

                $s_status25 = $data['S25'];
                $us_status25 = $data['US25'];
                $s_status26 = $data['S26'];
                $us_status26 = $data['US26'];

                $s_status27 = $data['S27'];
                $us_status27 = $data['US27'];
                $s_status28 = $data['S28'];
                $us_status28 = $data['US28'];

                $s_status29 = $data['S29'];
                $us_status29 = $data['US29'];
                $s_status30 = $data['S30'];
                $us_status30 = $data['US30'];

                $s_status31 = $data['S31'];
                $us_status31 = $data['US31'];
                $s_status32 = $data['S32'];
                $us_status32 = $data['US32'];

                $s_status33 = $data['S33'];
                $us_status33 = $data['US33'];
                $s_status34 = $data['S34'];
                $us_status34 = $data['US34'];

                $s_status35 = $data['S35'];
                $us_status35 = $data['US35'];
                $s_status36 = $data['S36'];
                $us_status36 = $data['US36'];

                $s_status37 = $data['S37'];
                $us_status37 = $data['US37'];
                $s_status38 = $data['S38'];
                $us_status38 = $data['US38'];

                $s_status39 = $data['S39'];
                $us_status39 = $data['US39'];
                $s_status40 = $data['S40'];
                $us_status40 = $data['US40'];

                $s_status41 = $data['S41'];
                $us_status41 = $data['US41'];
                $s_status42 = $data['S42'];
                $us_status42 = $data['US42'];

                $s_status43 = $data['S43'];
                $us_status43 = $data['US43'];
                $s_status44 = $data['S44'];
                $us_status44 = $data['US44'];

                $s_status45 = $data['S45'];
                $us_status45 = $data['US45'];
                $s_status46 = $data['S46'];
                $us_status46 = $data['US46'];

                $s_status47 = $data['S47'];
                $us_status47 = $data['US47'];
                $s_status48 = $data['S48'];
                $us_status48 = $data['US48'];

                $s_status49 = $data['S49'];
                $us_status49 = $data['US49'];
                $s_status50 = $data['S50'];
                $us_status50 = $data['US50'];

                $s_status51 = $data['S51'];
                $us_status51 = $data['US51'];
                $s_status52 = $data['S52'];
                $us_status52 = $data['US52'];

                $s_status53 = $data['S53'];
                $us_status53 = $data['US53'];
                $s_status54 = $data['S54'];
                $us_status54 = $data['US54'];

                $s_status55 = $data['S55'];
                $us_status55 = $data['US55'];
                $s_status56 = $data['S56'];
                $us_status56 = $data['US56'];

                $s_status57 = $data['S57'];
                $us_status57 = $data['US57'];
                $s_status58 = $data['S58'];
                $us_status58 = $data['US58'];

                $s_status59 = $data['S59'];
                $us_status59 = $data['US59'];
                $s_status60 = $data['S60'];
                $us_status60 = $data['US60'];

                $s_status61 = $data['S61'];
                $us_status61 = $data['US61'];
                $s_status62 = $data['S62'];
                $us_status62 = $data['US62'];

                $s_status63 = $data['S63'];
                $us_status63 = $data['US63'];
                $s_status64 = $data['S64'];
                $us_status64 = $data['US64'];

                ?>
                <div class="table-responsive">
                    <table class="table">
                        <img src="<?php echo base_url('/assets/img/ppp.png'); ?>" style="width: 20%; margin-left: 40%; " class="rounded">
                        <tr>
                            <td colspan="12" style="text-align: center;">PREFLIGHT CHECKLIST</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="font-size: 14px; text-align:right;">FLT. NO: IP <input type="text" class="border-0" value="<?= $data['flt'] ?>" readonly></td>
                            <td colspan="3" style="font-size: 14px; text-align:right;">A/C REG.: PK - <input type="text" class="border-0" value="<?= $data['reg'] ?>" readonly></td>
                            <td colspan="3" style="font-size: 14px; text-align:right;">DATE: <input type="text" class="border-0" value="<?= $data['date'] ?>" readonly></td>
                            <td colspan="3" style="font-size: 14px; text-align:right;">DEP. A/P: <input type="text" class="border-0" value="<?= $data['dep'] ?>"readonly></td>
                        </tr>
                    </table>

                    <div class="table-responsive">
                        <table class="table table-bordered ml-10">
                            <tr>
                                <th rowspan="2" style="background-color: #92ACCA; text-align:center">EMERGENCY EQUIPMENT</th>
                                <th style="background-color: #92ACCA;"></th>
                                <th colspan="4" style="background-color: #92ACCA;">PREFLIGHT</th>
                                <th colspan="3" style="background-color: #92ACCA; text-align:center">POSTFLIGHT</th>
                            </tr>
                            <tr>
                                <th style="background-color: #92ACCA; text-align:center">Quanty</th>
                                <th style="background-color: #92ACCA; text-align:center">S</th>
                                <th style="background-color: #92ACCA; text-align:center">U/S</th>
                                <th style="background-color: #92ACCA; text-align:center">REMARK</th>
                                <th style="background-color: #92ACCA; text-align:center">S</th>
                                <th style="background-color: #92ACCA; text-align:center;">U/S</th>
                                <th style="background-color: #92ACCA; text-align:center;">REMARK</th>
                            </tr>
                            <tr>
                                <td>Lav Smoke Detector</td>
                                <td><input type="number" name="qty" id="emer2" value="<?= $data['Quanty'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status" id="checkbox" value="1" <?php echo $s_status == 1 ? 'checked' : '';?>></td>
                                <td><input type="checkbox" name="us_status" id="checkbox" value="1" <?php echo $us_status == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark1" id="emer5" value="<?= $data['remark1'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status2" id="checkbox" value="1" <?php echo $s_status2 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status2" id="checkbox" value="1" <?php echo $us_status2 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark2" id="emer5" value="<?= $data['remark2'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Lav Build In Firex</td>
                                <td><input type="number" name="qty1" id="emer3" value="<?= $data['Quanty2'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status3" id="checkbox" value="1" <?php echo $s_status3 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status3" id="checkbox" value="1" <?php echo $us_status3 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark3" id="emer6" value="<?= $data['remark3'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status4" id="checkbox" value="1" <?php echo $s_status4 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status4" id="checkbox" value="1" <?php echo $us_status4 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark4" id="emer6" value="<?= $data['remark4'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Halon / BCF</td>
                                <td><input type="number" name="qty2" value="<?= $data['Quanty3'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status5" id="checkbox" value="1" <?php echo $s_status5 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status5" id="checkbox" value="1" <?php echo $us_status5 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark5" id="emer7" value="<?= $data['remark5'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status6" id="checkbox" value="1" <?php echo $s_status6 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status6" id="checkbox" value="1" <?php echo $us_status6 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark6" id="emer8" value="<?= $data['remark6'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>H2O</td>
                                <td><input type="number" name="qty3" value="<?= $data['Quanty4'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status7" id="checkbox" value="1" <?php echo $s_status7 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status7" id="checkbox" value="1" <?php echo $us_status7 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark7" id="emer9" value="<?= $data['remark7'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status8" id="checkbox" value="1" <?php echo $s_status8 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status8" id="checkbox" value="1" <?php echo $us_status8 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark8" id="emer10" value="<?= $data['remark8'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Megaphone</td>
                                <td><input type="number" name="qty4" value="<?= $data['Quanty5'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status9" id="checkbox" value="1" <?php echo $s_status9 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status9" id="checkbox" value="1" <?php echo $us_status9 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark9" id="emer11" value="<?= $data['remark9'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status10" id="checkbox" value="1" <?php echo $s_status10 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status10" id="checkbox" value="1" <?php echo $us_status10 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark10" id="emer12" value="<?= $data['remark10'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Silde Raft/Escape Slide</td>
                                <td><input type="number" name="qty5" value="<?= $data['Quanty6'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status11" id="checkbox" value="1" <?php echo $s_status11 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status11" id="checkbox" value="1" <?php echo $us_status11 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark11" id="emer13" value="<?= $data['remark11'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status12" id="checkbox" value="" <?php echo $s_status12 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status12" id="checkbox" value="" <?php echo $us_status12 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark12" id="emer14" value="<?= $data['remark12'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Flashlight</td>
                                <td><input type="number" name="qty6" value="<?= $data['Quanty7'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status13" id="checkbox" value="1" <?php echo $s_status13 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status13" id="checkbox" value="1" <?php echo $us_status13 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark13" id="emer15" value="<?= $data['remark13'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status14" id="checkbox" value="1" <?php echo $s_status14 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status14" id="checkbox" value="1" <?php echo $us_status14 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark14" id="emer15" value="<?= $data['remark14'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>POB</td>
                                <td><input type="number" name="qty7" value="<?= $data['Quanty8'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status15" id="checkbox" value="1" <?php echo $s_status15 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status15" id="checkbox" value="1" <?php echo $us_status15 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark15" id="emer16" value="<?= $data['remark15'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status16" id="checkbox" value="1" <?php echo $s_status16 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status16" id="checkbox" value="1" <?php echo $us_status16 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark16" id="emer17" value="<?= $data['remark16'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Oxygen Mask</td>
                                <td><input type="number" name="qty8" value="<?= $data['Quanty9'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status17" id="checkbox" value="1" <?php echo $s_status17 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status17" id="checkbox" value="1" <?php echo $us_status17 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark17" id="emer18" value="<?= $data['remark17'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status18" id="checkbox" value="1" <?php echo $s_status18 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status18" id="checkbox" value="1" <?php echo $us_status18 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark18" id="emer19" value="<?= $data['remark18'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>PBE</td>
                                <td><input type="number" name="qty9" value="<?= $data['Quanty10'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status19" id="checkbox" value="1" <?php echo $s_status19 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status19" id="checkbox" value="1" <?php echo $us_status19 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark19" id="emer20" value="<?= $data['remark19'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status20" id="checkbox" value="1" <?php echo $s_status20 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status20" id="checkbox" value="1" <?php echo $us_status20 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark20" id="emer21" value="<?= $data['remark20'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Crew Life Vest</td>
                                <td><input type="number" name="qty10" value="<?= $data['Quanty11'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status21" id="checkbox" value="1" <?php echo $s_status21 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status21" id="checkbox" value="1" <?php echo $us_status21 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark21" id="emer22" value="<?= $data['remark21'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status22" id="checkbox" value="1" <?php echo $s_status22 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status22" id="checkbox" value="1" <?php echo $us_status22 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark22" id="emer23" value="<?= $data['remark22'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Passenger Life Vest</td>
                                <td><input type="number" name="qty11" value="<?= $data['Quanty12'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status23" id="checkbox" value="1" <?php echo $s_status23 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status23" id="checkbox" value="1" <?php echo $us_status23 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark23" id="emer24" value="<?= $data['remark23'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status24" id="checkbox" value="1" <?php echo $s_status24 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status24" id="checkbox" value="1" <?php echo $us_status24 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark24" id="emer25" value="<?= $data['remark24'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Spare Adult Life Vest</td>
                                <td><input type="number" name="qty12" value="<?= $data['Quanty13'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status25" id="checkbox" value="1" <?php echo $s_status25 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status25" id="checkbox" value="1" <?php echo $us_status25 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark25" id="emer26" value="<?= $data['remark25'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status26" id="checkbox" value="1" <?php echo $s_status26 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status26" id="checkbox" value="1" <?php echo $us_status26 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark26" id="emer27" value="<?= $data['remark26'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Infant Life Vest</td>
                                <td><input type="number" name="qty13" value="<?= $data['Quanty14'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status27" id="checkbox" value="1" <?php echo $s_status27 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status27" id="checkbox" value="1" <?php echo $us_status27 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark27" id="emer28" value="<?= $data['remark27'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status28" id="checkbox" value="1" <?php echo $s_status28 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status28" id="checkbox" value="1" <?php echo $us_status28 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark28" id="emer29" value="<?= $data['remark28'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Infant Seat Belt</td>
                                <td><input type="number" name="qty14" value="<?= $data['Quanty15'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status29" id="checkbox" value="1" <?php echo $s_status29 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status29" id="checkbox" value="1" <?php echo $us_status29 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark29" id="emer30" value="<?= $data['remark29'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status30" id="checkbox" value="1" <?php echo $s_status30 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status30" id="checkbox" value="1" <?php echo $us_status30 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark30" id="emer31" value="<?= $data['remark30'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Extension Seat Belt</td>
                                <td><input type="number" name="qty15" value="<?= $data['Quanty16'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status31" id="checkbox" value="1" <?php echo $s_status31 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status31" id="checkbox" value="1" <?php echo $us_status31 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark31" id="emer32" value="<?= $data['remark31'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status32" id="checkbox" value="1" <?php echo $s_status32 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status32" id="checkbox" value="1" <?php echo $us_status32 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark32" id="emer33" value="<?= $data['remark32'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Spare Seat Belt</td>
                                <td><input type="number" name="qty16" value="<?= $data['Quanty17'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status33" id="checkbox" value="1" <?php echo $s_status33 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status33" id="checkbox" value="1" <?php echo $us_status33 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark33" id="emer34" value="<?= $data['remark33'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status34" id="checkbox" value="1" <?php echo $s_status34 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status34" id="checkbox" value="1" <?php echo $us_status34 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark34" id="emer35" value="<?= $data['remark34'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Survival Kit</td>
                                <td><input type="number" name="qty17" value="<?= $data['Quanty18'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status35" id="checkbox" value="1" <?php echo $s_status35 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status35" id="checkbox" value="1" <?php echo $us_status35 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark35" id="emer36" value="<?= $data['remark35'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status36" id="checkbox" value="1" <?php echo $s_status36 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status36" id="checkbox" value="1" <?php echo $us_status36 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark36" id="emer37" value="<?= $data['remark36'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>ELT</td>
                                <td><input type="number" name="qty18" value="<?= $data['Quanty19'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status37" id="checkbox" value="1" <?php echo $s_status37 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status37" id="checkbox" value="1" <?php echo $us_status37 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark37" id="emer38" value="<?= $data['remark37'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status38" id="checkbox" value="1" <?php echo $s_status38 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status38" id="checkbox" value="1" <?php echo $us_status38 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark38" id="emer39" value="<?= $data['remark38'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Firts Aid Kit</td>
                                <td><input type="number" name="qty19" value="<?= $data['Quanty20'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status39" id="checkbox" value="1" <?php echo $s_status39 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status39" id="checkbox" value="1" <?php echo $us_status39 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark39" id="emer40" value="<?= $data['remark39'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status40" id="checkbox" value="1" <?php echo $s_status40 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status40" id="checkbox" value="1" <?php echo $us_status40 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark40" id="emer41" value="<?= $data['remark40'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>EMK</td>
                                <td><input type="number" name="qty20" value="<?= $data['Quanty21'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status41" id="checkbox" value="1" <?php echo $s_status41 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status41" id="checkbox" value="1" <?php echo $us_status41 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark41" id="emer42" value="<?= $data['remark41'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status42" id="checkbox" value="1" <?php echo $s_status42 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status42" id="checkbox" value="1" <?php echo $us_status42 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark42" id="emer43" value="<?= $data['remark42'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Safety Demo Kit</td>
                                <td><input type="number" name="qty21" value="<?= $data['Quanty22'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status43" id="checkbox" value="1" <?php echo $s_status43 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status43" id="checkbox" value="1" <?php echo $us_status43 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark43" id="emer44" value="<?= $data['remark43'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status44" id="checkbox" value="1" <?php echo $s_status44 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status44" id="checkbox" value="1" <?php echo $us_status44 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark44" id="emer45" value="<?= $data['remark44'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Door Barrier Strap</td>
                                <td><input type="number" name="qty22" value="<?= $data['Quanty23'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status45" id="checkbox" value="1" <?php echo $s_status45 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status45" id="checkbox" value="1" <?php echo $us_status45 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark45" id="emer46" value="<?= $data['remark45'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status46" id="checkbox" value="1" <?php echo $s_status46 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status46" id="checkbox" value="1" <?php echo $us_status46 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark46" id="emer47" value="<?= $data['remark46'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Cabin Headset</td>
                                <td><input type="number" name="qty23" value="<?= $data['Quanty24'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status47" id="checkbox" value="1" <?php echo $s_status47 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status47" id="checkbox" value="1" <?php echo $us_status47 ==  1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark47" id="emer49" value="<?= $data['remark47'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status48" id="checkbox" value="1" <?php echo $s_status48 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status48" id="checkbox" value="1" <?php echo $us_status48 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark48" id="emer50" value="<?= $data['remark48'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Restraint Kit</td>
                                <td><input type="number" name="qty24" value="<?= $data['Quanty25'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status49" id="checkbox" value="1" <?php echo $s_status49 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status49" id="checkbox" value="1" <?php echo $us_status49 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark49" id="emer51" value="<?= $data['remark49'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status50" id="checkbox" value="1" <?php echo $s_status50 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status50" id="checkbox" value="1" <?php echo $us_status50 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark50" id="emer52" value="<?= $data['remark50'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>MRT</td>
                                <td><input type="number" name="qty25" id="emer2" value="<?= $data['Quanty26'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status51" id="checkbox" value="1" <?php echo $s_status51 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status51" id="checkbox" value="1" <?php echo $us_status51 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark51" id="emer53" value="<?= $data['remark51'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status52" id="checkbox" value="1" <?php echo $s_status52 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status52" id="checkbox" value="1" <?php echo $us_status52 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark52" id="emer54" value="<?= $data['remark52'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Fire Proof Gloves</td>
                                <td><input type="number" name="qty26" id="emer2" value="<?= $data['Quanty27'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status53" id="checkbox" value="1" <?php echo $s_status53 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status53" id="checkbox" value="1" <?php echo $us_status53 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark53" id="emer55" value="<?= $data['remark53'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status54" id="checkbox" value="1" <?php echo $s_status54 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status54" id="checkbox" value="1" <?php echo $us_status54 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark54" id="emer56" value="<?= $data['remark54'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Life Line</td>
                                <td><input type="number" name="qty27" id="emer2" value="<?= $data['Quanty28'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status55" id="checkbox" value="1" <?php echo $s_status55 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status55" id="checkbox" value="1" <?php echo $us_status55 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark55" id="emer57" value="<?= $data['remark55'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status56" id="checkbox" value="1" <?php echo $s_status56 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status56" id="checkbox" value="1" <?php echo $us_status56 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark56" id="emer58" value="<?= $data['remark56'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>UPK</td>
                                <td><input type="number" name="qty28" id="emer2" value="<?= $data['Quanty29'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status57" id="checkbox" value="1" <?php echo $s_status57 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status57" id="checkbox" value="1" <?php echo $us_status57 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark57" id="emer59" value="<?= $data['remark57'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status58" id="checkbox" value="1" <?php echo $s_status58 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status58" id="checkbox" value="1" <?php echo $us_status58 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark58" id="emer60" value="<?= $data['remark58'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>DG Kit</td>
                                <td><input type="number" name="qty29" id="emer2" value="<?= $data['Quanty30'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status59" id="checkbox" value="1" <?php echo $s_status59 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status59" id="checkbox" value="1" <?php echo $us_status59 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark59" id="emer61" value="<?= $data['remark59'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status60" id="checkbox" value="1" <?php echo $s_status60 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status60" id="checkbox" value="1" <?php echo $us_status60 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark60" id="emer62" value="<?= $data['remark60'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Safety Instruction Card</td>
                                <td><input type="number" name="qty30" id="emer2" value="<?= $data['Quanty31'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status61" id="checkbox" value="1" <?php echo $s_status61 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status61" id="checkbox" value="1" <?php echo $us_status61 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark61" id="emer63" value="<?= $data['remark61'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status62" id="checkbox" value="1" <?php echo $s_status62 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status62" id="checkbox" value="1" <?php echo $us_status62 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark62" id="emer64" value="<?= $data['remark62'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                            <tr>
                                <td>Exit Row Seating Criteria</td>
                                <td><input type="number" name="qty31" id="emer2" value="<?= $data['Quanty32'] ?>" style="margin-left: 5px;"></td>
                                <td><input type="checkbox" name="s_status63" id="checkbox" value="1" <?php echo $s_status63 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status63" id="checkbox" value="1" <?php echo $us_status63 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark63" id="emer65" value="<?= $data['remark63'] ?>" style="margin-left: 5px;" readonly></td>
                                <td><input type="checkbox" name="s_status64" id="checkbox" value="1" <?php echo $s_status64 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="checkbox" name="us_status64" id="checkbox" value="1" <?php echo $us_status64 == 1 ? 'checked' : ''; ?>></td>
                                <td><input type="text" name="remark64" id="emer66" value="<?= $data['remark64'] ?>" style="margin-left: 5px;" readonly></td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table" width="50%">
                            <tr>
                                <td align="center"><B>CABIN CREW IN CHARGE</B></td>
                                <td align="center"><B>PILOT IN COMMAND</B></td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>                                        
                    </div>

                </div>
            </div>

        </form>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>