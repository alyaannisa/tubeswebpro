<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Matamu</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style/index.css">
    </head>
    <body>

        <div id="header">
            <div class="left_section">
                <div id="logo" style="background-image: url('<?php echo base_url() ?>assets/images/logo.svg')"></div>
            </div>
            <div class="right_section">
                <a href="<?php echo base_url() ?>signup">
                    <div class="button_no_fill">
                        <p>Daftar</p>
                    </div>
                </a>
                <a href="<?php echo base_url() ?>signin">
                    <div class="button_fill">
                        <p>Masuk</p>
                    </div>
                </a>
            </div>
        </div>
        <div id="main">

            <div class="title">
                <p class="main_title">Masuk</p>
                <p class="sub_title">Hai apa kabar? Yuk cek mata kamu disini.</p>
            </div>

            <div class="auth_form">
                <form action="" id="signin_form">
                    <p class="input_label">Email</p>
                    <input type="text" id="input_email">

                    <p class="input_label">Kata Sandi</p>
                    <input type="password" id="input_password">
                </form>
                 <div class="auth_button" id="submit_signin">
                    <p>Masuk</p>
                 </div>
            </div>

        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script>
            const API_URL = "<?php echo base_url() ?>api"
        </script>
        <script src="<?php echo base_url() ?>assets/js/index.js"></script>
    </body>
</html>
