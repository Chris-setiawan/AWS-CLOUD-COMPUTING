<!DOCTYPE html>
<html>
<head>
    <title>IP Address Viewer</title>
</head>
<body>

    <h1>IP Address Viewer</h1>

    <?php
        // Mendapatkan alamat IP pengunjung
        $ip_address = $_SERVER['REMOTE_ADDR'];

        // Menampilkan alamat IP
        echo "<p>Your IP Address is: $ip_address</p>";
    ?>

</body>
</html>
