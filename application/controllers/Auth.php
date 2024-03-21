<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function aksiDelete() {

        $username = 'root';
        $password = '';
        $database = 'preflight';
        
        //mengkoneksikan ke database 
        $conn = new mysqli($username, $password, $database );

        //memeriksa koneksi
        if ($conn->connect_error){
            die("koneksi ke database gagal!" . $conn->connect_error);
        }

        //mendapatkan ID item yang dihapus dari parameter URL
        $flight_id = $_GET['id_flight'];


        //query untuk menghapus item dari tabel 
        $sql ="DELETE FROM title_flight WHERE id_flight=$flight_id";

        if ($conn->query($sql) === TRUE) {
            echo "Item berhasil dihapus";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


    public function aksiInput() {
        
    } 
}
