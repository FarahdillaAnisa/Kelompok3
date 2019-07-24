<?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // include database connection file
        include ("koneksi.php");

        // Insert user data into table
        $result = mysqli_query($db, "INSERT INTO user (nama,email,nohp,username,password) VALUES('$nama','$email','$nohp','$username','$password')");

        // Show message when user added
        echo "Tambah data user berhasil. <a href='crud.php'>Lihat Data</a>";
    }
    ?>