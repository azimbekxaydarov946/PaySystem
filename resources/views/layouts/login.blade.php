<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Login.css">
    <title>Pay System</title>
    @livewireStyles
</head>

<body>
    <div class="box">
        <div class="wrap">
            <div class="header">
                <img src="images/logo.png" alt="">
                <a href="index.html">
                    <p><span>P</span>AY <span>S</span>YSTEM</p>
                </a>
            </div>


            <!-- Start -->
            <div class="container">
                {{$slot}}
            </div>
            <!-- end -->

        </div>
        <div class="footer">
            <h3>Copyrights 2018 @ Payroll System</h3>
        </div>
    </div>
    @livewireScripts
</body>

</html>
