
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Logo Store</title>
    <link rel="shortcut icon" href="{{ asset('atya/img/img-2/contact7.jpg') }}">

    <link rel="stylesheet" href="{{ asset('atya/style.css') }}">

</head>

<!--  ---------------------------------------------------------------------------------------------   -->

<body style="background-color: rgb(240, 240, 240);">

    <div class="img-page3">

        <header id="up">
            <nav>
                <div>
                    <div>
                        <ul>
                            <li><a href="{{ asset('index') }}" class="nav_link">Home</a></li>
                            <li><a href="{{ asset('about') }}" class="nav_link">About</a></li>
                            <li><a href="{{ asset('contact') }}" class="nav_link">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!--  ------------------------------------- logo + name --------------------------------------------------------   -->

            <div class="Logo-img">
                <img src="{{ asset('atya/img/img-2/contact7.jpg') }}" alt="Avatar" class="avatar">
            </div>

            <div class="Logo">
                <h3>Logo Store</h3>
            </div>
    </div>

    <div id="Home" style="padding: 50px;">

        <!--  --------------------------------------- Our Store ------------------------------------------------------   -->
        <div id="About">

            <center>
                <p style="font-size:30px; color: rgb(20, 87, 116);"> Contact Page</p>

                <br>

                <div style=" width: 600px;">
                    <p style="font-size:16px; color: rgb(109, 73, 73);">
                        This is Simple Contact Form to send email to our store inbox.
                    </p>
                </div>

            </center>
            <br>
            <br>
            <br>


            <!--  ---------------------------------- address - email - phone -----------------------------------------------------------   -->

            <div style="justify-content: center; margin-left:20%;">
                <div class="div-form">
                    <form action="{{ route('contact_data') }} ">

                        <input style="width: 215px;" type="text" placeholder="Name" required class="input">

                        <input style="width: 215px;" type="email" placeholder="Email" required class="input">

                        <textarea name="" id="" cols="30" rows="10" class="input" placeholder="Message"></textarea>

                        <button type="submit" class="button-style">Send</button>

                    </form>
                    <center>
                        <div class="address">
                            <h2 style="color: green;">Our address</h2>
                            <address>Deir-AlBalah, Gaza strip, Palestine.</address>
                            <a href="tel:+972598815236" class="link">+970590000000</a><br><br>
                            <a href="mailto:5.pets@gmail.com" class="link">Saed--Atya@Dolphin.com</a>
                        </div>
                    </center>

                </div>

                <br><br>


                <!--  ---------------------------------- box -----------------------------------------------------------   -->
            </div>
            <center>
                <div class="FAQ">
                    <br>
                    <h3 style="font-weight: bold; font-size: xx-large;">FAQs</h3>
                    <br>
                    <p>
                        Every user must enter their age when signing
                        an account up, and if the user is under 18
                        years old. They must have one of their
                        parents as supervisors.</p>
                    <br>
                    <div class="box">
                        <p style="font-size:16px; color: rgb(155, 147, 147);"> 1. Fusce eu lorem et dui #09C maximus
                            varius? </p> <input type="checkbox" name="online" id="">
                    </div>
                    <div class="box">
                        <p style="font-size:16px; color: rgb(155, 147, 147);"> 2. Vestibulum #999 ante ipsum primis in
                            faucibus orci?</p><input type="checkbox" name="find" id="">
                    </div>
                    <div class="box">
                        <p style="font-size:16px;  color: rgb(155, 147, 147);"> 3. Can I redistribute this template as a
                            ZIP file?</p> <input type="checkbox" name="cards" id="">
                    </div>
                    <div class="box">
                        <p style="font-size:16px;  color: rgb(155, 147, 147);"> 4. Ut ac erat sit amet neque efficitur
                            faucibus et in lectus?</p> <input type="checkbox" name="return" id="">
                    </div>

                </div>

            </center>


        </div>

        <br>
        <br>
        <br>

        <!--  ---------------------------------- line -----------------------------------------------------------   -->
        <center>
            <p class="book-author">
                BY DOLPHINS 🐬 TEAM
                <br>
                Copyright © 2022
            </p>
            <br>
        </center>

        <hr style="border: 1px solid #ccc; box-shadow: 2px 2px 5px #ccc;">

    </div>







</body>

</html>
