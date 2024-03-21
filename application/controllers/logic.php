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
            $treg = $_POST['treg'];
            $tdate = $_POST['tdate'];
            $tdep = $_POST['tdep'];

            // Cek apakah checkbox 'emergency' dicentang atau tidak
            // $is_checked = isset($_POST["is_checked"]) ? 1 : 0;

            $quantyValue = $_POST['qty'];

            $s_status = isset($_POST['s_status']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status = isset($_POST["us_status"]) ? 1 : 0;
            $remark = $_POST['remark1'];

            $s_status2 = isset($_POST['s_status2']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status2 = isset($_POST["us_status2"]) ? 1 : 0;
            $remark2 = $_POST['remark2'];

            $quantyValue1 = $_POST['qty1'];

            $s_status3 = isset($_POST['s_status3']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status3 = isset($_POST['us_status3']) ? 1 : 0; // Sama seperti di atas
            $remark3 = $_POST['remark3'];

            $s_status4 = isset($_POST['s_status4']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status4 = isset($_POST['us_status4']) ? 1 : 0; // Sama seperti di atas
            $remark4 = $_POST['remark4'];

            $quantyValue2 = $_POST['qty2'];

            $s_status5 = isset($_POST['s_status5']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status5 = isset($_POST['us_status5']) ? 1 : 0; // Sama seperti di atas
            $remark5 = $_POST['remark5'];

            $s_status6 = isset($_POST['s_status6']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status6 = isset($_POST['us_status6']) ? 1 : 0; // Sama seperti di atas
            $remark6 = $_POST['remark6'];

            $quantyValue3 = $_POST['qty3'];

            $s_status7 = isset($_POST['s_status7']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status7 = isset($_POST['us_status7']) ? 1 : 0; // Sama seperti di atas
            $remark7 = $_POST['remark7'];

            $s_status8 = isset($_POST['s_status8']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status8 = isset($_POST['us_status8']) ? 1 : 0; // Sama seperti di atas
            $remark8 = $_POST['remark8'];

            $quantyValue4 = $_POST['qty4'];

            $s_status9 = isset($_POST['s_status9']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status9 = isset($_POST['us_status9']) ? 1 : 0; // Sama seperti di atas
            $remark9 = $_POST['remark9'];

            $s_status10 = isset($_POST['s_status10']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status10 = isset($_POST['us_status10']) ? 1 : 0; // Sama seperti di atas
            $remark10 = $_POST['remark10'];

            $quantyValue5 = $_POST['qty5'];

            $s_status11 = isset($_POST['s_status11']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status11 = isset($_POST['us_status11']) ? 1 : 0; // Sama seperti di atas
            $remark11 = $_POST['remark11'];

            $s_status12 = isset($_POST['s_status12']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status12 = isset($_POST['us_status12']) ? 1 : 0; // Sama seperti di atas
            $remark12 = $_POST['remark12'];

            $quantyValue6 = $_POST['qty6'];

            $s_status13 = isset($_POST['s_status13']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status13 = isset($_POST['us_status13']) ? 1 : 0; // Sama seperti di atas
            $remark13 = $_POST['remark13'];

            $s_status14 = isset($_POST['s_status14']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status14 = isset($_POST['us_status14']) ? 1 : 0; // Sama seperti di atas
            $remark14 = $_POST['remark14'];

            $quantyValue7 = $_POST['qty7'];

            $s_status15 = isset($_POST['s_status15']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status15 = isset($_POST['us_status15']) ? 1 : 0; // Sama seperti di atas
            $remark15 = $_POST['remark15'];

            $s_status16 = isset($_POST['s_status16']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status16 = isset($_POST['us_status16']) ? 1 : 0; // Sama seperti di atas
            $remark16 = $_POST['remark16'];

            $quantyValue8 = $_POST['qty8'];

            $s_status17 = isset($_POST['s_status17']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status17 = isset($_POST['us_status17']) ? 1 : 0; // Sama seperti di atas
            $remark17 = $_POST['remark17'];

            $s_status18 = isset($_POST['s_status18']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status18 = isset($_POST['us_status18']) ? 1 : 0; // Sama seperti di atas
            $remark18 = $_POST['remark18'];

            $quantyValue9 = $_POST['qty9'];

            $s_status19 = isset($_POST['s_status19']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status19 = isset($_POST['us_status19']) ? 1 : 0; // Sama seperti di atas
            $remark19 = $_POST['remark19'];

            $s_status20 = isset($_POST['s_status20']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status20 = isset($_POST['us_status20']) ? 1 : 0; // Sama seperti di atas
            $remark20 = $_POST['remark20'];

            $quantyValue10 = $_POST['qty10'];

            $s_status21 = isset($_POST['s_status21']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status21 = isset($_POST['us_status21']) ? 1 : 0; // Sama seperti di atas
            $remark21 = $_POST['remark21'];

            $s_status22 = isset($_POST['s_status22']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status22 = isset($_POST['us_status22']) ? 1 : 0; // Sama seperti di atas
            $remark22 = $_POST['remark22'];

            $quantyValue11 = $_POST['qty11'];

            $s_status23 = isset($_POST['s_status23']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status23 = isset($_POST['us_status23']) ? 1 : 0; // Sama seperti di atas
            $remark23 = $_POST['remark23'];

            $s_status24 = isset($_POST['s_status24']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status24 = isset($_POST['us_status24']) ? 1 : 0; // Sama seperti di atas
            $remark24 = $_POST['remark24'];

            $quantyValue12 = $_POST['qty12'];

            $s_status25 = isset($_POST['s_status25']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status25 = isset($_POST['us_status25']) ? 1 : 0; // Sama seperti di atas
            $remark25 = $_POST['remark25'];

            $s_status26 = isset($_POST['s_status26']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status26 = isset($_POST['us_status26']) ? 1 : 0; // Sama seperti di atas
            $remark26 = $_POST['remark26'];

            $quantyValue13 = $_POST['qty13'];

            $s_status27 = isset($_POST['s_status27']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status27 = isset($_POST['us_status27']) ? 1 : 0; // Sama seperti di atas
            $remark27 = $_POST['remark27'];

            $s_status28 = isset($_POST['s_status28']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status28 = isset($_POST['us_status28']) ? 1 : 0; // Sama seperti di atas
            $remark28 = $_POST['remark28'];

            $quantyValue14 = $_POST['qty14'];

            $s_status29 = isset($_POST['s_status29']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status29 = isset($_POST['us_status29']) ? 1 : 0; // Sama seperti di atas
            $remark29 = $_POST['remark29'];

            $s_status30 = isset($_POST['s_status30']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status30 = isset($_POST['us_status30']) ? 1 : 0; // Sama seperti di atas
            $remark30 = $_POST['remark30'];


            $quantyValue15 = $_POST['qty15'];

            $s_status31 = isset($_POST['s_status31']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status31 = isset($_POST['us_status31']) ? 1 : 0; // Sama seperti di atas
            $remark31 = $_POST['remark31'];

            $s_status32 = isset($_POST['s_status32']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status32 = isset($_POST['us_status32']) ? 1 : 0; // Sama seperti di atas
            $remark32 = $_POST['remark32'];


            $quantyValue16 = $_POST['qty16'];

            $s_status33 = isset($_POST['s_status33']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status33 = isset($_POST['us_status33']) ? 1 : 0; // Sama seperti di atas
            $remark33 = $_POST['remark33'];

            $s_status34 = isset($_POST['s_status34']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status34 = isset($_POST['us_status34']) ? 1 : 0; // Sama seperti di atas
            $remark34 = $_POST['remark34'];


            $quantyValue17 = $_POST['qty17'];

            $s_status35 = isset($_POST['s_status35']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status35 = isset($_POST['us_status35']) ? 1 : 0; // Sama seperti di atas
            $remark35 = $_POST['remark35'];

            $s_status36 = isset($_POST['s_status36']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status36 = isset($_POST['us_status36']) ? 1 : 0; // Sama seperti di atas
            $remark36 = $_POST['remark36'];


            $quantyValue18 = $_POST['qty18'];

            $s_status37 = isset($_POST['s_status37']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status37 = isset($_POST['us_status37']) ? 1 : 0; // Sama seperti di atas
            $remark37 = $_POST['remark37'];

            $s_status38 = isset($_POST['s_status38']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status38 = isset($_POST['us_status38']) ? 1 : 0; // Sama seperti di atas
            $remark38 = $_POST['remark38'];


            $quantyValue19 = $_POST['qty19'];

            $s_status39 = isset($_POST['s_status39']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status39 = isset($_POST['us_status39']) ? 1 : 0; // Sama seperti di atas
            $remark39 = $_POST['remark39'];

            $s_status40 = isset($_POST['s_status40']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status40 = isset($_POST['us_status40']) ? 1 : 0; // Sama seperti di atas
            $remark40 = $_POST['remark40'];


            $quantyValue20 = $_POST['qty20'];

            $s_status41 = isset($_POST['s_status41']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status41 = isset($_POST['us_status41']) ? 1 : 0; // Sama seperti di atas
            $remark41 = $_POST['remark41'];

            $s_status42 = isset($_POST['s_status42']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status42 = isset($_POST['us_status42']) ? 1 : 0; // Sama seperti di atas
            $remark42 = $_POST['remark42'];


            $quantyValue21 = $_POST['qty21'];

            $s_status43 = isset($_POST['s_status43']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status43 = isset($_POST['us_status43']) ? 1 : 0; // Sama seperti di atas
            $remark43 = $_POST['remark43'];

            $s_status44 = isset($_POST['s_status44']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status44 = isset($_POST['us_status44']) ? 1 : 0; // Sama seperti di atas
            $remark44 = $_POST['remark44'];


            $quantyValue22 = $_POST['qty22'];

            $s_status45 = isset($_POST['s_status45']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status45 = isset($_POST['us_status45']) ? 1 : 0; // Sama seperti di atas
            $remark45 = $_POST['remark45'];

            $s_status46 = isset($_POST['s_status46']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status46 = isset($_POST['us_status46']) ? 1 : 0; // Sama seperti di atas
            $remark46 = $_POST['remark46'];


            $quantyValue23 = $_POST['qty23'];

            $s_status47 = isset($_POST['s_status47']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status47 = isset($_POST['us_status47']) ? 1 : 0; // Sama seperti di atas
            $remark47 = $_POST['remark47'];

            $s_status48 = isset($_POST['s_status48']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status48 = isset($_POST['us_status48']) ? 1 : 0; // Sama seperti di atas
            $remark48 = $_POST['remark48'];


            $quantyValue24 = $_POST['qty24'];

            $s_status49 = isset($_POST['s_status49']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status49 = isset($_POST['us_status49']) ? 1 : 0; // Sama seperti di atas
            $remark49 = $_POST['remark49'];

            $s_status50 = isset($_POST['s_status50']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status50 = isset($_POST['us_status50']) ? 1 : 0; // Sama seperti di atas
            $remark50 = $_POST['remark50'];


            $quantyValue25 = $_POST['qty25'];

            $s_status51 = isset($_POST['s_status51']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status51 = isset($_POST['us_status51']) ? 1 : 0; // Sama seperti di atas
            $remark51 = $_POST['remark51'];

            $s_status52 = isset($_POST['s_status52']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status52 = isset($_POST['us_status52']) ? 1 : 0; // Sama seperti di atas
            $remark52 = $_POST['remark52'];


            $quantyValue26 = $_POST['qty26'];

            $s_status53 = isset($_POST['s_status53']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status53 = isset($_POST['us_status53']) ? 1 : 0; // Sama seperti di atas
            $remark53 = $_POST['remark53'];

            $s_status54 = isset($_POST['s_status54']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status54 = isset($_POST['us_status54']) ? 1 : 0; // Sama seperti di atas
            $remark54 = $_POST['remark54'];


            $quantyValue27 = $_POST['qty27'];

            $s_status55 = isset($_POST['s_status55']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status55 = isset($_POST['us_status55']) ? 1 : 0; // Sama seperti di atas
            $remark55 = $_POST['remark55'];

            $s_status56 = isset($_POST['s_status56']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status56 = isset($_POST['us_status56']) ? 1 : 0; // Sama seperti di atas
            $remark56 = $_POST['remark56'];


            $quantyValue28 = $_POST['qty28'];

            $s_status57 = isset($_POST['s_status57']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status57 = isset($_POST['us_status57']) ? 1 : 0; // Sama seperti di atas
            $remark57 = $_POST['remark57'];

            $s_status58 = isset($_POST['s_status58']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status58 = isset($_POST['us_status58']) ? 1 : 0; // Sama seperti di atas
            $remark58 = $_POST['remark58'];


            $quantyValue29 = $_POST['qty29'];

            $s_status59 = isset($_POST['s_status59']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status59 = isset($_POST['us_status59']) ? 1 : 0; // Sama seperti di atas
            $remark59 = $_POST['remark59'];

            $s_status60 = isset($_POST['s_status60']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status60 = isset($_POST['us_status60']) ? 1 : 0; // Sama seperti di atas
            $remark60 = $_POST['remark60'];


            $quantyValue30 = $_POST['qty30'];

            $s_status61 = isset($_POST['s_status61']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status61 = isset($_POST['us_status61']) ? 1 : 0; // Sama seperti di atas
            $remark61 = $_POST['remark61'];

            $s_status62 = isset($_POST['s_status62']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status62 = isset($_POST['us_status62']) ? 1 : 0; // Sama seperti di atas
            $remark62 = $_POST['remark62'];


            $quantyValue31 = $_POST['qty31'];

            $s_status63 = isset($_POST['s_status63']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status63 = isset($_POST['us_status63']) ? 1 : 0; // Sama seperti di atas
            $remark63 = $_POST['remark63'];

            $s_status64 = isset($_POST['s_status64']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status64 = isset($_POST['us_status64']) ? 1 : 0; // Sama seperti di atas
            $remark64 = $_POST['remark64'];



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
                document.location='index.php';
             </script>";
            } else {
                echo "<script>
                alert('Hapus data gagal!');
                document.location='index.php';
             </script>";
            }

            $this->load->helper('url');

            // Jika data berhasil ditambahkan
            // $this->session->set_flashdata('success_message', 'Data berhasil ditambahkan.');

            // Redirect kembali ke halaman utama
            redirect(base_url('/pages/view'));
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
            $treg = $_POST['treg'];
            $tdate = $_POST['tdate'];
            $tdep = $_POST['tdep'];

            // Cek apakah checkbox 'emergency' dicentang atau tidak
            //  $is_checked = isset($_POST["is_checked"]) ? 1 : 0;

            $quantyValue = $_POST['qty'];

            $s_status = isset($_POST['s_status']) ? $_POST['s_status'] : ''; // Menggunakan isset() untuk memeriksa keberadaan indeks 's_status'
            $us_status = isset($_POST["us_status"]) && $_POST['us_status'] != '' ? 1 : 0;
            $s_status2 = isset($_POST['s_status2']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status2 = isset($_POST["us_status2"]) ? 1 : 0;
            $remark = $_POST['remark1'];
            $remark2 = $_POST['remark2'];

            $quantyValue1 = $_POST['qty1'];

            $s_status3 = isset($_POST['s_status3']) ? $_POST['s_status3'] : 0;  // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status3 = isset($_POST['us_status3']) ? 1 : 0; // Sama seperti di atas
            $s_status4 = isset($_POST['s_status4']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status4 = isset($_POST['us_status4']) ? 1 : 0; // Sama seperti di atas
            $remark3 = $_POST['remark3'];
            $remark4 = $_POST['remark4'];

            $quantyValue2 = $_POST['qty2'];

            $s_status5 = isset($_POST['s_status5']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status5 = isset($_POST['us_status5']) ? 1 : 0; // Sama seperti di atas
            $s_status6 = isset($_POST['s_status6']) ? 1 : 0; // Jika checkbox 's_status3' dicentang, nilainya akan 1, jika tidak, nilainya akan 0
            $us_status6 = isset($_POST['us_status6']) ? 1 : 0; // Sama seperti di atas
            $remark5 = $_POST['remark5'];
            $remark6 = $_POST['remark6'];

            $quantyValue3 = $_POST['qty3'];

            $s_status7 = isset($_POST['s_status7']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status7 = isset($_POST["us_status7"]) ? 1 : 0;
            $s_status8 = isset($_POST['s_status8']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status8 = isset($_POST["us_status8"]) ? 1 : 0;
            $remark7 = $_POST['remark7'];
            $remark8 = $_POST['remark8'];

            $quantyValue4 = $_POST['qty4'];

            $s_status9 = isset($_POST['s_status9']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status9 = isset($_POST["us_status9"]) ? 1 : 0;
            $s_status10 = isset($_POST['s_status10']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status10 = isset($_POST["us_status10"]) ? 1 : 0;
            $remark9 = $_POST['remark9'];
            $remark10 = $_POST['remark10'];

            $quantyValue5 = $_POST['qty5'];

            $s_status11 = isset($_POST['s_status11']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status11 = isset($_POST["us_status11"]) ? 1 : 0;
            $s_status12 = isset($_POST['s_status12']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status12 = isset($_POST["us_status12"]) ? 1 : 0;
            $remark11 = $_POST['remark11'];
            $remark12 = $_POST['remark12'];

            $quantyValue6 = $_POST['qty6'];

            $s_status13 = isset($_POST['s_status13']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status13 = isset($_POST["us_status13"]) ? 1 : 0;
            $s_status14 = isset($_POST['s_status14']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status14 = isset($_POST["us_status14"]) ? 1 : 0;
            $remark13 = $_POST['remark13'];
            $remark14 = $_POST['remark14'];

            $quantyValue7 = $_POST['qty7'];

            $s_status15 = isset($_POST['s_status15']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status15 = isset($_POST["us_status15"]) ? 1 : 0;
            $s_status16 = isset($_POST['s_status16']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status16 = isset($_POST["us_status16"]) ? 1 : 0;
            $remark15 = $_POST['remark15'];
            $remark16 = $_POST['remark16'];

            $quantyValue8 = $_POST['qty8'];

            $s_status17 = isset($_POST['s_status17']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status17 = isset($_POST["us_status17"]) ? 1 : 0;
            $s_status18 = isset($_POST['s_status18']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status18 = isset($_POST["us_status18"]) ? 1 : 0;
            $remark17 = $_POST['remark17'];
            $remark18 = $_POST['remark18'];

            $quantyValue9 = $_POST['qty9'];

            $s_status19 = isset($_POST['s_status19']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status19 = isset($_POST["us_status19"]) ? 1 : 0;
            $s_status20 = isset($_POST['s_status20']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status20 = isset($_POST["us_status20"]) ? 1 : 0;
            $remark19 = $_POST['remark19'];
            $remark20 = $_POST['remark20'];

            $quantyValue10 = $_POST['qty10'];

            $s_status21 = isset($_POST['s_status21']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status21 = isset($_POST["us_status21"]) ? 1 : 0;
            $s_status22 = isset($_POST['s_status22']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status22 = isset($_POST["us_status22"]) ? 1 : 0;
            $remark21 = $_POST['remark21'];
            $remark22 = $_POST['remark22'];

            $quantyValue11 = $_POST['qty11'];

            $s_status23 = isset($_POST['s_status23']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status23 = isset($_POST["us_status23"]) ? 1 : 0;
            $s_status24 = isset($_POST['s_status24']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status24 = isset($_POST["us_status24"]) ? 1 : 0;
            $remark23 = $_POST['remark23'];
            $remark24 = $_POST['remark24'];

            $quantyValue12 = $_POST['qty12'];

            $s_status25 = isset($_POST['s_status25']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status25 = isset($_POST["us_status25"]) ? 1 : 0;
            $s_status26 = isset($_POST['s_status26']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status26 = isset($_POST["us_status26"]) ? 1 : 0;
            $remark25 = $_POST['remark25'];
            $remark26 = $_POST['remark26'];

            $quantyValue13 = $_POST['qty13'];

            $s_status27 = isset($_POST['s_status27']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status27 = isset($_POST["us_status27"]) ? 1 : 0;
            $s_status28 = isset($_POST['s_status28']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status28 = isset($_POST["us_status28"]) ? 1 : 0;
            $remark27 = $_POST['remark27'];
            $remark28 = $_POST['remark28'];

            $quantyValue14 = $_POST['qty14'];

            $s_status29 = isset($_POST['s_status29']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status29 = isset($_POST["us_status29"]) ? 1 : 0;
            $s_status30 = isset($_POST['s_status30']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status30 = isset($_POST["us_status30"]) ? 1 : 0;
            $remark29 = $_POST['remark29'];
            $remark30 = $_POST['remark30'];

            $quantyValue15 = $_POST['qty15'];

            $s_status31 = isset($_POST['s_status31']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status31 = isset($_POST["us_status31"]) ? 1 : 0;
            $s_status32 = isset($_POST['s_status32']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status32 = isset($_POST["us_status32"]) ? 1 : 0;
            $remark31 = $_POST['remark31'];
            $remark32 = $_POST['remark32'];

            $quantyValue16 = $_POST['qty16'];

            $s_status33 = isset($_POST['s_status33']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status33 = isset($_POST["us_status33"]) ? 1 : 0;
            $s_status34 = isset($_POST['s_status34']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status34 = isset($_POST["us_status34"]) ? 1 : 0;
            $remark33 = $_POST['remark33'];
            $remark34 = $_POST['remark34'];

            $quantyValue17 = $_POST['qty17'];

            $s_status35 = isset($_POST['s_status35']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status35 = isset($_POST["us_status35"]) ? 1 : 0;
            $s_status36 = isset($_POST['s_status36']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status36 = isset($_POST["us_status36"]) ? 1 : 0;
            $remark35 = $_POST['remark35'];
            $remark36 = $_POST['remark36'];

            $quantyValue18 = $_POST['qty18'];

            $s_status37 = isset($_POST['s_status37']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status37 = isset($_POST["us_status37"]) ? 1 : 0;
            $s_status38 = isset($_POST['s_status38']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status38 = isset($_POST["us_status38"]) ? 1 : 0;
            $remark37 = $_POST['remark37'];
            $remark38 = $_POST['remark38'];

            $quantyValue19 = $_POST['qty19'];

            $s_status39 = isset($_POST['s_status39']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status39 = isset($_POST["us_status39"]) ? 1 : 0;
            $s_status40 = isset($_POST['s_status40']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status40 = isset($_POST["us_status40"]) ? 1 : 0;
            $remark39 = $_POST['remark39'];
            $remark40 = $_POST['remark40'];

            $quantyValue20 = $_POST['qty20'];

            $s_status41 = isset($_POST['s_status41']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status41 = isset($_POST["us_status41"]) ? 1 : 0;
            $s_status42 = isset($_POST['s_status42']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status42 = isset($_POST["us_status42"]) ? 1 : 0;
            $remark41 = $_POST['remark41'];
            $remark42 = $_POST['remark42'];

            $quantyValue21 = $_POST['qty21'];

            $s_status43 = isset($_POST['s_status43']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status43 = isset($_POST["us_status43"]) ? 1 : 0;
            $s_status44 = isset($_POST['s_status44']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status44 = isset($_POST["us_status44"]) ? 1 : 0;
            $remark43 = $_POST['remark43'];
            $remark44 = $_POST['remark44'];

            $quantyValue22 = $_POST['qty22'];

            $s_status45 = isset($_POST['s_status45']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status45 = isset($_POST["us_status45"]) ? 1 : 0;
            $s_status46 = isset($_POST['s_status46']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status46 = isset($_POST["us_status46"]) ? 1 : 0;
            $remark45 = $_POST['remark45'];
            $remark46 = $_POST['remark46'];

            $quantyValue23 = $_POST['qty23'];

            $s_status47 = isset($_POST['s_status47']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status47 = isset($_POST["us_status47"]) ? 1 : 0;
            $s_status48 = isset($_POST['s_status48']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status48 = isset($_POST["us_status48"]) ? 1 : 0;
            $remark47 = $_POST['remark47'];
            $remark48 = $_POST['remark48'];

            $quantyValue24 = $_POST['qty24'];

            $s_status49 = isset($_POST['s_status49']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status49 = isset($_POST["us_status49"]) ? 1 : 0;
            $s_status50 = isset($_POST['s_status50']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status50 = isset($_POST["us_status50"]) ? 1 : 0;
            $remark49 = $_POST['remark50'];
            $remark50 = $_POST['remark50'];

            $quantyValue25 = $_POST['qty25'];

            $s_status51 = isset($_POST['s_status51']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status51 = isset($_POST["us_status51"]) ? 1 : 0;
            $s_status52 = isset($_POST['s_status52']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status52 = isset($_POST["us_status52"]) ? 1 : 0;
            $remark51 = $_POST['remark51'];
            $remark52 = $_POST['remark52'];

            $quantyValue26 = $_POST['qty26'];

            $s_status53 = isset($_POST['s_status53']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status53 = isset($_POST["us_status53"]) ? 1 : 0;
            $s_status54 = isset($_POST['s_status54']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status54 = isset($_POST["us_status54"]) ? 1 : 0;
            $remark53 = $_POST['remark53'];
            $remark54 = $_POST['remark54'];

            $quantyValue27 = $_POST['qty27'];

            $s_status55 = isset($_POST['s_status55']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status55 = isset($_POST["us_status55"]) ? 1 : 0;
            $s_status56 = isset($_POST['s_status56']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status56 = isset($_POST["us_status56"]) ? 1 : 0;
            $remark55 = $_POST['remark55'];
            $remark56 = $_POST['remark56'];

            $quantyValue28 = $_POST['qty28'];

            $s_status57 = isset($_POST['s_status57']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status57 = isset($_POST["us_status57"]) ? 1 : 0;
            $s_status58 = isset($_POST['s_status58']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status58 = isset($_POST["us_status58"]) ? 1 : 0;
            $remark57 = $_POST['remark57'];
            $remark58 = $_POST['remark58'];

            $quantyValue29 = $_POST['qty29'];

            $s_status59 = isset($_POST['s_status59']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status59 = isset($_POST["us_status59"]) ? 1 : 0;
            $s_status60 = isset($_POST['s_status60']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status60 = isset($_POST["us_status60"]) ? 1 : 0;
            $remark59 = $_POST['remark59'];
            $remark60 = $_POST['remark60'];

            $quantyValue30 = $_POST['qty30'];

            $s_status61 = isset($_POST['s_status61']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status61 = isset($_POST["us_status61"]) ? 1 : 0;
            $s_status62 = isset($_POST['s_status62']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status62 = isset($_POST["us_status62"]) ? 1 : 0;
            $remark61 = $_POST['remark61'];
            $remark62 = $_POST['remark62'];

            $quantyValue31 = $_POST['qty31'];

            $s_status63 = isset($_POST['s_status63']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status63 = isset($_POST["us_status63"]) ? 1 : 0;
            $s_status64 = isset($_POST['s_status64']) ? 1 : 0; // Jika checkbox tercentang, nilainya 1; jika tidak, nilainya 0
            $us_status64 = isset($_POST["us_status64"]) ? 1 : 0;
            $remark63 = $_POST['remark63'];
            $remark64 = $_POST['remark64'];



            // Melakukan sanitasi terhadap data yang akan dimasukkan ke dalam query SQL
            $tflt = mysqli_real_escape_string($koneksi, $tflt);
            $treg = mysqli_real_escape_string($koneksi, $treg);
            $tdate = mysqli_real_escape_string($koneksi, $tdate);
            $tdep = mysqli_real_escape_string($koneksi, $tdep);

            // $is_checked = isset($_POST["is_checked"]) ? 1 : 0;
            // persiapan ubah data
            $ubah = mysqli_query($koneksi, "UPDATE title_flight SET 
                                                        flt = '$_POST[tflt]', reg = '$_POST[treg]', date = '$_POST[tdate]', dep = '$_POST[tdep]',
                                                        Quanty  = '$_POST[qty]',   S = '$_POST[s_status]',   US = '$_POST[us_status]',  remark1 = '$_POST[remark1]', S2 = '$_POST[s_status2]', US2 = '$_POST[us_status2]', remark2 = '$_POST[remark2]',
                                                        Quanty2 = '$_POST[qty1]', S3 = '$_POST[s_status3]', US3 = '$_POST[us_status3]', remark3 = '$_POST[remark3]', S4 = '$_POST[s_status4]', US4 = '$_POST[us_status4]', remark4 = '$_POST[remark4]',
                                                        Quanty3 = '$_POST[qty2]', S5 = '$_POST[s_status5]', US5 = '$_POST[us_status5]', remark5 = '$_POST[remark5]', S6 = '$_POST[s_status6]', US6 = '$_POST[us_status6]', remark6 = '$_POST[remark6]',
                                                        Quanty4 = '$_POST[qty3]', S7 = '$_POST[s_status7]', US7 = '$_POST[us_status7]', remark7 = '$_POST[remark7]', S8 = '$_POST[s_status8]', US8 = '$_POST[us_status8]', remark8 = '$_POST[remark8]',
                                                        Quanty5 = '$_POST[qty4]', S9 = '$_POST[s_status9]', US9 = '$_POST[us_status9]', remark9 = '$_POST[remark9]', S10 = '$_POST[s_status10]', US10 = '$_POST[us_status10]', remark10 = '$_POST[remark10]',
                                                        Quanty6 = '$_POST[qty5]', S11 = '$_POST[s_status11]', US11 = '$_POST[us_status11]', remark11 = '$_POST[remark11]', S12 = '$_POST[s_status12]', US12 = '$_POST[us_status12]', remark12 = '$_POST[remark12]',
                                                        Quanty7 = '$_POST[qty6]', S13 = '$_POST[s_status13]', US13 = '$_POST[us_status13]', remark13 = '$_POST[remark13]', S14 = '$_POST[s_status14]', US14 = '$_POST[us_status14]', remark14 = '$_POST[remark14]',
                                                        Quanty8 = '$_POST[qty7]', S15 = '$_POST[s_status15]', US15 = '$_POST[us_status15]', remark15 = '$_POST[remark15]', S16 = '$_POST[s_status16]', US16 = '$_POST[us_status16]', remark16 = '$_POST[remark16]',
                                                        Quanty9 = '$_POST[qty8]', S17 = '$_POST[s_status17]', US17 = '$_POST[us_status17]', remark17 = '$_POST[remark17]', S18 = '$_POST[s_status18]', US18 = '$_POST[us_status18]', remark18 = '$_POST[remark18]',
                                                        Quanty10 = '$_POST[qty9]', S19 = '$_POST[s_status19]', US19 = '$_POST[us_status19]', remark19 = '$_POST[remark19]', S20 = '$_POST[s_status20]', US20 = '$_POST[us_status20]', remark20 = '$_POST[remark20]',
                                                        Quanty11 = '$_POST[qty10]', S21 = '$_POST[s_status21]', US21 = '$_POST[us_status21]', remark21 = '$_POST[remark21]', S22 = '$_POST[s_status22]', US22 = '$_POST[us_status22]', remark22 = '$_POST[remark22]',
                                                        Quanty12 = '$_POST[qty11]', S23 = '$_POST[s_status23]', US23 = '$_POST[us_status23]', remark23 = '$_POST[remark23]', S24 = '$_POST[s_status24]', US24 = '$_POST[us_status24]', remark24 = '$_POST[remark24]',
                                                        Quanty13 = '$_POST[qty12]', S25 = '$_POST[s_status25]', US25 = '$_POST[us_status25]', remark25 = '$_POST[remark25]', S26 = '$_POST[s_status26]', US26 = '$_POST[us_status26]', remark26 = '$_POST[remark26]',
                                                        Quanty14 = '$_POST[qty13]', S27 = '$_POST[s_status27]', US27 = '$_POST[us_status27]', remark27 = '$_POST[remark27]', S28 = '$_POST[s_status28]', US28 = '$_POST[us_status28]', remark28 = '$_POST[remark28]',
                                                        Quanty15 = '$_POST[qty14]', S29 = '$_POST[s_status29]', US29 = '$_POST[us_status29]', remark29 = '$_POST[remark29]', S30 = '$_POST[s_status30]', US30 = '$_POST[us_status30]', remark30 = '$_POST[remark30]',
                                                        Quanty16 = '$_POST[qty15]', S31 = '$_POST[s_status31]', US31 = '$_POST[us_status31]', remark31 = '$_POST[remark31]', S32 = '$_POST[s_status32]', US32 = '$_POST[us_status32]', remark32 = '$_POST[remark32]',
                                                        Quanty17 = '$_POST[qty16]', S33 = '$_POST[s_status33]', US33 = '$_POST[us_status33]', remark33 = '$_POST[remark33]', S34 = '$_POST[s_status34]', US34 = '$_POST[us_status34]', remark34 = '$_POST[remark34]',
                                                        Quanty18 = '$_POST[qty17]', S35 = '$_POST[s_status35]', US35 = '$_POST[us_status35]', remark35 = '$_POST[remark35]', S36 = '$_POST[s_status36]', US36 = '$_POST[us_status36]', remark36 = '$_POST[remark36]',
                                                        Quanty19 = '$_POST[qty18]', S37 = '$_POST[s_status37]', US37 = '$_POST[us_status37]', remark37 = '$_POST[remark37]', S38 = '$_POST[s_status38]', US38 = '$_POST[us_status38]', remark38 = '$_POST[remark38]',
                                                        Quanty20 = '$_POST[qty19]', S39 = '$_POST[s_status39]', US39 = '$_POST[us_status39]', remark39 = '$_POST[remark39]', S40 = '$_POST[s_status40]', US40 = '$_POST[us_status40]', remark40 = '$_POST[remark40]',
                                                        Quanty21 = '$_POST[qty20]', S41 = '$_POST[s_status41]', US41 = '$_POST[us_status41]', remark41 = '$_POST[remark41]', S42 = '$_POST[s_status42]', US42 = '$_POST[us_status42]', remark42 = '$_POST[remark42]',
                                                        Quanty22 = '$_POST[qty21]', S43 = '$_POST[s_status43]', US43 = '$_POST[us_status43]', remark43 = '$_POST[remark43]', S44 = '$_POST[s_status44]', US44 = '$_POST[us_status44]', remark44 = '$_POST[remark44]',
                                                        Quanty23 = '$_POST[qty22]', S45 = '$_POST[s_status45]', US45 = '$_POST[us_status45]', remark45 = '$_POST[remark45]', S46 = '$_POST[s_status46]', US46 = '$_POST[us_status46]', remark46 = '$_POST[remark46]',
                                                        Quanty24 = '$_POST[qty23]', S47 = '$_POST[s_status47]', US47 = '$_POST[us_status47]', remark47 = '$_POST[remark47]', S48 = '$_POST[s_status48]', US48 = '$_POST[us_status48]', remark48 = '$_POST[remark48]',
                                                        Quanty25 = '$_POST[qty24]', S49 = '$_POST[s_status49]', US49 = '$_POST[us_status49]', remark49 = '$_POST[remark49]', S50 = '$_POST[s_status50]', US50 = '$_POST[us_status50]', remark50 = '$_POST[remark50]',
                                                        Quanty26 = '$_POST[qty25]', S51 = '$_POST[s_status51]', US51 = '$_POST[us_status51]', remark51 = '$_POST[remark51]', S52 = '$_POST[s_status52]', US52 = '$_POST[us_status52]', remark52 = '$_POST[remark52]',
                                                        Quanty27 = '$_POST[qty26]', S53 = '$_POST[s_status53]', US53 = '$_POST[us_status53]', remark53 = '$_POST[remark53]', S54 = '$_POST[s_status54]', US54 = '$_POST[us_status54]', remark54 = '$_POST[remark54]',
                                                        Quanty28 = '$_POST[qty27]', S55 = '$_POST[s_status55]', US55 = '$_POST[us_status55]', remark55 = '$_POST[remark55]', S56 = '$_POST[s_status56]', US56 = '$_POST[us_status56]', remark56 = '$_POST[remark56]',
                                                        Quanty29 = '$_POST[qty28]', S57 = '$_POST[s_status57]', US57 = '$_POST[us_status57]', remark57 = '$_POST[remark57]', S58 = '$_POST[s_status58]', US58 = '$_POST[us_status58]', remark58 = '$_POST[remark58]',
                                                        Quanty30 = '$_POST[qty29]', S59 = '$_POST[s_status59]', US59 = '$_POST[us_status59]', remark59 = '$_POST[remark59]', S60 = '$_POST[s_status60]', US60 = '$_POST[us_status60]', remark60 = '$_POST[remark60]',
                                                        Quanty31 = '$_POST[qty30]', S61 = '$_POST[s_status61]', US61 = '$_POST[us_status61]', remark61 = '$_POST[remark61]', S62 = '$_POST[s_status62]', US62 = '$_POST[us_status62]', remark62 = '$_POST[remark62]',
                                                        Quanty32 = '$_POST[qty31]', S63 = '$_POST[s_status63]', US63 = '$_POST[us_status63]', remark63 = '$_POST[remark63]', S64 = '$_POST[s_status64]', US64 = '$_POST[us_status64]', remark64 = '$_POST[remark64]'
                                                WHERE id_flight = '$_POST[id_flight]'
                                    ");

            if ($ubah) {
                echo "<script>
                alert('Ubah data sukses!');
                window.location.href = '" . base_url('home') . "';
                </script>";
            } else {
                echo "<script>
                alert('Ubah data gagal!');
                window.location.href = '" . base_url('home') . "';
                </script>";
            }


            // Redirect ke halaman homepage
            // redirect(base_url('pages/view')); // Ganti base_url() dengan alamat halaman homepage Anda



            // $this->load->helper('url');

            // redirect(base_url('/pages/view'));
        }
    }



    public function download_document() {
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
