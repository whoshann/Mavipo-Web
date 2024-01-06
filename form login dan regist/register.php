<?php
require 'function.php';
// cek tombol submit
if ( isset($_POST["submitbtn"])) {
	// ngecek
if(tambah($_POST) > 0 ) {
    echo"

    <script>
    alert('data berhasil ditambahkan');
    document.location.href = 'form login.html';
    </script>
    ";
} else {
    echo "
    
    <script>
    alert('data berhasil ditambahkan');
    
    </script>
    ";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <!-- Container kiri -->
    <div class="container">
        <a href="../landing page/landingpage.html">
            <div class="containerhome">
                <svg class="homeicon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                    <style>
                        svg {
                            fill: white
                        }
                    </style>
                    <path
                        d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                </svg>
            </div>
        </a>
    </div>
    <!-- kontainer login  -->
    <div class="container2">
        <h2>Registrasi</h2>
        <form action="" method="post" >
        <!-- username -->
        <div class="iconuser">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <style>
                    svg {
                        fill: white
                    }
                </style>
                <path
                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg>
        </div>
        <div class="containeruser">
            <input class="user" type="text" name="username" placeholder="Username" required>
        </div>
        <!-- email -->
        <div class="iconuser">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path
                    d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
            </svg>
        </div>
        <div class="containeruser">
            <input class="user" type="email" name="email" placeholder="Email" required>
        </div>
        <!-- password -->
        <div class="iconpass">
            <svg class="icon2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <style>
                    svg {
                        fill: white
                    }
                </style>
                <path
                    d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
            </svg>
        </div>
        <div class="containerpass">
            <input class="pass" type="password" placeholder="Password" name="password" required>
        </div>
        <p class="paragraph">Already have an account?<a href="form login.html" class="text-a">Login</a></p>
            <button class="buttonsubmit" type="submit" name="submitbtn" >Register</button>
            </form>
    </div>
</body>

</html>