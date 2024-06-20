<?php
defined('BASEPATH') or exit('No direct script access allowed');

class logic extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */


    public function __construct()
    {
        parent::__construct();
        // Memuat library session di dalam constructor
        $this->load->library('session');
        $this->load->helper('url'); // Memuat helper url

    }


    public function logicc()
    {

        // $this->load->database();
        // panggil koneksi database 
        // include 'koneksi.php';

        // koneksi database
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "preflight";

        // buat koneksinya 
        $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

        // Query untuk mendapatkan data dari tabel
        $sql = "SELECT id, pilihan FROM prepos";
        $result = $koneksi->query($sql);

        // uji jika tombol simpan di klik 
        if (isset($_POST['bsimpan'])) {
            // Ambil nilai dari form
            $tflt = $_POST['tflt'];
            if (!empty($_POST['tflt'])) {
                $tflt = mysqli_real_escape_string($koneksi, $_POST['tflt']);
                $tflt = str_replace(['"', "'", '/', '\\'], '', $tflt);
            } else {
                $tflt = "";
            }


            $treg = $_POST['treg'];
            if (!empty($_POST['treg'])) {
                $treg = mysqli_real_escape_string($koneksi, $_POST['treg']);
                $treg = str_replace(['"', "'", '/', '\\'], '', $treg);
            } else {
                $treg = "";
            }


            $tdate = $_POST['tdate'];
            if (!empty($_POST['tdate'])) {
                $tdate = mysqli_real_escape_string($koneksi, $_POST['tdate']);
                $tdate = str_replace(['"', "'", '/', '\\'], '', $tdate);
            } else {
                $tdate = "";
            }


            $tdep = $_POST['tdep'];
            if (!empty($_POST['tdep'])) {
                $tdep = mysqli_real_escape_string($koneksi, $_POST['tdep']);
                $tdep = str_replace(['"', "'", '/', '\\'], '', $tdep);
            } else {
                $tdep = "";
            }


            // Cek apakah checkbox 'emergency' dicentang atau tidak
            // $is_checked = isset($_POST["is_checked"]) ? 1 : 0;

            $quantyValue = $_POST['qty'];
            if (!empty($_POST['qty'])) {
                $quantyValue = mysqli_real_escape_string($koneksi, $_POST['qty']);
                $quantyValue = str_replace(['"', "'", '/', '\\'], '', $quantyValue);
            } else {
                $quantyValue = "";
            }

            $s_status = isset($_POST['s_status']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status = isset($_POST["us_status"]) ? 1 : 0;
            $remark = $_POST['remark1'];
            if (!empty($_POST['remark1'])) {
                $remark = mysqli_real_escape_string($koneksi, $_POST['remark1']);
                $remark = str_replace(['"', "'", '/', '\\'], '', $remark);
            } else {
                $remark = "";
            }


            $s_status2 = isset($_POST['s_status2']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status2 = isset($_POST["us_status2"]) ? 1 : 0;
            $remark2 = $_POST['remark2'];
            if (!empty($_POST['remark2'])) {
                $remark2 = mysqli_real_escape_string($koneksi, $_POST['remark2']);
                $remark2 = str_replace(['"', "'", '/', '\\'], '', $remark2);
            } else {
                $remark2 = "";
            }




            $quantyValue1 = $_POST['qty1'];
            if (!empty($_POST['qty1'])) {
                $quantyValue1 = mysqli_real_escape_string($koneksi, $_POST['qty1']);
                $quantyValue1 = str_replace(['"', "'", '/', '\\'], '', $quantyValue1);
            } else {
                $quantyValue1 = "";
            }

            $s_status3 = isset($_POST['s_status3']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status3 = isset($_POST['us_status3']) ? 1 : 0; // Sama seperti di atas
            $remark3 = $_POST['remark3'];
            if (!empty($_POST['remark3'])) {
                $remark3 = mysqli_real_escape_string($koneksi, $_POST['remark3']);
                $remark3 = str_replace(['"', "'", '/', '\\'], '', $remark3);
            } else {
                $remark3 = "";
            }

            $s_status4 = isset($_POST['s_status4']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status4 = isset($_POST['us_status4']) ? 1 : 0; // Sama seperti di atas
            $remark4 = $_POST['remark4'];
            if (!empty($_POST['remark3'])) {
                $remark3 = mysqli_real_escape_string($koneksi, $_POST['remark3']);
                $remark3 = str_replace(['"', "'", '/', '\\'], '', $remark3);
            } else {
                $remark3 = "";
            }




            $quantyValue2 = $_POST['qty2'];
            if (!empty($_POST['qty2'])) {
                $quantyValue2 = mysqli_real_escape_string($koneksi, $_POST['qty2']);
                $quantyValue2 = str_replace(['"', "'", '/', '\\'], '', $quantyValue2);
            } else {
                $quantyValue2 = "";
            }

            $s_status5 = isset($_POST['s_status5']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status5 = isset($_POST['us_status5']) ? 1 : 0; // Sama seperti di atas
            $remark5 = $_POST['remark5'];
            if (!empty($_POST['remark5'])) {
                $remark5 = mysqli_real_escape_string($koneksi, $_POST['remark5']);
                $remark5 = str_replace(['"', "'", '/', '\\'], '', $remark5);
            } else {
                $remark5 = "";
            }

            $s_status6 = isset($_POST['s_status6']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status6 = isset($_POST['us_status6']) ? 1 : 0; // Sama seperti di atas
            $remark6 = $_POST['remark6'];
            if (!empty($_POST['remark6'])) {
                $remark6 = mysqli_real_escape_string($koneksi, $_POST['remark6']);
                $remark6 = str_replace(['"', "'", '/', '\\'], '', $remark6);
            } else {
                $remark6 = "";
            }




            $quantyValue3 = $_POST['qty3'];
            if (!empty($_POST['qty3'])) {
                $quantyValue3 = mysqli_real_escape_string($koneksi, $_POST['qty3']);
                $quantyValue3 = str_replace(['"', "'", '/', '\\'], '', $quantyValue3);
            } else {
                $quantyValue3 = "";
            }

            $s_status7 = isset($_POST['s_status7']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status7 = isset($_POST['us_status7']) ? 1 : 0; // Sama seperti di atas
            $remark7 = $_POST['remark7'];
            if (!empty($_POST['remark7'])) {
                $remark7 = mysqli_real_escape_string($koneksi, $_POST['remark7']);
                $remark7 = str_replace(['"', "'", '/', '\\'], '', $remark7);
            } else {
                $remark7 = "";
            }

            $s_status8 = isset($_POST['s_status8']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status8 = isset($_POST['us_status8']) ? 1 : 0; // Sama seperti di atas
            $remark8 = $_POST['remark8'];
            if (!empty($_POST['remark8'])) {
                $remark8 = mysqli_real_escape_string($koneksi, $_POST['remark8']);
                $remark8 = str_replace(['"', "'", '/', '\\'], '', $remark8);
            } else {
                $remark8 = "";
            }




            $quantyValue4 = $_POST['qty4'];
            if (!empty($_POST['qty4'])) {
                $quantyValue4 = mysqli_real_escape_string($koneksi, $_POST['qty4']);
                $quantyValue4 = str_replace(['"', "'", '/', '\\'], '', $quantyValue4);
            } else {
                $quantyValue4 = "";
            }

            $s_status9 = isset($_POST['s_status9']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status9 = isset($_POST['us_status9']) ? 1 : 0; // Sama seperti di atas
            $remark9 = $_POST['remark9'];
            if (!empty($_POST['remark9'])) {
                $remark9 = mysqli_real_escape_string($koneksi, $_POST['remark9']);
                $remark9 = str_replace(['"', "'", '/', '\\'], '', $remark9);
            } else {
                $remark9 = "";
            }

            $s_status10 = isset($_POST['s_status10']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status10 = isset($_POST['us_status10']) ? 1 : 0; // Sama seperti di atas
            $remark10 = $_POST['remark10'];
            if (!empty($_POST['remark10'])) {
                $remark10 = mysqli_real_escape_string($koneksi, $_POST['remark10']);
                $remark10 = str_replace(['"', "'", '/', '\\'], '', $remark10);
            } else {
                $remark10 = "";
            }




            $quantyValue5 = $_POST['qty5'];
            if (!empty($_POST['qty5'])) {
                $quantyValue5 = mysqli_real_escape_string($koneksi, $_POST['qty5']);
                $quantyValue5 = str_replace(['"', "'", '/', '\\'], '', $quantyValue5);
            } else {
                $quantyValue5 = "";
            }

            $s_status11 = isset($_POST['s_status11']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status11 = isset($_POST['us_status11']) ? 1 : 0; // Sama seperti di atas
            $remark11 = $_POST['remark11'];
            if (!empty($_POST['remark11'])) {
                $remark11 = mysqli_real_escape_string($koneksi, $_POST['remark11']);
                $remark11 = str_replace(['"', "'", '/', '\\'], '', $remark11);
            } else {
                $remark11 = "";
            }

            $s_status12 = isset($_POST['s_status12']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status12 = isset($_POST['us_status12']) ? 1 : 0; // Sama seperti di atas
            $remark12 = $_POST['remark12'];
            if (!empty($_POST['remark12'])) {
                $remark12 = mysqli_real_escape_string($koneksi, $_POST['remark12']);
                $remark12 = str_replace(['"', "'", '/', '\\'], '', $remark12);
            } else {
                $remark12 = "";
            }




            $quantyValue6 = $_POST['qty6'];
            if (!empty($_POST['qty6'])) {
                $quantyValue6 = mysqli_real_escape_string($koneksi, $_POST['qty6']);
                $quantyValue6 = str_replace(['"', "'", '/', '\\'], '', $quantyValue6);
            } else {
                $quantyValue6 = "";
            }

            $s_status13 = isset($_POST['s_status13']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status13 = isset($_POST['us_status13']) ? 1 : 0; // Sama seperti di atas
            $remark13 = $_POST['remark13'];
            if (!empty($_POST['remark13'])) {
                $remark13 = mysqli_real_escape_string($koneksi, $_POST['remark13']);
                $remark13 = str_replace(['"', "'", '/', '\\'], '', $remark13);
            } else {
                $remark13 = "";
            }

            $s_status14 = isset($_POST['s_status14']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status14 = isset($_POST['us_status14']) ? 1 : 0; // Sama seperti di atas
            $remark14 = $_POST['remark14'];
            if (!empty($_POST['remark14'])) {
                $remark14 = mysqli_real_escape_string($koneksi, $_POST['remark14']);
                $remark14 = str_replace(['"', "'", '/', '\\'], '', $remark14);
            } else {
                $remark14 = "";
            }




            $quantyValue7 = $_POST['qty7'];
            if (!empty($_POST['qty7'])) {
                $quantyValue7 = mysqli_real_escape_string($koneksi, $_POST['qty7']);
                $quantyValue7 = str_replace(['"', "'", '/', '\\'], '', $quantyValue7);
            } else {
                $quantyValue7 = "";
            }

            $s_status15 = isset($_POST['s_status15']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status15 = isset($_POST['us_status15']) ? 1 : 0; // Sama seperti di atas
            $remark15 = $_POST['remark15'];
            if (!empty($_POST['remark15'])) {
                $remark15 = mysqli_real_escape_string($koneksi, $_POST['remark15']);
                $remark15 = str_replace(['"', "'", '/', '\\'], '', $remark15);
            } else {
                $remark15 = "";
            }

            $s_status16 = isset($_POST['s_status16']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status16 = isset($_POST['us_status16']) ? 1 : 0; // Sama seperti di atas
            $remark16 = $_POST['remark16'];
            if (!empty($_POST['remark16'])) {
                $remark16 = mysqli_real_escape_string($koneksi, $_POST['remark16']);
                $remark16 = str_replace(['"', "'", '/', '\\'], '', $remark16);
            } else {
                $remark16 = "";
            }




            $quantyValue8 = $_POST['qty8'];
            if (!empty($_POST['qty8'])) {
                $quantyValue8 = mysqli_real_escape_string($koneksi, $_POST['qty8']);
                $quantyValue8 = str_replace(['"', "'", '/', '\\'], '', $quantyValue8);
            } else {
                $quantyValue8 = "";
            }

            $s_status17 = isset($_POST['s_status17']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status17 = isset($_POST['us_status17']) ? 1 : 0; // Sama seperti di atas
            $remark17 = $_POST['remark17'];
            if (!empty($_POST['remark17'])) {
                $remark17 = mysqli_real_escape_string($koneksi, $_POST['remark17']);
                $remark17 = str_replace(['"', "'", '/', '\\'], '', $remark17);
            } else {
                $remark17 = "";
            }

            $s_status18 = isset($_POST['s_status18']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status18 = isset($_POST['us_status18']) ? 1 : 0; // Sama seperti di atas
            $remark18 = $_POST['remark18'];
            if (!empty($_POST['remark18'])) {
                $remark18 = mysqli_real_escape_string($koneksi, $_POST['remark18']);
                $remark18 = str_replace(['"', "'", '/', '\\'], '', $remark18);
            } else {
                $remark18 = "";
            }




            $quantyValue9 = $_POST['qty9'];
            if (!empty($_POST['qty9'])) {
                $quantyValue9 = mysqli_real_escape_string($koneksi, $_POST['qty9']);
                $quantyValue9 = str_replace(['"', "'", '/', '\\'], '', $quantyValue9);
            } else {
                $quantyValue9 = "";
            }

            $s_status19 = isset($_POST['s_status19']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status19 = isset($_POST['us_status19']) ? 1 : 0; // Sama seperti di atas
            $remark19 = $_POST['remark19'];
            if (!empty($_POST['remark19'])) {
                $remark19 = mysqli_real_escape_string($koneksi, $_POST['remark19']);
                $remark19 = str_replace(['"', "'", '/', '\\'], '', $remark19);
            } else {
                $remark19 = "";
            }

            $s_status20 = isset($_POST['s_status20']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status20 = isset($_POST['us_status20']) ? 1 : 0; // Sama seperti di atas
            $remark20 = $_POST['remark20'];
            if (!empty($_POST['remark20'])) {
                $remark20 = mysqli_real_escape_string($koneksi, $_POST['remark20']);
                $remark20 = str_replace(['"', "'", '/', '\\'], '', $remark20);
            } else {
                $remark20 = "";
            }




            $quantyValue10 = $_POST['qty10'];
            if (!empty($_POST['qty10'])) {
                $quantyValue10 = mysqli_real_escape_string($koneksi, $_POST['qty10']);
                $quantyValue10 = str_replace(['"', "'", '/', '\\'], '', $quantyValue10);
            } else {
                $quantyValue10 = "";
            }

            $s_status21 = isset($_POST['s_status21']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status21 = isset($_POST['us_status21']) ? 1 : 0; // Sama seperti di atas
            $remark21 = $_POST['remark21'];
            if (!empty($_POST['remark21'])) {
                $remark21 = mysqli_real_escape_string($koneksi, $_POST['remark21']);
                $remark21 = str_replace(['"', "'", '/', '\\'], '', $remark21);
            } else {
                $remark21 = "";
            }

            $s_status22 = isset($_POST['s_status22']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status22 = isset($_POST['us_status22']) ? 1 : 0; // Sama seperti di atas
            $remark22 = $_POST['remark22'];
            if (!empty($_POST['remark22'])) {
                $remark22 = mysqli_real_escape_string($koneksi, $_POST['remark22']);
                $remark22 = str_replace(['"', "'", '/', '\\'], '', $remark22);
            } else {
                $remark22 = "";
            }





            $quantyValue11 = $_POST['qty11'];
            if (!empty($_POST['qty11'])) {
                $quantyValue11 = mysqli_real_escape_string($koneksi, $_POST['qty11']);
                $quantyValue11 = str_replace(['"', "'", '/', '\\'], '', $quantyValue11);
            } else {
                $quantyValue11 = "";
            }

            $s_status23 = isset($_POST['s_status23']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status23 = isset($_POST['us_status23']) ? 1 : 0; // Sama seperti di atas
            $remark23 = $_POST['remark23'];
            if (!empty($_POST['remark23'])) {
                $remark23 = mysqli_real_escape_string($koneksi, $_POST['remark23']);
                $remark23 = str_replace(['"', "'", '/', '\\'], '', $remark23);
            } else {
                $remark23 = "";
            }

            $s_status24 = isset($_POST['s_status24']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status24 = isset($_POST['us_status24']) ? 1 : 0; // Sama seperti di atas
            $remark24 = $_POST['remark24'];
            if (!empty($_POST['remark24'])) {
                $remark24 = mysqli_real_escape_string($koneksi, $_POST['remark24']);
                $remark24 = str_replace(['"', "'", '/', '\\'], '', $remark24);
            } else {
                $remark24 = "";
            }




            $quantyValue12 = $_POST['qty12'];
            if (!empty($_POST['qty12'])) {
                $quantyValue12 = mysqli_real_escape_string($koneksi, $_POST['qty12']);
                $quantyValue12 = str_replace(['"', "'", '/', '\\'], '', $quantyValue12);
            } else {
                $quantyValue12 = "";
            }

            $s_status25 = isset($_POST['s_status25']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status25 = isset($_POST['us_status25']) ? 1 : 0; // Sama seperti di atas
            $remark25 = $_POST['remark25'];
            if (!empty($_POST['remark25'])) {
                $remark25 = mysqli_real_escape_string($koneksi, $_POST['remark25']);
                $remark25 = str_replace(['"', "'", '/', '\\'], '', $remark25);
            } else {
                $remark25 = "";
            }

            $s_status26 = isset($_POST['s_status26']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status26 = isset($_POST['us_status26']) ? 1 : 0; // Sama seperti di atas
            $remark26 = $_POST['remark26'];
            if (!empty($_POST['remark26'])) {
                $remark26 = mysqli_real_escape_string($koneksi, $_POST['remark26']);
                $remark26 = str_replace(['"', "'", '/', '\\'], '', $remark26);
            } else {
                $remark26 = "";
            }




            $quantyValue13 = $_POST['qty13'];
            if (!empty($_POST['qty13'])) {
                $quantyValue13 = mysqli_real_escape_string($koneksi, $_POST['qty13']);
                $quantyValue13 = str_replace(['"', "'", '/', '\\'], '', $remark26);
            } else {
                $quantyValue13 = "";
            }

            $s_status27 = isset($_POST['s_status27']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status27 = isset($_POST['us_status27']) ? 1 : 0; // Sama seperti di atas
            $remark27 = $_POST['remark27'];
            if (!empty($_POST['remark27'])) {
                $remark27 = mysqli_real_escape_string($koneksi, $_POST['remark27']);
                $remark27 = str_replace(['"', "'", '/', '\\'], '', $remark27);
            } else {
                $remark27 = "";
            }

            $s_status28 = isset($_POST['s_status28']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status28 = isset($_POST['us_status28']) ? 1 : 0; // Sama seperti di atas
            $remark28 = $_POST['remark28'];
            if (!empty($_POST['remark28'])) {
                $remark28 = mysqli_real_escape_string($koneksi, $_POST['remark28']);
                $remark28 = str_replace(['"', "'", '/', '\\'], '', $remark28);
            } else {
                $remark28 = "";
            }





            $quantyValue14 = $_POST['qty14'];
            if (!empty($_POST['qty14'])) {
                $quantyValue14 = mysqli_real_escape_string($koneksi, $_POST['qty14']);
                $quantyValue14 = str_replace(['"', "'", '/', '\\'], '', $quantyValue14);
            } else {
                $quantyValue14 = "";
            }

            $s_status29 = isset($_POST['s_status29']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status29 = isset($_POST['us_status29']) ? 1 : 0; // Sama seperti di atas
            $remark29 = $_POST['remark29'];
            if (!empty($_POST['remark29'])) {
                $remark29 = mysqli_real_escape_string($koneksi, $_POST['remark29']);
                $remark29 = str_replace(['"', "'", '/', '\\'], '', $remark29);
            } else {
                $remark29 = "";
            }

            $s_status30 = isset($_POST['s_status30']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status30 = isset($_POST['us_status30']) ? 1 : 0; // Sama seperti di atas
            $remark30 = $_POST['remark30'];
            if (!empty($_POST['remark30'])) {
                $remark30 = mysqli_real_escape_string($koneksi, $_POST['remark30']);
                $remark30 = str_replace(['"', "'", '/', '\\'], '', $remark30);
            } else {
                $remark30 = "";
            }





            $quantyValue15 = $_POST['qty15'];
            if (!empty($_POST['qty15'])) {
                $quantyValue15 = mysqli_real_escape_string($koneksi, $_POST['qty15']);
                $quantyValue15 = str_replace(['"', "'", '/', '\\'], '', $quantyValue15);
            } else {
                $quantyValue15 = "";
            }

            $s_status31 = isset($_POST['s_status31']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status31 = isset($_POST['us_status31']) ? 1 : 0; // Sama seperti di atas
            $remark31 = $_POST['remark31'];
            if (!empty($_POST['remark31'])) {
                $remark31 = mysqli_real_escape_string($koneksi, $_POST['remark31']);
                $remark31 = str_replace(['"', "'", '/', '\\'], '', $remark31);
            } else {
                $remark31 = "";
            }

            $s_status32 = isset($_POST['s_status32']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status32 = isset($_POST['us_status32']) ? 1 : 0; // Sama seperti di atas
            $remark32 = $_POST['remark32'];
            if (!empty($_POST['remark32'])) {
                $remark32 = mysqli_real_escape_string($koneksi, $_POST['remark32']);
                $remark32 = str_replace(['"', "'", '/', '\\'], '', $remark32);
            } else {
                $remark32 = "";
            }





            $quantyValue16 = $_POST['qty16'];
            if (!empty($_POST['qty16'])) {
                $quantyValue16 = mysqli_real_escape_string($koneksi, $_POST['qty16']);
                $quantyValue16 = str_replace(['"', "'", '/', '\\'], '', $quantyValue16);
            } else {
                $quantyValue16 = "";
            }

            $s_status33 = isset($_POST['s_status33']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status33 = isset($_POST['us_status33']) ? 1 : 0; // Sama seperti di atas
            $remark33 = $_POST['remark33'];
            if (!empty($_POST['remark33'])) {
                $remark33 = mysqli_real_escape_string($koneksi, $_POST['remark33']);
                $remark33 = str_replace(['"', "'", '/', '\\'], '', $remark33);
            } else {
                $remark33 = "";
            }

            $s_status34 = isset($_POST['s_status34']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status34 = isset($_POST['us_status34']) ? 1 : 0; // Sama seperti di atas
            $remark34 = $_POST['remark34'];
            if (!empty($_POST['remark34'])) {
                $remark34 = mysqli_real_escape_string($koneksi, $_POST['remark34']);
                $remark34 = str_replace(['"', "'", '/', '\\'], '', $remark34);
            } else {
                $remark34 = "";
            }





            $quantyValue17 = $_POST['qty17'];
            if (!empty($_POST['qty17'])) {
                $quantyValue17 = mysqli_real_escape_string($koneksi, $_POST['qty17']);
                $quantyValue17 = str_replace(['"', "'", '/', '\\'], '', $quantyValue17);
            } else {
                $quantyValue17 = "";
            }

            $s_status35 = isset($_POST['s_status35']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status35 = isset($_POST['us_status35']) ? 1 : 0; // Sama seperti di atas
            $remark35 = $_POST['remark35'];
            if (!empty($_POST['remark35'])) {
                $remark35 = mysqli_real_escape_string($koneksi, $_POST['remark35']);
                $remark35 = str_replace(['"', "'", '/', '\\'], '', $remark35);
            } else {
                $remark35 = "";
            }

            $s_status36 = isset($_POST['s_status36']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status36 = isset($_POST['us_status36']) ? 1 : 0; // Sama seperti di atas
            $remark36 = $_POST['remark36'];
            if (!empty($_POST['remark36'])) {
                $remark36 = mysqli_real_escape_string($koneksi, $_POST['remark36']);
                $remark36 = str_replace(['"', "'", '/', '\\'], '', $remark36);
            } else {
                $remark36 = "";
            }





            $quantyValue18 = $_POST['qty18'];
            if (!empty($_POST['qty18'])) {
                $quantyValue18 = mysqli_real_escape_string($koneksi, $_POST['qty18']);
                $quantyValue18 = str_replace(['"', "'", '/', '\\'], '', $remark36);
            } else {
                $quantyValue18 = "";
            }

            $s_status37 = isset($_POST['s_status37']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status37 = isset($_POST['us_status37']) ? 1 : 0; // Sama seperti di atas
            $remark37 = $_POST['remark37'];
            if (!empty($_POST['remark37'])) {
                $remark37 = mysqli_real_escape_string($koneksi, $_POST['remark37']);
                $remark37 = str_replace(['"', "'", '/', '\\'], '', $remark37);
            } else {
                $remark37 = "";
            }

            $s_status38 = isset($_POST['s_status38']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status38 = isset($_POST['us_status38']) ? 1 : 0; // Sama seperti di atas
            $remark38 = $_POST['remark38'];
            if (!empty($_POST['remark38'])) {
                $remark38 = mysqli_real_escape_string($koneksi, $_POST['remark38']);
                $remark38 = str_replace(['"', "'", '/', '\\'], '', $remark38);
            } else {
                $remark38 = "";
            }




            $quantyValue19 = $_POST['qty19'];
            if (!empty($_POST['qty19'])) {
                $quantyValue19 = mysqli_real_escape_string($koneksi, $_POST['qty19']);
                $quantyValue19 = str_replace(['"', "'", '/', '\\'], '', $quantyValue19);
            } else {
                $quantyValue19 = "";
            }

            $s_status39 = isset($_POST['s_status39']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status39 = isset($_POST['us_status39']) ? 1 : 0; // Sama seperti di atas
            $remark39 = $_POST['remark39'];
            if (!empty($_POST['remark39'])) {
                $remark39 = mysqli_real_escape_string($koneksi, $_POST['remark39']);
                $remark39 = str_replace(['"', "'", '/', '\\'], '', $remark39);
            } else {
                $remark39 = "";
            }

            $s_status40 = isset($_POST['s_status40']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status40 = isset($_POST['us_status40']) ? 1 : 0; // Sama seperti di atas
            $remark40 = $_POST['remark40'];
            if (!empty($_POST['remark40'])) {
                $remark40 = mysqli_real_escape_string($koneksi, $_POST['remark40']);
                $remark40 = str_replace(['"', "'", '/', '\\'], '', $remark40);
            } else {
                $remark40 = "";
            }




            $quantyValue20 = $_POST['qty20'];
            if (!empty($_POST['qty20'])) {
                $quantyValue20 = mysqli_real_escape_string($koneksi, $_POST['qty20']);
                $quantyValue20 = str_replace(['"', "'", '/', '\\'], '', $quantyValue20);
            } else {
                $quantyValue20 = "";
            }

            $s_status41 = isset($_POST['s_status41']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status41 = isset($_POST['us_status41']) ? 1 : 0; // Sama seperti di atas
            $remark41 = $_POST['remark41'];
            if (!empty($_POST['remark41'])) {
                $remark41 = mysqli_real_escape_string($koneksi, $_POST['remark41']);
                $remark41 = str_replace(['"', "'", '/', '\\'], '', $remark41);
            } else {
                $remark41 = "";
            }

            $s_status42 = isset($_POST['s_status42']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status42 = isset($_POST['us_status42']) ? 1 : 0; // Sama seperti di atas
            $remark42 = $_POST['remark42'];
            if (!empty($_POST['remark42'])) {
                $remark42 = mysqli_real_escape_string($koneksi, $_POST['remark42']);
                $remark42 = str_replace(['"', "'", '/', '\\'], '', $remark42);
            } else {
                $remark42 = "";
            }




            $quantyValue21 = $_POST['qty21'];
            if (!empty($_POST['qty21'])) {
                $quantyValue21 = mysqli_real_escape_string($koneksi, $_POST['qty21']);
                $quantyValue21 = str_replace(['"', "'", '/', '\\'], '', $quantyValue21);
            } else {
                $quantyValue21 = "";
            }

            $s_status43 = isset($_POST['s_status43']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status43 = isset($_POST['us_status43']) ? 1 : 0; // Sama seperti di atas
            $remark43 = $_POST['remark43'];
            if (!empty($_POST['remark43'])) {
                $remark43 = mysqli_real_escape_string($koneksi, $_POST['remark43']);
                $remark43 = str_replace(['"', "'", '/', '\\'], '', $remark43);
            } else {
                $remark43 = "";
            }

            $s_status44 = isset($_POST['s_status44']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status44 = isset($_POST['us_status44']) ? 1 : 0; // Sama seperti di atas
            $remark44 = $_POST['remark44'];
            if (!empty($_POST['remark44'])) {
                $remark44 = mysqli_real_escape_string($koneksi, $_POST['remark44']);
                $remark44 = str_replace(['"', "'", '/', '\\'], '', $remark44);
            } else {
                $remark44 = "";
            }





            $quantyValue22 = $_POST['qty22'];
            if (!empty($_POST['qty22'])) {
                $quantyValue22 = mysqli_real_escape_string($koneksi, $_POST['qty22']);
                $quantyValue22 = str_replace(['"', "'", '/', '\\'], '', $quantyValue22);
            } else {
                $quantyValue22 = "";
            }

            $s_status45 = isset($_POST['s_status45']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status45 = isset($_POST['us_status45']) ? 1 : 0; // Sama seperti di atas
            $remark45 = $_POST['remark45'];
            if (!empty($_POST['remark45'])) {
                $remark45 = mysqli_real_escape_string($koneksi, $_POST['remark45']);
                $remark45 = str_replace(['"', "'", '/', '\\'], '', $remark45);
            } else {
                $remark45 = "";
            }

            $s_status46 = isset($_POST['s_status46']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status46 = isset($_POST['us_status46']) ? 1 : 0; // Sama seperti di atas
            $remark46 = $_POST['remark46'];
            if (!empty($_POST['remark46'])) {
                $remark46 = mysqli_real_escape_string($koneksi, $_POST['remark46']);
                $remark46 = str_replace(['"', "'", '/', '\\'], '', $remark46);
            } else {
                $remark46 = "";
            }




            $quantyValue23 = $_POST['qty23'];
            if (!empty($_POST['qty23'])) {
                $quantyValue23 = mysqli_real_escape_string($koneksi, $_POST['qty23']);
                $quantyValue23 = str_replace(['"', "'", '/', '\\'], '', $quantyValue23);
            } else {
                $quantyValue23 = "";
            }

            $s_status47 = isset($_POST['s_status47']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status47 = isset($_POST['us_status47']) ? 1 : 0; // Sama seperti di atas
            $remark47 = $_POST['remark47'];
            if (!empty($_POST['remark47'])) {
                $remark47 = mysqli_real_escape_string($koneksi, $_POST['remark47']);
                $remark47 = str_replace(['"', "'", '/', '\\'], '', $remark47);
            } else {
                $remark47 = "";
            }

            $s_status48 = isset($_POST['s_status48']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status48 = isset($_POST['us_status48']) ? 1 : 0; // Sama seperti di atas
            $remark48 = $_POST['remark48'];
            if (!empty($_POST['remark48'])) {
                $remark48 = mysqli_real_escape_string($koneksi, $_POST['remark48']);
                $remark48 = str_replace(['"', "'", '/', '\\'], '', $remark48);
            } else {
                $remark48 = "";
            }




            $quantyValue24 = $_POST['qty24'];
            if (!empty($_POST['qty24'])) {
                $quantyValue24 = mysqli_real_escape_string($koneksi, $_POST['qty24']);
                $quantyValue24 = str_replace(['"', "'", '/', '\\'], '', $quantyValue24);
            } else {
                $quantyValue24 = "";
            }

            $s_status49 = isset($_POST['s_status49']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status49 = isset($_POST['us_status49']) ? 1 : 0; // Sama seperti di atas
            $remark49 = $_POST['remark49'];
            if (!empty($_POST['remark49'])) {
                $remark49 = mysqli_real_escape_string($koneksi, $_POST['remark49']);
                $remark49 = str_replace(['"', "'", '/', '\\'], '', $remark49);
            } else {
                $remark49 = "";
            }

            $s_status50 = isset($_POST['s_status50']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status50 = isset($_POST['us_status50']) ? 1 : 0; // Sama seperti di atas
            $remark50 = $_POST['remark50'];
            if (!empty($_POST['remark50'])) {
                $remark50 = mysqli_real_escape_string($koneksi, $_POST['remark50']);
                $remark50 = str_replace(['"', "'", '/', '\\'], '', $remark50);
            } else {
                $remark50 = "";
            }


            $quantyValue25 = $_POST['qty25'];
            if (!empty($_POST['qty25'])) {
                $quantyValue25 = mysqli_real_escape_string($koneksi, $_POST['qty25']);
                $quantyValue25 = str_replace(['"', "'", '/', '\\'], '', $quantyValue25);
            } else {
                $quantyValue25 = "";
            }

            $s_status51 = isset($_POST['s_status51']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status51 = isset($_POST['us_status51']) ? 1 : 0; // Sama seperti di atas
            $remark51 = $_POST['remark51'];
            if (!empty($_POST['qty25'])) {
                $quantyValue25 = mysqli_real_escape_string($koneksi, $_POST['qty25']);
                $quantyValue25 = str_replace(['"', "'", '/', '\\'], '', $quantyValue25);
            } else {
                $quantyValue25 = "";
            }

            $s_status52 = isset($_POST['s_status52']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status52 = isset($_POST['us_status52']) ? 1 : 0; // Sama seperti di atas
            $remark52 = $_POST['remark52'];
            if (!empty($_POST['remark52'])) {
                $remark52 = mysqli_real_escape_string($koneksi, $_POST['remark52']);
                $remark52 = str_replace(['"', "'", '/', '\\'], '', $remark52);
            } else {
                $remark52 = "";
            }


            $quantyValue26 = $_POST['qty26'];
            if (!empty($_POST['qty26'])) {
                $quantyValue26 = mysqli_real_escape_string($koneksi, $_POST['qty26']);
                $quantyValue26 = str_replace(['"', "'", '/', '\\'], '', $quantyValue26);
            } else {
                $quantyValue26 = "";
            }

            $s_status53 = isset($_POST['s_status53']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status53 = isset($_POST['us_status53']) ? 1 : 0; // Sama seperti di atas
            $remark53 = $_POST['remark53'];
            if (!empty($_POST['remark53'])) {
                $remark53 = mysqli_real_escape_string($koneksi, $_POST['remark53']);
                $remark53 = str_replace(['"', "'", '/', '\\'], '', $remark53);
            } else {
                $remark53 = "";
            }

            $s_status54 = isset($_POST['s_status54']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status54 = isset($_POST['us_status54']) ? 1 : 0; // Sama seperti di atas
            $remark54 = $_POST['remark54'];
            if (!empty($_POST['remark54'])) {
                $remark54 = mysqli_real_escape_string($koneksi, $_POST['remark54']);
                $remark54 = str_replace(['"', "'", '/', '\\'], '', $remark54);
            } else {
                $remark54 = "";
            }




            $quantyValue27 = $_POST['qty27'];
            if (!empty($_POST['qty27'])) {
                $quantyValue27 = mysqli_real_escape_string($koneksi, $_POST['qty27']);
                $quantyValue27 = str_replace(['"', "'", '/', '\\'], '', $quantyValue27);
            } else {
                $quantyValue27 = "";
            }

            $s_status55 = isset($_POST['s_status55']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status55 = isset($_POST['us_status55']) ? 1 : 0; // Sama seperti di atas
            $remark55 = $_POST['remark55'];
            if (!empty($_POST['qty27'])) {
                $quantyValue27 = mysqli_real_escape_string($koneksi, $_POST['qty27']);
                $quantyValue27 = str_replace(['"', "'", '/', '\\'], '', $quantyValue27);
            } else {
                $quantyValue27 = "";
            }

            $s_status56 = isset($_POST['s_status56']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status56 = isset($_POST['us_status56']) ? 1 : 0; // Sama seperti di atas
            $remark56 = $_POST['remark56'];
            if (!empty($_POST['remark56'])) {
                $remark56 = mysqli_real_escape_string($koneksi, $_POST['remark56']);
                $remark56 = str_replace(['"', "'", '/', '\\'], '', $remark56);
            } else {
                $remark56 = "";
            }





            $quantyValue28 = $_POST['qty28'];
            if (!empty($_POST['qty28'])) {
                $quantyValue28 = mysqli_real_escape_string($koneksi, $_POST['qty28']);
                $quantyValue28 = str_replace(['"', "'", '/', '\\'], '', $quantyValue28);
            } else {
                $quantyValue28 = "";
            }

            $s_status57 = isset($_POST['s_status57']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status57 = isset($_POST['us_status57']) ? 1 : 0; // Sama seperti di atas
            $remark57 = $_POST['remark57'];
            if (!empty($_POST['remark57'])) {
                $remark57 = mysqli_real_escape_string($koneksi, $_POST['remark57']);
                $remark57 = str_replace(['"', "'", '/', '\\'], '', $remark57);
            } else {
                $remark57 = "";
            }

            $s_status58 = isset($_POST['s_status58']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status58 = isset($_POST['us_status58']) ? 1 : 0; // Sama seperti di atas
            $remark58 = $_POST['remark58'];
            if (!empty($_POST['remark58'])) {
                $remark58 = mysqli_real_escape_string($koneksi, $_POST['remark58']);
                $remark58 = str_replace(['"', "'", '/', '\\'], '', $remark58);
            } else {
                $remark58 = "";
            }





            $quantyValue29 = $_POST['qty29'];
            if (!empty($_POST['qty29'])) {
                $quantyValue29 = mysqli_real_escape_string($koneksi, $_POST['qty29']);
                $quantyValue29 = str_replace(['"', "'", '/', '\\'], '', $quantyValue29);
            } else {
                $quantyValue29 = "";
            }

            $s_status59 = isset($_POST['s_status59']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status59 = isset($_POST['us_status59']) ? 1 : 0; // Sama seperti di atas
            $remark59 = $_POST['remark59'];
            if (!empty($_POST['remark59'])) {
                $remark59 = mysqli_real_escape_string($koneksi, $_POST['remark59']);
                $remark59 = str_replace(['"', "'", '/', '\\'], '', $remark59);
            } else {
                $remark59 = "";
            }

            $s_status60 = isset($_POST['s_status60']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status60 = isset($_POST['us_status60']) ? 1 : 0; // Sama seperti di atas
            $remark60 = $_POST['remark60'];
            if (!empty($_POST['remark60'])) {
                $remark60 = mysqli_real_escape_string($koneksi, $_POST['remark60']);
                $remark60 = str_replace(['"', "'", '/', '\\'], '', $remark60);
            } else {
                $remark60 = "";
            }





            $quantyValue30 = $_POST['qty30'];
            if (!empty($_POST['qty30'])) {
                $quantyValue30 = mysqli_real_escape_string($koneksi, $_POST['remark60']);
                $quantyValue30 = str_replace(['"', "'", '/', '\\'], '', $quantyValue30);
            } else {
                $quantyValue30 = "";
            }

            $s_status61 = isset($_POST['s_status61']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status61 = isset($_POST['us_status61']) ? 1 : 0; // Sama seperti di atas
            $remark61 = $_POST['remark61'];
            if (!empty($_POST['remark61'])) {
                $remark61 = mysqli_real_escape_string($koneksi, $_POST['remark61']);
                $remark61 = str_replace(['"', "'", '/', '\\'], '', $remark61);
            } else {
                $remark61 = "";
            }

            $s_status62 = isset($_POST['s_status62']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status62 = isset($_POST['us_status62']) ? 1 : 0; // Sama seperti di atas
            $remark62 = $_POST['remark62'];
            if (!empty($_POST['remark62'])) {
                $remark62 = mysqli_real_escape_string($koneksi, $_POST['remark62']);
                $remark62 = str_replace(['"', "'", '/', '\\'], '', $remark62);
            } else {
                $remark62 = "";
            }




            $quantyValue31 = $_POST['qty31'];
            if (!empty($_POST['qty31'])) {
                $quantyValue31 = mysqli_real_escape_string($koneksi, $_POST['qty31']);
                $quantyValue31 = str_replace(['"', "'", '/', '\\'], '', $quantyValue31);
            } else {
                $quantyValue31 = "";
            }

            $s_status63 = isset($_POST['s_status63']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status63 = isset($_POST['us_status63']) ? 1 : 0; // Sama seperti di atas
            $remark63 = $_POST['remark63'];
            if (!empty($_POST['remark63'])) {
                $remark63 = mysqli_real_escape_string($koneksi, $_POST['remark63']);
                $remark63 = str_replace(['"', "'", '/', '\\'], '', $remark63);
            } else {
                $remark63 = "";
            }

            $s_status64 = isset($_POST['s_status64']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status64 = isset($_POST['us_status64']) ? 1 : 0; // Sama seperti di atas
            $remark64 = $_POST['remark64'];
            if (!empty($_POST['remark64'])) {
                $remark64 = mysqli_real_escape_string($koneksi, $_POST['remark64']);
                $remark64 = str_replace(['"', "'", '/', '\\'], '', $remark64);
            } else {
                $remark64 = "";
            }



            // Melakukan sanitasi terhadap data yang akan dimasukkan ke dalam query SQL
            $tflt = mysqli_real_escape_string($koneksi, $tflt);
            $treg = mysqli_real_escape_string($koneksi, $treg);
            $tdate = mysqli_real_escape_string($koneksi, $tdate);
            $tdep = mysqli_real_escape_string($koneksi, $tdep);

            // Menyimpan data ke dalam tabel title_flight
            $simpan = mysqli_query($koneksi, "INSERT INTO title_flight(flt, reg, date, dep, Quanty, S, US, remark1, S2, US2, remark2, 
                                                            Quanty2, S3, US3, remark3, S4, US4, remark4,
                                                            Quanty3, S5, US5, remark5, S6, US6, remark6,
                                                            Quanty4, S7, US7, remark7, S8, US8, remark8,
                                                            Quanty5, S9, US9, remark9, S10, US10, remark10,
                                                            Quanty6, S11, US11, remark11, S12, US12, remark12,
                                                            Quanty7, S13, US13, remark13, S14, US14, remark14,
                                                            Quanty8, S15, US15, remark15, S16, US16, remark16,
                                                            Quanty9, S17, US17, remark17, S18, US18, remark18,
                                                            Quanty10, S19, US19, remark19, S20, US20, remark20,
                                                            Quanty11, S21, US21, remark21, S22, US22, remark22,
                                                            Quanty12, S23, US23, remark23, S24, US24, remark24,
                                                            Quanty13, S25, US25, remark25, S26, US26, remark26,
                                                            Quanty14, S27, US27, remark27, S28, US28, remark28,
                                                            Quanty15, S29, US29, remark29, S30, US30, remark30,
                                                            Quanty16, S31, US31, remark31, S32, US32, remark32,
                                                            Quanty17, S33, US33, remark33, S34, US34, remark34,
                                                            Quanty18, S35, US35, remark35, S36, US36, remark36,
                                                            Quanty19, S37, US37, remark37, S38, US38, remark38,
                                                            Quanty20, S39, US39, remark39, S40, US40, remark40,
                                                            Quanty21, S41, US41, remark41, S42, US42, remark42,
                                                            Quanty22, S43, US43, remark43, S44, US44, remark44,
                                                            Quanty23, S45, US45, remark45, S46, US46, remark46,
                                                            Quanty24, S47, US47, remark47, S48, US48, remark48,
                                                            Quanty25, S49, US49, remark49, S50, US50, remark50,
                                                            Quanty26, S51, US51, remark51, S52, US52, remark52,
                                                            Quanty27, S53, US53, remark53, S54, US54, remark54,
                                                            Quanty28, S55, US55, remark55, S56, US56, remark56,
                                                            Quanty29, S57, US57, remark57, S58, US58, remark58,
                                                            Quanty30, S59, US59, remark59, S60, US60, remark60,
                                                            Quanty31, S61, US61, remark61, S62, US62, remark62,
                                                            Quanty32, S63, US63, remark63, S64, US64, remark64)
                                        VALUES('$tflt', '$treg', '$tdate', '$tdep', '$quantyValue', '$s_status', '$us_status', '$remark', '$s_status2', '$us_status2', '$remark2', 
                                                '$quantyValue1', '$s_status3', '$us_status3', '$remark3', '$s_status4', '$us_status4', '$remark4',
                                                '$quantyValue2', '$s_status5', '$us_status5', '$remark5', '$s_status6', '$us_status6', '$remark6',
                                                '$quantyValue3', '$s_status7', '$us_status7', '$remark7', '$s_status8', '$us_status8', '$remark8',
                                                '$quantyValue4', '$s_status9', '$us_status9', '$remark9', '$s_status10', '$us_status10', '$remark10',
                                                '$quantyValue5', '$s_status11', '$us_status11', '$remark11', '$s_status12', '$us_status12', '$remark12',
                                                '$quantyValue6', '$s_status13', '$us_status13', '$remark13', '$s_status14', '$us_status14', '$remark14',
                                                '$quantyValue7', '$s_status15', '$us_status15', '$remark15', '$s_status16', '$us_status16', '$remark16',
                                                '$quantyValue8', '$s_status17', '$us_status17', '$remark17', '$s_status18', '$us_status18', '$remark18',
                                                '$quantyValue9', '$s_status19', '$us_status19', '$remark19', '$s_status20', '$us_status20', '$remark20',
                                                '$quantyValue10', '$s_status21', '$us_status21', '$remark21', '$s_status22', '$us_status22', '$remark22',
                                                '$quantyValue11', '$s_status23', '$us_status23', '$remark23', '$s_status24', '$us_status24', '$remark24',
                                                '$quantyValue12', '$s_status25', '$us_status25', '$remark25', '$s_status26', '$us_status26', '$remark26',
                                                '$quantyValue13', '$s_status27', '$us_status27', '$remark27', '$s_status28', '$us_status28', '$remark28',
                                                '$quantyValue14', '$s_status29', '$us_status29', '$remark29', '$s_status30', '$us_status30', '$remark30',
                                                '$quantyValue15', '$s_status31', '$us_status31', '$remark31', '$s_status32', '$us_status32', '$remark32',
                                                '$quantyValue16', '$s_status33', '$us_status33', '$remark33', '$s_status34', '$us_status34', '$remark34',
                                                '$quantyValue17', '$s_status35', '$us_status35', '$remark35', '$s_status36', '$us_status36', '$remark36',
                                                '$quantyValue18', '$s_status37', '$us_status37', '$remark37', '$s_status38', '$us_status38', '$remark38',
                                                '$quantyValue19', '$s_status39', '$us_status39', '$remark39', '$s_status40', '$us_status40', '$remark40',
                                                '$quantyValue20', '$s_status41', '$us_status41', '$remark41', '$s_status42', '$us_status42', '$remark42',
                                                '$quantyValue21', '$s_status43', '$us_status43', '$remark43', '$s_status44', '$us_status44', '$remark44',
                                                '$quantyValue22', '$s_status45', '$us_status45', '$remark45', '$s_status46', '$us_status46', '$remark46',
                                                '$quantyValue23', '$s_status47', '$us_status47', '$remark47', '$s_status48', '$us_status48', '$remark48',
                                                '$quantyValue24', '$s_status49', '$us_status49', '$remark49', '$s_status50', '$us_status50', '$remark50',
                                                '$quantyValue25', '$s_status51', '$us_status51', '$remark51', '$s_status52', '$us_status52', '$remark52',
                                                '$quantyValue26', '$s_status53', '$us_status53', '$remark53', '$s_status54', '$us_status54', '$remark54',
                                                '$quantyValue27', '$s_status55', '$us_status55', '$remark55', '$s_status56', '$us_status56', '$remark56',
                                                '$quantyValue28', '$s_status57', '$us_status57', '$remark57', '$s_status58', '$us_status58', '$remark58',
                                                '$quantyValue29', '$s_status59', '$us_status59', '$remark59', '$s_status60', '$us_status60', '$remark60',
                                                '$quantyValue30', '$s_status61', '$us_status61', '$remark61', '$s_status62', '$us_status62', '$remark62',
                                                '$quantyValue31', '$s_status63', '$us_status63', '$remark63', '$s_status64', '$us_status64', '$remark64')");

            // Cek keberhasilan penyimpanan data
            if ($simpan) {
                echo "<script>
                alert('Simpan data sukses!');
                window.location.href = '" . base_url('home') . "';
                </script>";
            } else {
                echo "<script>
                alert('Simpan data gagal!');
                window.location.href = '" . base_url('home') . "';
                </script>";
            }


            // $this->load->helper('url');

            // Jika data berhasil ditambahkan
            // $this->session->set_flashdata('success_message', 'Data berhasil ditambahkan.');

            // Redirect kembali ke halaman utama
            // redirect(base_url('/pages/view'));
        }

        // uji jika tombol Hapus di klik 
        if (isset($_POST['bhapus'])) {

            // persiapan hapus data
            $hapus = mysqli_query($koneksi, "DELETE FROM title_flight WHERE id_flight = '$_POST[id_flight]' ");


            //jika hapus sukses 
            if ($hapus) {
                echo "<script>
                alert('Hapus data sukses!');
                window.location.href = '" . base_url('home') . "';
             </script>";
            } else {
                echo "<script>
                alert('Hapus data gagal!');
                window.location.href = '" . base_url('home') . "';
             </script>";
            }

            $this->load->helper('url');

            // Jika data berhasil ditambahkan
            // $this->session->set_flashdata('success_message', 'Data berhasil ditambahkan.');

            // Redirect kembali ke halaman utama
            // redirect(base_url('/pages/view'));
        }
    }


    public function edit()
    {

        // koneksi database
        $server = "localhost";
        $user = "root";
        $password = "";
        $database = "preflight";

        // buat koneksinya 
        $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

        // Query untuk mendapatkan data dari tabel
        $sql = "SELECT id, pilihan FROM prepos";
        $result = $koneksi->query($sql);


        // uji jika tombol ubah di klik 
        if (isset($_POST['bubah'])) {

            // Ambil nilai dari form
            $tflt = $_POST['tflt'];
            if (!empty($_POST['tflt'])) {
                $tflt = mysqli_real_escape_string($koneksi, $_POST['tflt']);
                $tflt = str_replace(['"', "'", '/', '\\'], '', $tflt);
            } else {
                $tflt = "";
            }

            $treg = $_POST['treg'];
            if (!empty($_POST['treg'])) {
                $treg = mysqli_real_escape_string($koneksi, $_POST['treg']);
                $treg = str_replace(['"', "'", '/', '\\'], '', $treg);
            } else {
                $treg = "";
            }

            $tdate = $_POST['tdate'];
            if (!empty($_POST['tdate'])) {
                $tdate = mysqli_real_escape_string($koneksi, $_POST['tdate']);
                $tdate = str_replace(['"', "'", '/', '\\'], '', $tdate);
            } else {
                $tdate = "";
            }

            $tdep = $_POST['tdep'];
            if (!empty($_POST['tdep'])) {
                $tdep = mysqli_real_escape_string($koneksi, $_POST['tdep']);
                $tdep = str_replace(['"', "'", '/', '\\'], '', $tdep);
            } else {
                $tdep = "";
            }

            $quantyValue = $_POST['qty'];
            if (!empty($_POST['qty'])) {
                $quantyValue = mysqli_real_escape_string($koneksi, $_POST['qty']);
                $quantyValue = str_replace(['"', "'", '/', '\\'], '', $quantyValue);
                
            } else {
                $quantyValue = "";
            }

            $s_status = isset($_POST['s_status']) ? $_POST['s_status'] : 'null'; // Menggunakan isset() untuk memeriksa keberadaan indeks 's_status'
            $us_status = isset($_POST["us_status"]) && $_POST['us_status'] != '' ? 1 : 0;
            $s_status2 = isset($_POST['s_status2']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status2 = isset($_POST["us_status2"]) ? 1 : 0;
            $remark = $_POST['remark1'];
            if (!empty($_POST['remark1'])) {
                $remark = mysqli_real_escape_string($koneksi, $_POST['remark1']);
                $remark = str_replace(['"', "'", '/', '\\'], '', $remark);
            } else {
                $remark = "";
            }

            $remark2 = $_POST['remark2'];
            if (!empty($_POST['remark2'])) {
                $remark2 = mysqli_real_escape_string($koneksi, $_POST['remark2']);
                $remark2 = str_replace(['"', "'", '/', '\\'], '', $remark2);
            } else {
                $remark2 = "";
            }



            $quantyValue1 = $_POST['qty1'];
            if (!empty($_POST['qty1'])) {
                $quantyValue1 = mysqli_real_escape_string($koneksi, $_POST['qty1']);
                $quantyValue1 = str_replace(['"', "'", '/', '\\'], '', $quantyValue1);
            } else {
                $quantyValue1 = "";
            }

            $s_status3 = isset($_POST['s_status3']) ? $_POST['s_status3'] : 0;  // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status3 = isset($_POST['us_status3']) ? 1 : 0; // Sama seperti di atas
            $s_status4 = isset($_POST['s_status4']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status4 = isset($_POST['us_status4']) ? 1 : 0; // Sama seperti di atas
            $remark3 = $_POST['remark3'];
            if (!empty($_POST['remark3'])) {
                $remark3 = mysqli_real_escape_string($koneksi, $_POST['remark3']);
                $remark3 = str_replace(['"', "'", '/', '\\'], '', $remark3);
            } else {
                $remark3 = "";
            }

            $remark4 = $_POST['remark4'];
            if (!empty($_POST['remark4'])) {
                $remark4 = mysqli_real_escape_string($koneksi, $_POST['remark4']);
                $remark4 = str_replace(['"', "'", '/', '\\'], '', $remark4);
            } else {
                $remark4 = "";
            }





            $quantyValue2 = $_POST['qty2'];
            if (!empty($_POST['qty2'])) {
                $quantyValue2 = mysqli_real_escape_string($koneksi, $_POST['qty2']);
                $quantyValue2 = str_replace(['"', "'", '/', '\\'], '', $quantyValue2);
            } else {
                $quantyValue2 = "";
            }

            $s_status5 = isset($_POST['s_status5']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status5 = isset($_POST['us_status5']) ? 1 : 0; // Sama seperti di atas
            $s_status6 = isset($_POST['s_status6']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status6 = isset($_POST['us_status6']) ? 1 : 0; // Sama seperti di atas
            $remark5 = $_POST['remark5'];
            if (!empty($_POST['remark5'])) {
                $remark5 = mysqli_real_escape_string($koneksi, $_POST['remark5']);
                $remark5 = str_replace(['"', "'", '/', '\\'], '', $remark5);
            } else {
                $remark5 = "";
            }

            $remark6 = $_POST['remark6'];
            if (!empty($_POST['remark6'])) {
                $remark6 = mysqli_real_escape_string($koneksi, $_POST['remark6']);
                $remark6 = str_replace(['"', "'", '/', '\\'], '', $remark6);
            } else {
                $remark6 = "";
            }





            $quantyValue3 = $_POST['qty3'];
            if (!empty($_POST['qty3'])) {
                $quantyValue3 = mysqli_real_escape_string($koneksi, $_POST['qty3']);
                $quantyValue3 = str_replace(['"', "'", '/', '\\'], '', $quantyValue3);
            } else {
                $quantyValue3 = "";
            }

            $s_status7 = isset($_POST['s_status7']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status7 = isset($_POST["us_status7"]) ? 1 : 0;
            $s_status8 = isset($_POST['s_status8']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status8 = isset($_POST["us_status8"]) ? 1 : 0;
            $remark7 = $_POST['remark7'];
            if (!empty($_POST['remark7'])) {
                $remark7 = mysqli_real_escape_string($koneksi, $_POST['remark7']);
                $remark7 = str_replace(['"', "'", '/', '\\'], '', $remark7);
            } else {
                $remark7 = "";
            }

            $remark8 = $_POST['remark8'];
            if (!empty($_POST['remark8'])) {
                $remark8 = mysqli_real_escape_string($koneksi, $_POST['remark8']);
                $remark8 = str_replace(['"', "'", '/', '\\'], '', $remark8);
            } else {
                $remark8 = "";
            }




            $quantyValue4 = $_POST['qty4'];
            if (!empty($_POST['qty4'])) {
                $quantyValue4 = mysqli_real_escape_string($koneksi, $_POST['qty4']);
                $quantyValue4 = str_replace(['"', "'", '/', '\\'], '', $quantyValue4);
            } else {
                $quantyValue4 = "";
            }

            $s_status9 = isset($_POST['s_status9']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status9 = isset($_POST["us_status9"]) ? 1 : 0;
            $s_status10 = isset($_POST['s_status10']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status10 = isset($_POST["us_status10"]) ? 1 : 0;
            $remark9 = $_POST['remark9'];
            if (!empty($_POST['remark9'])) {
                $remark9 = mysqli_real_escape_string($koneksi, $_POST['remark9']);
                $remark9 = str_replace(['"', "'", '/', '\\'], '', $remark9);
            } else {
                $remark9 = "";
            }

            $remifark10 = $_POST['remark10'];
            if (!empty($_POST['remark10'])) {
                $remark10 = mysqli_real_escape_string($koneksi, $_POST['remark10']);
                $remark10 = str_replace(['"', "'", '/', '\\'], '', $remark10);
            } else {
                $remark10 = "";
            }




            $quantyValue5 = $_POST['qty5'];
            if (!empty($_POST['qty5'])) {
                $quantyValue5 = mysqli_real_escape_string($koneksi, $_POST['qty5']);
                $quantyValue5 = str_replace(['"', "'", '/', '\\'], '', $quantyValue5);
            } else {
                $quantyValue5 = "";
            }

            $s_status11 = isset($_POST['s_status11']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status11 = isset($_POST["us_status11"]) ? 1 : 0;
            $s_status12 = isset($_POST['s_status12']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status12 = isset($_POST["us_status12"]) ? 1 : 0;
            $remark11 = $_POST['remark11'];
            if (!empty($_POST['remark11'])) {
                $remark11 = mysqli_real_escape_string($koneksi, $_POST['remark11']);
                $remrak11 = str_replace(['"', "'", '/', '\\'], '', $remark11);
            } else {
                $remark11 = "";
            }

            $remark12 = $_POST['remark12'];
            if (!empty($_POST['remark12'])) {
                $remark12 = mysqli_real_escape_string($koneksi, $_POST['remark12']);
                $remark12 = str_replace(['"', "'", '/', '\\'], '', $remark12);
            } else {
                $remark12 = "";
            }




            $quantyValue6 = $_POST['qty6'];
            if (!empty($_POST['qty6'])) {
                $quantyValue6 = mysqli_real_escape_string($koneksi, $_POST['qty6']);
                $quantyValue6 = str_replace(['"', "'", '/', '\\'], '', $quantyValue6);
            } else {
                $quantyValue6 = "";
            }

            $s_status13 = isset($_POST['s_status13']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status13 = isset($_POST["us_status13"]) ? 1 : 0;
            $s_status14 = isset($_POST['s_status14']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status14 = isset($_POST["us_status14"]) ? 1 : 0;
            $remark13 = $_POST['remark13'];
            if (!empty($_POST['remark13'])) {
                $remark13 = mysqli_real_escape_string($koneksi, $_POST['remark13']);
                $remark13 = str_replace(['"', "'", '/', '\\'], '', $remark13);
            } else {
                $remark13 = "";
            }

            $remark14 = $_POST['remark14'];
            if (!empty($_POST['remark14'])) {
                $remark14 = mysqli_real_escape_string($koneksi, $_POST['remark14']);
                $remark14 = str_replace(['"', "'", '/', '\\'], '', $remark14);
            } else {
                $remark14 = "";
            }




            $quantyValue7 = $_POST['qty7'];
            if (!empty($_POST['qty7'])) {
                $quantyValue7 = mysqli_real_escape_string($koneksi, $_POST['qty7']);
                $quantyValue7 = str_replace(['"', "'", '/', '\\'], '', $quantyValue7);
            } else {
                $quantyValue7 = "";
            }

            $s_status15 = isset($_POST['s_status15']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status15 = isset($_POST["us_status15"]) ? 1 : 0;
            $s_status16 = isset($_POST['s_status16']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status16 = isset($_POST["us_status16"]) ? 1 : 0;
            $remark15 = $_POST['remark15'];
            if (!empty($_POST['remark15'])) {
                $remark15 = mysqli_real_escape_string($koneksi, $_POST['remark15']);
                $remark15 = str_replace(['"', "'", '/', '\\'], '', $remark15);
            } else {
                $remark15 = "";
            }

            $remark16 = $_POST['remark16'];
            if (!empty($_POST['remark16'])) {
                $remark16 = mysqli_real_escape_string($koneksi, $_POST['remark16']);
                $remark16 = str_replace(['"', "'", '/', '\\'], '', $remark16);
            } else {
                $remark16 = "";
            }




            $quantyValue8 = $_POST['qty8'];
            if (!empty($_POST['qty8'])) {
                $quantyValue8 = mysqli_real_escape_string($koneksi, $_POST['qty8']);
                $quantyValue8 = str_replace(['"', "'", '/', '\\'], '', $quantyValue8);
            } else {
                $quantyValue8 =  "";
            }

            $s_status17 = isset($_POST['s_status17']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status17 = isset($_POST["us_status17"]) ? 1 : 0;
            $s_status18 = isset($_POST['s_status18']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status18 = isset($_POST["us_status18"]) ? 1 : 0;
            $remark17 = $_POST['remark17'];
            if (!empty($_POST['remark17'])) {
                $remark17 = mysqli_real_escape_string($koneksi, $_POST['remark17']);
                $remark17 = str_replace(['"', "'", '/', '\\'], '', $remark17);
            } else {
                $remark17 = "";
            }

            $remark18 = $_POST['remark18'];
            if (!empty($_POST['remark18'])) {
                $remark18 = mysqli_real_escape_string($koneksi, $_POST['remark18']);
                $remark18 = str_replace(['"', "'", '/', '\\'], '', $remark18);
            } else {
                $remark18 = "";
            }




            $quantyValue9 = $_POST['qty9'];
            if (!empty($_POST['qty9'])) {
                $quantyValue9 = mysqli_real_escape_string($koneksi, $_POST['qty9']);
                $quantyValue9 = str_replace(['"', "'", '/', '\\'], '', $quantyValue9);
            } else {
                $quantyValue9 = "";
            }

            $s_status19 = isset($_POST['s_status19']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status19 = isset($_POST["us_status19"]) ? 1 : 0;
            $s_status20 = isset($_POST['s_status20']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status20 = isset($_POST["us_status20"]) ? 1 : 0;
            $remark19 = $_POST['remark19'];
            if (!empty($_POST['remark19'])) {
                $remark19 = mysqli_real_escape_string($koneksi, $_POST['remark19']);
                $remark19 = str_replace(['"', "'", '/', '\\'], '', $remark19);
            } else {
                $remark19 = "";
            }

            $remark20 = $_POST['remark20'];
            if (!empty($_POST['remark20'])) {
                $remark20 = mysqli_real_escape_string($koneksi, $_POST['remark20']);
                $remark20 = str_replace(['"', "'", '/', '\\'], '', $remark20);
            } else {
                $remark20 = "";
            }




            $quantyValue10 = $_POST['qty10'];
            if (!empty($_POST['qty10'])) {
                $quantyValue10 = mysqli_real_escape_string($koneksi, $_POST['qty10']);
                $quantyValue10 = str_replace(['"', "'", '/', '\\'], '', $quantyValue10);
            } else {
                $quantyValue10 = "";
            }

            $s_status21 = isset($_POST['s_status21']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status21 = isset($_POST["us_status21"]) ? 1 : 0;
            $s_status22 = isset($_POST['s_status22']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status22 = isset($_POST["us_status22"]) ? 1 : 0;
            $remark21 = $_POST['remark21'];
            if (!empty($_POST['remark21'])) {
                $remark21 = mysqli_real_escape_string($koneksi, $_POST['remark21']);
                $remark21 = str_replace(['"', "'", '/', '\\'], '', $remark21);
            } else {
                $remark21 = "";
            }

            $remark22 = $_POST['remark22'];
            if (!empty($_POST['remark22'])) {
                $remark22 = mysqli_real_escape_string($koneksi, $_POST['remark22']);
                $remark22 = str_replace(['"', "'", '/', '\\'], '', $remark22);
            } else {
                $remark22 = "";
            }




            $quantyValue11 = $_POST['qty11'];
            if (!empty($_POST['qty11'])) {
                $quantyValue11 = mysqli_real_escape_string($koneksi, $_POST['qty11']);
                $quantyValue11 = str_replace(['"', "'", '/', '\\'], '', $quantyValue11);
            } else {
                $quantyValue = "";
            }

            $s_status23 = isset($_POST['s_status23']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status23 = isset($_POST["us_status23"]) ? 1 : 0;
            $s_status24 = isset($_POST['s_status24']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status24 = isset($_POST["us_status24"]) ? 1 : 0;
            $remark23 = $_POST['remark23'];
            if (!empty($_POST['remark23'])) {
                $remark23 = mysqli_real_escape_string($koneksi, $_POST['remark23']);
                $remark23 = str_replace(['"', "'", '/', '\\'], '', $remark23);
            } else {
                $remark23 = "";
            }

            $remark24 = $_POST['remark24'];
            if (!empty($_POST['remark24'])) {
                $remark24 = mysqli_real_escape_string($koneksi, $_POST['remark24']);
                $remark24 = str_replace(['"', "'", '/', '\\'], '', $remark24);
            } else {
                $remark24 = "";
            }




            $quantyValue12 = $_POST['qty12'];
            if (!empty($_POST['qty12'])) {
                $quantyValue12 = mysqli_real_escape_string($koneksi, $_POST['qty12']);
                $quantyValue12 = str_replace(['"', "'", '/', '\\'], '', $quantyValue12);
            } else {
                $quantyValue12 = "";
            }

            $s_status25 = isset($_POST['s_status25']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status25 = isset($_POST["us_status25"]) ? 1 : 0;
            $s_status26 = isset($_POST['s_status26']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status26 = isset($_POST["us_status26"]) ? 1 : 0;
            $remark25 = $_POST['remark25'];
            if (!empty($_POST['remark25'])) {
                $remark25 = mysqli_real_escape_string($koneksi, $_POST['remark25']);
                $remark25 = str_replace(['"', "'", '/', '\\'], '', $remark25);
            } else {
                $remark25 = "";
            }

            $remark26 = $_POST['remark26'];
            if (!empty($_POST['remark26'])) {
                $remark26 = mysqli_real_escape_string($koneksi, $_POST['remark26']);
                $remark26 = str_replace(['"', "'", '/', '\\'], '', $remark26);
            } else {
                $remark26 = "";
            }




            $quantyValue13 = $_POST['qty13'];
            if (!empty($_POST['qty13'])) {
                $quantyValue13 = mysqli_real_escape_string($koneksi, $_POST['qty13']);
                $quantyValue13 = str_replace(['"', "'", '/', '\\'], '', $quantyValue13);
            } else {
                $quantyValue13 = "";
            }

            $s_status27 = isset($_POST['s_status27']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status27 = isset($_POST["us_status27"]) ? 1 : 0;
            $s_status28 = isset($_POST['s_status28']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status28 = isset($_POST["us_status28"]) ? 1 : 0;
            $remark27 = $_POST['remark27'];
            if (!empty($_POST['remark27'])) {
                $remark27 = mysqli_real_escape_string($koneksi, $_POST['remark27']);
                $remark27 = str_replace(['"', "'", '/', '\\'], '', $remark27);
            } else {
                $remark27 = "";
            }

            $remark28 = $_POST['remark28'];
            if (!empty($_POST['remrak28'])) {
                $remark28 = mysqli_real_escape_string($koneksi, $_POST['remark28']);
                $remark28 = str_replace(['"', "'", '/', '\\'], '', $remark28);
            } else {
                $remark28 = "";
            }




            $quantyValue14 = $_POST['qty14'];
            if (!empty($_POST['qty14'])) {
                $quantyValue14 = mysqli_real_escape_string($koneksi, $_POST['qty14']);
                $quantyValue14 = str_replace(['"', "'", '/', '\\'], '', $quantyValue14);
            } else {
                $quantyValue14 = "";
            }

            $s_status29 = isset($_POST['s_status29']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status29 = isset($_POST["us_status29"]) ? 1 : 0;
            $s_status30 = isset($_POST['s_status30']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status30 = isset($_POST["us_status30"]) ? 1 : 0;
            $remark29 = $_POST['remark29'];
            if (!empty($_POST['remark29'])) {
                $remark29 = mysqli_real_escape_string($koneksi, $_POST['remark29']);
                $remark29 = str_replace(['"', "'", '/', '\\'], '', $remark29);
            } else {
                $remark29 = "";
            }

            $remark30 = $_POST['remark30'];
            if (!empty($_POST['remark30'])) {
                $remark30 = mysqli_real_escape_string($koneksi, $_POST['remark30']);
                $remark30 = str_replace(['"', "'", '/', '\\'], '', $remark30);
            } else {
                $remark30 = "";
            }




            $quantyValue15 = $_POST['qty15'];
            if (!empty($_POST['qty15'])) {
                $quantyValue15 = mysqli_real_escape_string($koneksi, $_POST['qty15']);
                $quantyValue15 = str_replace(['"', "'", '/', '\\'], '', $quantyValue15);
            } else {
                $quantyValue15 = "";
            }

            $s_status31 = isset($_POST['s_status31']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status31 = isset($_POST["us_status31"]) ? 1 : 0;
            $s_status32 = isset($_POST['s_status32']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status32 = isset($_POST["us_status32"]) ? 1 : 0;
            $remark31 = $_POST['remark31'];
            if (!empty($_POST['remark31'])) {
                $remark31 = mysqli_real_escape_string($koneksi, $_POST['remark31']);
                $remark31 = str_replace(['"', "'", '/', '\\'], '', $remark31);
            } else {
                $remark31 = "";
            }

            $remark32 = $_POST['remark32'];
            if (!empty($_POST['remark32'])) {
                $remark32 = mysqli_real_escape_string($koneksi, $_POST['remark32']);
                $remark32 = str_replace(['"', "'", '/', '\\'], '', $remark32);
            } else {
                $remark32 = "";
            }




            $quantyValue16 = $_POST['qty16'];
            if (!empty($_POST['qty16'])) {
                $quantyValue16 = mysqli_real_escape_string($koneksi, $_POST['qty16']);
                $quantyValue16 = str_replace(['"', "'", '/', '\\'], '', $quantyValue16);
            } else {
                $quantyValue16 = "";
            }

            $s_status33 = isset($_POST['s_status33']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status33 = isset($_POST["us_status33"]) ? 1 : 0;
            $s_status34 = isset($_POST['s_status34']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status34 = isset($_POST["us_status34"]) ? 1 : 0;
            $remark33 = $_POST['remark33'];
            if (!empty($_POST['remark33'])) {
                $remark33 = mysqli_real_escape_string($koneksi, $_POST['remark33']);
                $remark33 = str_replace(['"', "'", '/', '\\'], '', $remark33);
            } else {
                $remark33 = "";
            }

            $remark34 = $_POST['remark34'];
            if (!empty($_POST['remark34'])) {
                $remark34 = mysqli_real_escape_string($koneksi, $_POST['remark34']);
                $remark34 = str_replace(['"', "'", '/', '\\'], '', $remark34);
            } else {
                $remark34 = "";
            }


                                                                                                                                                                                                              

            $quantyValue17 = $_POST['qty17'];
            if (!empty($_POST['qty17'])) {
                $quantyValue17 = mysqli_real_escape_string($koneksi, $_POST['qty17']);
                $quantyValue17 = str_replace(['"', "'", '/', '\\'], '', $quantyValue17);
            } else {
                $quantyValue17 = "";
            }

            $s_status35 = isset($_POST['s_status35']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status35 = isset($_POST["us_status35"]) ? 1 : 0;
            $s_status36 = isset($_POST['s_status36']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status36 = isset($_POST["us_status36"]) ? 1 : 0;
            $remark35 = $_POST['remark35'];
            if (!empty($_POST['remark35'])) {
                $remark35 = mysqli_real_escape_string($koneksi, $_POST['remark35']);
                $remark35 = str_replace(['"', "'", '/', '\\'], '', $remark35);
            } else {
                $remark35 = "";
            }

            $remark36 = $_POST['remark36'];
            if (!empty($_POST['remark36'])) {
                $remark36 = mysqli_real_escape_string($koneksi, $_POST['remark36']);
                $remark36 = str_replace(['"', "'", '/', '\\'], '', $remark36);
            } else {
                $remark36 = "";
            }




            $quantyValue18 = $_POST['qty18'];
            if (!empty($_POST['qty18'])) {
                $quantyValue18 = mysqli_real_escape_string($koneksi, $_POST['qty18']);
                $quantyValue18 = str_replace(['"', "'", '/', '\\'], '', $quantyValue18);
            } else {
                $quantyValue18 = "";
            }

            $s_status37 = isset($_POST['s_status37']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status37 = isset($_POST["us_status37"]) ? 1 : 0;
            $s_status38 = isset($_POST['s_status38']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status38 = isset($_POST["us_status38"]) ? 1 : 0;
            $remark37 = $_POST['remark37'];
            if (!empty($_POST['remark37'])) {
                $remark37 = mysqli_real_escape_string($koneksi, $_POST['remark37']);
                $remark37 = str_replace(['"', "'", '/', '\\'], '', $remark37);
            } else {
                $remark37 = "";
            }

            $remark38 = $_POST['remark38'];
            if (!empty($_POST['remark38'])) {
                $remark38 = mysqli_real_escape_string($koneksi, $_POST['remark38']);
                $remark38 = str_replace(['"', "'", '/', '\\'], '', $remark38);
            } else {
                $remark38 = "";
            }




            $quantyValue19 = $_POST['qty19'];
            if (!empty($_POST['qty19'])) {
                $quantyValue19 = mysqli_real_escape_string($koneksi, $_POST['qty19']);
                $quantyValue19 = str_replace(['"', "'", '/', '\\'], '', $quantyValue19);
            } else {
                $quantyValue19 = "";
            }


            $s_status39 = isset($_POST['s_status39']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status39 = isset($_POST["us_status39"]) ? 1 : 0;
            $s_status40 = isset($_POST['s_status40']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status40 = isset($_POST["us_status40"]) ? 1 : 0;
            $remark39 = $_POST['remark39'];
            if (!empty($_POST['remark39'])) {
                $remark39 = mysqli_real_escape_string($koneksi, $_POST['remark39']);
                $remark39 = str_replace(['"', "'", '/', '\\'], '', $remark39);
            } else {
                $remark39 = "";
            }

            $remark40 = $_POST['remark40'];
            if (!empty($_POST['remark40'])) {
                $remark40 = mysqli_real_escape_string($koneksi, $_POST['remark40']);
                $remark40 = str_replace(['"', "'", '/', '\\'], '', $remark40);
            } else {
                $remark40 = "";
            }

            $quantyValue20 = $_POST['qty20'];
            if (!empty($_POST['qty20'])) {
                $quantyValue20 = mysqli_real_escape_string($koneksi, $_POST['qty20']);
                $quantyValue20 = str_replace(['"', "'", '/', '\\'], '', $quantyValue20);
            } else {
                $quantyValue20 = "";
            }

            $s_status41 = isset($_POST['s_status41']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status41 = isset($_POST["us_status41"]) ? 1 : 0;
            $s_status42 = isset($_POST['s_status42']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status42 = isset($_POST["us_status42"]) ? 1 : 0;
            $remark41 = $_POST['remark41'];
            if (!empty($_POST['remark41'])) {
                $remark41 = mysqli_real_escape_string($koneksi, $_POST['remark41']);
                $remark41 = str_replace(['"', "'", '/', '\\'], '', $remark41);
            } else {
                $remark41 = "";
            }

            $remark42 = $_POST['remark42'];
            if (!empty($_POST['remark42'])) {
                $remark42 = mysqli_real_escape_string($koneksi, $_POST['remark42']);
                $remark42 = str_replace(['"', "'", '/', '\\'], '', $remark42);
            } else {
                $remark42 = "";
            }

            $quantyValue21 = $_POST['qty21'];
            if (!empty($_POST['qty21'])) {
                $quantyValue21 = mysqli_real_escape_string($koneksi, $_POST['qty21']);
                $quantyValue21 = str_replace(['"', "'", '/', '\\'], '', $quantyValue21);
            } else {
                $quantyValue21 = "";
            }

            $s_status43 = isset($_POST['s_status43']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status43 = isset($_POST["us_status43"]) ? 1 : 0;
            $s_status44 = isset($_POST['s_status44']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status44 = isset($_POST["us_status44"]) ? 1 : 0;
            $remark43 = $_POST['remark43'];
            if (!empty($_POST['remark43'])) {
                $remark43 = mysqli_real_escape_string($koneksi, $_POST['remark43']);
                $remark43 = str_replace(['"', "'", '/', '\\'], '', $remark43);
            } else {
                $remark43 = "";
            }

            $remark44 = $_POST['remark44'];
            if (!empty($_POST['remark44'])) {
                $remark44 = mysqli_real_escape_string($koneksi, $_POST['remark44']);
                $remark44 = str_replace(['"', "'", '/', '\\'], '', $remark44);
            } else {
                $remark44 = "";
            }




            $quantyValue22 = $_POST['qty22'];
            if (!empty($_POST['qty22'])) {
                $quantyValue22 = mysqli_real_escape_string($koneksi, $_POST['qty22']);
                $quantyValue22 = str_replace(['"', "'", '/', '\\'], '', $quantyValue22);
            } else {
                $quantyValue22 = "";
            }

            $s_status45 = isset($_POST['s_status45']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status45 = isset($_POST["us_status45"]) ? 1 : 0;
            $s_status46 = isset($_POST['s_status46']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status46 = isset($_POST["us_status46"]) ? 1 : 0;
            $remark45 = $_POST['remark45'];
            if (!empty($_POST['remark45'])) {
                $remark45 = mysqli_real_escape_string($koneksi, $_POST['remark45']);
                $remark45 = str_replace(['"', "'", '/', '\\'], '', $remark45);
            } else {
                $remark45 = "";
            }

            $remark46 = $_POST['remark46'];
            if (!empty($_POST['remark46'])) {
                $remark46 = mysqli_real_escape_string($koneksi, $_POST['remark46']);
                $remark46 = str_replace(['"', "'", '/', '\\'], '', $remark46);
            } else {
                $remark46 = "";
            }




            $quantyValue23 = $_POST['qty23'];
            if (!empty($_POST['qty23'])) {
                $quantyValue23 = mysqli_real_escape_string($koneksi, $_POST['qty23']);
                $quantyValue23 = str_replace(['"', "'", '/', '\\'], '', $quantyValue23);
            } else {
                $quantyValue23 = "";
            }

            $s_status47 = isset($_POST['s_status47']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status47 = isset($_POST["us_status47"]) ? 1 : 0;
            $s_status48 = isset($_POST['s_status48']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status48 = isset($_POST["us_status48"]) ? 1 : 0;
            $remark47 = $_POST['remark47'];
            if (!empty($_POST['remark47'])) {
                $remark47 = mysqli_real_escape_string($koneksi, $_POST['remark47']);
                $remark47 = str_replace(['"', "'", '/', '\\'], '', $remark47);
            } else {
                $remark47 = "";
            }

            $remark48 = $_POST['remark48'];
            if (!empty($_POST['remark48'])) {
                $remark48 = mysqli_real_escape_string($koneksi, $_POST['remark48']);
                $remark48 = str_replace(['"', "'", '/', '\\'], '', $remark48);
            } else {
                $remark48 = "";
            }




            $quantyValue24 = $_POST['qty24'];
            if (!empty($_POST['qty24'])) {
                $quantyValue24 = mysqli_real_escape_string($koneksi, $_POST['qty24']);
                $quantyValue24 = str_replace(['"', "'", '/', '\\'], '', $quantyValue24);
            } else {
                $quantyValue24 = "";
            }

            $s_status49 = isset($_POST['s_status49']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status49 = isset($_POST["us_status49"]) ? 1 : 0;
            $s_status50 = isset($_POST['s_status50']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status50 = isset($_POST["us_status50"]) ? 1 : 0;
            $remark49 = $_POST['remark49'];
            if (!empty($_POST['remark49'])) {
                $remark49 = mysqli_real_escape_string($koneksi, $_POST['remark49']);
                $remark49 = str_replace(['"', "'", '/', '\\'], '', $remark49);
            } else {
                $remark49 = "";
            }

            $remark50 = $_POST['remark50'];
            if (!empty($_POST['remark50'])) {
                $remark50 = mysqli_real_escape_string($koneksi, $_POST['remark50']);
                $remark50 = str_replace(['"', "'", '/', '\\'], '', $remark50);
            } else {
                $remark50 = "";
            }




            $quantyValue25 = $_POST['qty25'];
            if (!empty($_POST['qty25'])) {
                $quantyValue25 = mysqli_real_escape_string($koneksi, $_POST['qty25']);
                $quantyValue25 = str_replace(['"', "'", '/', '\\'], '', $quantyValue25);
            } else {
                $quantyValue25 = "";
            }

            $s_status51 = isset($_POST['s_status51']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status51 = isset($_POST["us_status51"]) ? 1 : 0;
            $s_status52 = isset($_POST['s_status52']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status52 = isset($_POST["us_status52"]) ? 1 : 0;
            $remark51 = $_POST['remark51'];
            if (!empty($_POST['remark51'])) {
                $remark51 = mysqli_real_escape_string($koneksi, $_POST['remark51']);
                $remark51 = str_replace(['"', "'", '/', '\\'], '', $remark51);
            } else {
                $remark51 = "";
            }

            $remark52 = $_POST['remark52'];
            if (!empty($_POST['remark52'])) {
                $remark52 = mysqli_real_escape_string($koneksi, $_POST['remark52']);
                $remark52 = str_replace(['"', "'", '/', '\\'], '', $remark52);
            } else {
                $remark52 = "";
            }




            $quantyValue26 = $_POST['qty26'];
            if (!empty($_POST['qty26'])) {
                $quantyValue26 = mysqli_real_escape_string($koneksi, $_POST['qty26']);
                $quantyValue26 = str_replace(['"', "'", '/', '\\'], '', $quantyValue26);
            } else {
                $quantyValue26 = "";
            }

            $s_status53 = isset($_POST['s_status53']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status53 = isset($_POST["us_status53"]) ? 1 : 0;
            $s_status54 = isset($_POST['s_status54']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status54 = isset($_POST["us_status54"]) ? 1 : 0;
            $remark53 = $_POST['remark53'];
            if (!empty($_POST['remark53'])) {
                $remark53 = mysqli_real_escape_string($koneksi, $_POST['remark53']);
                $remark53 = str_replace(['"', "'", '/', '\\'], '', $remark53);
            } else {
                $remark53 = "";
            }

            $remark54 = $_POST['remark54'];
            if (!empty($_POST['remark54'])) {
                $remark54 = mysqli_real_escape_string($koneksi, $_POST['remark54']);
                $remark54 = str_replace(['"', "'", '/', '\\'], '', $remark54);
            } else {
                $remark54 = "";
            }




            $quantyValue27 = $_POST['qty27'];
            if (!empty($_POST['qty27'])) {
                $quantyValue27 = mysqli_real_escape_string($koneksi, $_POST['qty27']);
                $quantyValue27 = str_replace(['"', "'", '/', '\\'], '', $quantyValue27);
            } else {
                $quantyValue27 = "";
            }

            $s_status55 = isset($_POST['s_status55']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status55 = isset($_POST["us_status55"]) ? 1 : 0;
            $s_status56 = isset($_POST['s_status56']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status56 = isset($_POST["us_status56"]) ? 1 : 0;
            $remark55 = $_POST['remark55'];
            if (!empty($_POST['remark55'])) {
                $remark55 = mysqli_real_escape_string($koneksi, $_POST['remark55']);
                $remark55 = str_replace(['"', "'", '/', '\\'], '', $remark55);
            } else {
                $remark55 = "";
            }

            $remark56 = $_POST['remark56'];
            if (!empty($_POST['remark56'])) {
                $remark56 = mysqli_real_escape_string($koneksi, $_POST['remark56']);
                $remark56 = str_replace(['"', "'", '/', '\\'], '', $remark56);
            } else {
                $remark56 = "";
            }




            $quantyValue28 = $_POST['qty28'];
            if (!empty($_POST['qty28'])) {
                $quantyValue28 = mysqli_real_escape_string($koneksi, $_POST['qty28']);
                $quantyValue28 = str_replace(['"', "'", '/', '\\'], '', $quantyValue28);
            } else {
                $quantyValue28 = "";
            }

            $s_status57 = isset($_POST['s_status57']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status57 = isset($_POST["us_status57"]) ? 1 : 0;
            $s_status58 = isset($_POST['s_status58']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status58 = isset($_POST["us_status58"]) ? 1 : 0;
            $remark57 = $_POST['remark57'];
            if (!empty($_POST['remark57'])) {
                $remark57 = mysqli_real_escape_string($koneksi, $_POST['remark57']);
                $remark57 = str_replace(['"', "'", '/', '\\'], '', $remark57);
            } else {
                $remark57 = "";
            }

            $remark58 = $_POST['remark58'];
            if (!empty($_POST['remark58'])) {
                $remark58 = mysqli_real_escape_string($koneksi, $_POST['remark58']);
                $remark58 = str_replace(['"', "'", '/', '\\'], '', $remark58);
            } else {
                $remark58 = "";
            }





            $quantyValue29 = $_POST['qty29'];
            if (!empty($_POST['qty29'])) {
                $quantyValue29 = mysqli_real_escape_string($koneksi, $_POST['qty29']);
                $quantyValue29 = str_replace(['"', "'", '/', '\\'], '', $quantyValue29);
            } else {
                $quantyValue29 = "";
            }


            $s_status59 = isset($_POST['s_status59']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status59 = isset($_POST["us_status59"]) ? 1 : 0;
            $s_status60 = isset($_POST['s_status60']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status60 = isset($_POST["us_status60"]) ? 1 : 0;
            $remark59 = $_POST['remark59'];
            if (!empty($_POST['remark59'])) {
                $remark59 = mysqli_real_escape_string($koneksi, $_POST['remark59']);
                $remark59 = str_replace(['"', "'", '/', '\\'], '', $remark59);
            } else {
                $remark59 = "";
            }

            $remark60 = $_POST['remark60'];
            if (!empty($_POST['remark60'])) {
                $remark60 = mysqli_real_escape_string($koneksi, $_POST['remark60']);
                $remark60 = str_replace(['"', "'", '/', '\\'], '', $remark60);
            } else {
                $remark60 = "";
            }



            
            $quantyValue30 = $_POST['qty30'];
            if (!empty($_POST['qty30'])) {
                $quantyValue30 = mysqli_real_escape_string($koneksi, $_POST['qty30']);
                $quantyValue30 = str_replace(['"', "'", '/', '\\'], '', $quantyValue30);
            } else {
                $quantyValue30 = "";
            }

            $s_status61 = isset($_POST['s_status61']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status61 = isset($_POST["us_status61"]) ? 1 : 0;
            $s_status62 = isset($_POST['s_status62']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status62 = isset($_POST["us_status62"]) ? 1 : 0;
            $remark61 = $_POST['remark61'];
            if (!empty($_POST['remark61'])) {
                $remark61 = mysqli_real_escape_string($koneksi, $_POST['remark61']);
                $remark61 = str_replace(['"', "'", '/', '\\'], '', $remark61);
            } else {
                $remark61 = "";
            }

            $remark62 = $_POST['remark62'];
            if (!empty($_POST['remark62'])) {
                $remark62 = mysqli_real_escape_string($koneksi, $_POST['remark62']);
                $remark62 = str_replace(['"', "'", '/', '\\'], '', $remark62);
            } else {
                $remark62 = "";
            }




            $quantyValue31 = $_POST['qty31'];
            if (!empty($_POST['qty31'])) {
                $quantyValue31 = mysqli_real_escape_string($koneksi, $_POST['qty31']);
                $quantyValue31 = str_replace(['"', "'", '/', '\\'], '', $quantyValue31);
            } else {
                $quantyValue31 = "";
            }

            $s_status63 = isset($_POST['s_status63']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status63 = isset($_POST["us_status63"]) ? 1 : 0;
            $s_status64 = isset($_POST['s_status64']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status64 = isset($_POST["us_status64"]) ? 1 : 0;
            $remark63 = $_POST['remark63'];
            if (!empty($_POST['remark63'])) {
                $remark63 = mysqli_real_escape_string($koneksi, $_POST['remark63']);
                $remark63 = str_replace(['"', "'", '/', '\\'], '', $remark63);
            } else {
                $remark63 = "";
            }

            $remark64 = $_POST['remark64'];
            if (!empty($_POST['remark64'])) {
                $remark64 = mysqli_real_escape_string($koneksi, $_POST['remark64']);
                $remark64 = str_replace(['"', "'", '/', '\\'], '', $remark64);
            } else {
                $remark64 = "";
            }




            // $is_checked = isset($_POST["is_checked"]) ? 1 : 0;
            // persiapan ubah data
            $ubah = mysqli_query($koneksi, "UPDATE title_flight SET 
                                                        flt = '" . $tflt . "', reg = '" . $treg . "', date = '" . $tdate . "', dep = '" . $tdep . "',
                                                        Quanty  = '$quantyValue',   S = '$s_status',   US = '$us_status',  remark1 = '" . $remark . "', S2 = '$s_status2', US2 = '$us_status2', remark2 = '" . $remark2 . "',
                                                        Quanty2 = '$quantyValue1', S3 = '$s_status3', US3 = '$us_status3', remark3 = '" . $remark3 . "', S4 = '$s_status4', US4 = '$us_status4', remark4 = '" . $remark4 . "',
                                                        Quanty3 = '$quantyValue2', S5 = '$s_status5', US5 = '$us_status5', remark5 = '" . $remark5 . "', S6 = '$s_status6', US6 = '$us_status6', remark6 = '" . $remark6 . "',
                                                        Quanty4 = '$quantyValue3', S7 = '$s_status7', US7 = '$us_status7', remark7 = '" . $remark7 . "', S8 = '$s_status8', US8 = '$us_status8', remark8 = '" . $remark8 . "', 
                                                        Quanty5 = '$quantyValue4', S9 = '$s_status9', US9 = '$us_status9', remark9 = '" . $remark9 . "', S10 = '$s_status10', US10 = '$us_status10', remark10 = '" . $remark10 . "',
                                                        Quanty6 = '$quantyValue5', S11 = '$s_status11', US11 = '$us_status11', remark11 = '" . $remark11 . "', S12 = '$s_status12', US12 = '$us_status12', remark12 = '" . $remark12 . "',
                                                        Quanty7 = '$quantyValue6', S13 = '$s_status13', US13 = '$us_status13', remark13 = '" . $remark13 . "', S14 = '$s_status14', US14 = '$us_status14', remark14 = '" . $remark14 . "',
                                                        Quanty8 = '$quantyValue7', S15 = '$s_status15', US15 = '$us_status15', remark15 = '" . $remark15 . "', S16 = '$s_status16', US16 = '$us_status16', remark16 = '" . $remark16 . "',
                                                        Quanty9 = '$quantyValue8', S17 = '$s_status17', US17 = '$us_status17', remark17 = '" . $remark17 . "', S18 = '$s_status18', US18 = '$us_status18', remark18 = '" . $remark18 . "',
                                                        Quanty10 = '$quantyValue9', S19 = '$s_status19', US19 = '$us_status19', remark19 = '" . $remark19 . "', S20 = '$s_status20', US20 = '$us_status20', remark20 = '" . $remark20 . "',
                                                        Quanty11 = '$quantyValue10', S21 = '$s_status21', US21 = '$us_status21', remark21 = '" . $remark21 . "', S22 = '$s_status22', US22 = '$us_status22', remark22 = '" . $remark22 . "',
                                                        Quanty12 = '$quantyValue11', S23 = '$s_status23', US23 = '$us_status23', remark23 = '" . $remark23 . "', S24 = '$s_status24', US24 = '$us_status24', remark24 = '" . $remark24 . "',
                                                        Quanty13 = '$quantyValue12', S25 = '$s_status25', US25 = '$us_status25', remark25 = '" . $remark25 . "', S26 = '$s_status26', US26 = '$us_status26', remark26 = '" . $remark26 . "',
                                                        Quanty14 = '$quantyValue13', S27 = '$s_status27', US27 = '$us_status27', remark27 = '" . $remark27 . "', S28 = '$s_status28', US28 = '$us_status28', remark28 = '" . $remark28 . "',
                                                        Quanty15 = '$quantyValue14', S29 = '$s_status29', US29 = '$us_status29', remark29 = '" . $remark29 . "', S30 = '$s_status30', US30 = '$us_status30', remark30 = '" . $remark30 . "',
                                                        Quanty16 = '$quantyValue15', S31 = '$s_status31', US31 = '$us_status31', remark31 = '" . $remark31 . "', S32 = '$s_status32', US32 = '$us_status32', remark32 = '" . $remark32 . "',
                                                        Quanty17 = '$quantyValue16', S33 = '$s_status33', US33 = '$us_status33', remark33 = '" . $remark33 . "', S34 = '$s_status34', US34 = '$us_status34', remark34 = '" . $remark34 . "',
                                                        Quanty18 = '$quantyValue17', S35 = '$s_status35', US35 = '$us_status35', remark35 = '" . $remark35 . "', S36 = '$s_status36', US36 = '$us_status36', remark36 = '" . $remark36 . "',
                                                        Quanty19 = '$quantyValue18', S37 = '$s_status37', US37 = '$us_status37', remark37 = '" . $remark37 . "', S38 = '$s_status38', US38 = '$us_status38', remark38 = '" . $remark38 . "',
                                                        Quanty20 = '$quantyValue19', S39 = '$s_status39', US39 = '$us_status39', remark39 = '" . $remark39 . "', S40 = '$s_status40', US40 = '$us_status40', remark40 = '" . $remark40 . "',
                                                        Quanty21 = '$quantyValue20', S41 = '$s_status41', US41 = '$us_status41', remark41 = '" . $remark41 . "', S42 = '$s_status42', US42 = '$us_status42', remark42 = '" . $remark42 . "',
                                                        Quanty22 = '$quantyValue21', S43 = '$s_status43', US43 = '$us_status43', remark43 = '" . $remark43 . "', S44 = '$s_status44', US44 = '$us_status44', remark44 = '" . $remark44 . "',
                                                        Quanty23 = '$quantyValue22', S45 = '$s_status45', US45 = '$us_status45', remark45 = '" . $remark45 . "', S46 = '$s_status46', US46 = '$us_status46', remark46 = '" . $remark46 . "',
                                                        Quanty24 = '$quantyValue23', S47 = '$s_status47', US47 = '$us_status47', remark47 = '" . $remark47 . "', S48 = '$s_status48', US48 = '$us_status48', remark48 = '" . $remark48 . "',
                                                        Quanty25 = '$quantyValue24', S49 = '$s_status49', US49 = '$us_status49', remark49 = '" . $remark49 . "', S50 = '$s_status50', US50 = '$us_status50', remark50 = '" . $remark50 . "',
                                                        Quanty26 = '$quantyValue25', S51 = '$s_status51', US51 = '$us_status51', remark51 = '" . $remark51 . "', S52 = '$s_status52', US52 = '$us_status52', remark52 = '" . $remark52 . "',
                                                        Quanty27 = '$quantyValue26', S53 = '$s_status53', US53 = '$us_status53', remark53 = '" . $remark53 . "', S54 = '$s_status54', US54 = '$us_status54', remark54 = '" . $remark54 . "',
                                                        Quanty28 = '$quantyValue27', S55 = '$s_status55', US55 = '$us_status55', remark55 = '" . $remark55 . "', S56 = '$s_status56', US56 = '$us_status56', remark56 = '" . $remark56 . "',
                                                        Quanty29 = '$quantyValue28', S57 = '$s_status57', US57 = '$us_status57', remark57 = '" . $remark57 . "', S58 = '$s_status58', US58 = '$us_status58', remark58 = '" . $remark58 . "',
                                                        Quanty30 = '$quantyValue29', S59 = '$s_status59', US59 = '$us_status59', remark59 = '" . $remark59 . "', S60 = '$s_status60', US60 = '$us_status60', remark60 = '" . $remark60 . "',
                                                        Quanty31 = '$quantyValue30', S61 = '$s_status61', US61 = '$us_status61', remark61 = '" . $remark61 . "', S62 = '$s_status62', US62 = '$us_status62', remark62 = '" . $remark62 . "',
                                                        Quanty32 = '$quantyValue31', S63 = '$s_status63', US63 = '$us_status63', remark63 = '" . $remark63 . "', S64 = '$s_status64', US64 = '$us_status64', remark64 = '" . $remark64 . "'
                                                WHERE id_flight = '$_POST[id_flight]'
                                    ");


            

            if ($ubah) {
                echo "<script>
                alert('Edit data Sukses!');
                window.location.href = '" . base_url('home') . "';
                </script>";
            } else {
                echo "<script>
                alert('Edit data Gagal!');
                window.location.href = '" . base_url('home') . "';
                </script>";
            }
        }
    }



    public function download_document()
    {
        // Menghasilkan konten HTML tampilan
        $html_content = $this->load->view('view', [], TRUE);

        // Menyimpan konten HTML sebagai file sementara
        $file_path = FCPATH . 'dokumen.html'; // FCPATH adalah direktori root aplikasi
        file_put_contents($file_path, $html_content);

        // Menyiapkan file untuk diunduh
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="dokumen.html"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));
        readfile($file_path);

        // Menghapus file sementara setelah diunduh
        unlink($file_path);
    }
}
