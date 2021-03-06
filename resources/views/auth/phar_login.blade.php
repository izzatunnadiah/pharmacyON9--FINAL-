<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Pharmacist Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <link href="{{ asset('A.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('login.css') }}" rel="stylesheet" type="text/css">


</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');

    body {
        background-image: url('home.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<body id="top">
    <div class="container1">
        <div class="logo">
            <img src="logo.png" alt="" width="230" />
        </div>
        <div class="navbar">
            <a href="home"></a>


            <div class="dropdown1"> 
                <button class="dropbtn" onclick="myFunction()">SIGN IN
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content" id="myDropdown">
                    <a href="cus_login">Customer</a>
                    <a href="phar_login">Pharmacist</a>

                </div>
            </div>

            <a href="home">HOME</a>
        </div>
    </div>

    <div class="center">
        <h1>Pharmacist Login</h1>
        <form action="{{url('login-phar')}}" method="post" class="login-form">
            @csrf 

            <div class="txt_field">
                <input name="email" id="email" type="text" class="form-control" placeholder="Email" value="">

            </div></br>

            <div class="txt_field">
                <input name="password" id="password" type="password" class="form-control" placeholder="Password" value="">

            </div></br>

            <input type="submit" value="Login">
            </br></br>
        </form>
    </div>


    <script>
        /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function myFunction2() {
            document.getElementById("myDropdown2").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
        }

        window.onclick = function(e) {
            if (!e.target.matches('.dropbtn')) {
                var myDropdown = document.getElementById("myDropdown2");
                if (myDropdown.classList.contains('show')) {
                    myDropdown.classList.remove('show');
                }
            }
        }
    </script>
</body>

</html>