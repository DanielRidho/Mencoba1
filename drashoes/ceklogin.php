<?php
session_start();

// menghubungkan dengan koneksi
include "koneksi.php"; // Include the database connection file

// menangkap data yang dikirim dari form
$username_cust = $_POST['username_cust'];
$password_cust = $_POST['password_cust'];

// menyeleksi data admin dengan username dan password yang sesuai
$query = "SELECT * FROM customer WHERE username_cust='$username_cust' AND password_cust='$password_cust'";
$result = $konek->query($query);

// menghitung jumlah data yang ditemukan
$cek = $result->num_rows;

if ($cek > 0) {
    // Ambil data admin dari hasil query
    $adminData = $result->fetch_assoc();

    // Set session data
    $_SESSION['username_cust'] = $adminData['username_cust'];
        header("location:customer/customer.php");
 } 
 else {
    // Handle login failure
    header("location:index.php?pesan=gagal");
}

// Close the database connection
$konek->close();
?>