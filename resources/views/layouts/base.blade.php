<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pay System</title>
    @livewireStyles
</head>

<body>
    <div class="box">
        <div class="wrap">
            <div class="header">
                <img src="{{asset('images/logo.png')}}" alt="">
                <a href="index.html" > <p><span>P</span>AY <span>S</span>YSTEM</p></a>

            </div>
            <div class="main">
                <div class="nav">
                    <ul>
                        <a href="Home.html" style="cursor: pointer;">
                            <li style="color:  white; background-color: green;">
                                <h2>Home</h2>
                            </li></a>
                        <li><a href="">ADD CLASS</a></li>
                        <li><a href="">ADD Employee</a></li>
                        <li><a href="">Employee Report</a></li>
                        <li><a href="">Leave</a></li>
                        <li><a href="">Salary</a></li>
                        <li><a href="">Salary Report</a></li>
                        <li><a href="">Year wise Report</a></li>
                        <li><a href="">Admin Login</a></li>
                        <li><a href="">Change Password</a></li>
                        <li><a href="">LogOut</a></li>
                    </ul>
                </div>
                <div class="section">
                    <h2>Generate Salary</h2>

                    <!-- Start -->
                    <div class="container">
                           {{$slot}}
                    </div>

                    <!-- end -->
                </div>
            </div>
        </div>
        <div class="footer" >
            <h3>Copyrights 2018 @ Payroll System</h3>
        </div>
    </div>
@livewireScripts
</body>

</html>
