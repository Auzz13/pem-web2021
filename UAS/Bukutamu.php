<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Wisata </title>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css">
    <style>

    .topnav {
        overflow: hidden;
        background-color: #333;
    }
    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit] : hover {
        background-color: #45a049
    }

    textarea {
        width: 100%;
        height: 100px;
        padding: 10px 18px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
    }

    #tamu {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #tamu td, #tamu th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #tamu tr:nth-child(even) {background-color: #f2f2f2;}
    #tamu tr: hover {background-color: #ddd;}
    #tamu th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="Biodata.html">Biodata</a></li>
            <li><a href="bukutamu.php">Buku Tamu</a></li>
            <li><a href="Contact.html">Contact</a></li>
        </ul>
    </nav>
    
    <div class="row">
        <div class="column"><br>
            <h1 align="center"> Buku Tamu </h1>
            <p align="center"> Silahkan isi form Buku Tamu </p>
            <section id="box-profile">
                <form action="#" method="POST" onSubmit="validasi()">
                    <div class="form">
                        <label> Nama Lengkap </label>
                        <input type="text" name="fname" placeholder="Nama Lengkap " id="fname"><br>
                    </div>
                <label> Email </label>
                    <input type="text" name="femail" placeholder="Email" id="femail"><br>
                <label> Nomor Handphone </label>
                    <input type="text" name="fnohp" placeholder="Nomor Handphone" id="fnohp"><br>
                <label> Provinsi </label>
                <select id="prov" name="fprovinsi" id="fprovinsi" >
                    <option value="Jateng"> Jawa Tengah </option>
                    <option value="Jabar"> Jawa Barat </option>
                    <option value="Jatim"> Jawa Timur </option>
                    <option value="Sumatra"> Sumatera </option>
                    <option value="Kalimantan"> Kalimantan </option>
                    <option value="Bali"> Bali </option>
                    <option value="Papua"> Papua </option>
                    <option value="Sulawesi"> Sulawesi </option>
                    <option value="Yogyakarta"> Yogyakarta </option>
                    <option value="Jakarta"> Jakarta </option>
                    <option value="Muluku"> Maluku </option>
                </select>
                <label> Pesan </label>
                <textarea name="fpesan" id="fpesan">
                </textarea>
                <input type="submit" value="Submit">
                </form>
            </div>
            

            <div>
            <?php
                if (isset($_POST['fnama'])){
                    $nama=$_POST['fnama'];
                    $email=$_POST['femail'];
                    $nohp=$_POST['fnohp'];
                    $prov=$_POST['fprovinsi'];
                    $pesan=$_POST['fpesan'];

                    echo " Daftar Tamu ";
                    echo "<table id='tamu'>";
                    echo "<tr><th> No </th><th> Nama </th><th> Email </th><th> Provinsi </th><th> Pesan </th></tr>";
                    echo "<tr><td> 1. </td><td> $nama </td><td> $email </td><td> $nohp</td><td>$prov </td><td> $pesan </td></tr>";
                }
                ?>
            </div>
            </section>
        </div>
    </div>
</body>
</html>