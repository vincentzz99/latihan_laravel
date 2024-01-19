<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Latihan Breeder Reserve</title>
    <link rel="stylesheet" href="{{ asset('main.css') }}">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logoBR">
                <img src="{{ asset('asset/Logo.png') }}" alt="Logo.png">
            </div>
            <div class="Menu">
                <a href="">
                    <p class="tulisanHome">Home</p>
                </a>

                <a href="">
                    <p class="tulisanHome">About</p>
                </a>

                <a href="">
                    <p class="tulisanHome">Service</p>
                </a>

                <a href="">
                    <p class="tulisanHome">Blog</p>
                </a>

                <a href="">
                    <p class="tulisanHome">Contact</p>
                </a>

            </div>
            <div class="login">
                <p class="tulisanLogin">Login</p>
                <div class="buttonLogin">
                    <img src="{{ asset('asset/Arrow.png') }}" alt="Logo.png">
                </div>
            </div>
        </div>
        <div class="section1">
            <div class="textKiriSection1">
                <div class="judulTextKiri">
                    <p class="textHappyCat"> Healthy Cats,</p>
                    <p class="textHappyOwner">Happy Owners!</p>
                </div>
                <div>
                    <p class="paragrafSection1">
                        Breeder Reserve is an app designed for cat lovers who want to easily and efficiently monitor and
                        maintain their cat's health and become an essential tool to provide the best care for their
                        furry friend.
                    </p>
                </div>
                <div class="readMore">
                    <a href=""> <img src="{{ asset('asset/ReadMore.png') }}" alt="ReadMore.png"></a>
                </div>
            </div>

            <div class="gambarKanan">
                <img src="{{ asset('asset/KochengOren.png') }}" alt="KochengOren.png">
            </div>
        </div>

        <div class="section2">
            <div class="AboutUS">
                <div class="AboutDiv">
                    <p class="About">About</p>
                </div>

                <div class="USDiv">
                    <p class="US">Us</p>
                </div>
            </div>
            <div>
                <p class="textSection2">
                    Fusce feugiat venenatis nulla eget posuere. Nullam efficitur turpis id eros dignissim, nec euismod
                    lacus efficitur. Fusce in ipsum augue. Praesent tempor, tellus quis rhoncus luctus, neque mi
                    consectetur metus, vitae efficitur nisl sem ut nulla. Duis a diam sagittis tortor porttitor
                    facilisis.
                </p>
            </div>

            <div>
                <img src="{{ asset('asset/Line.png') }}" alt="Line.png">
            </div>

            <div>
                <p class="SupportBy">Supported By</p>
            </div>

            <div>
                <img src="{{ asset('asset/WCF.png') }}" alt="WCF.png">
            </div>

            <div class="gambarKochengSection3">
                <img src="{{ asset('asset/Group 1.png') }}" alt="Group 1.png">
            </div>


        </div>

        <div class="section3">
            <div class="OurService">
                <div class="Our">
                    <p class="textOur">Our</p>
                </div>
                <div class="Service">
                    <p class="textService">Service</p>
                </div>
            </div>
            <div>
                <p class="textSection3">
                    Fusce feugiat venenatis nulla eget posuere. Nec euismod lacus efficitur.
                    Fusce in ipsum augue. Praesent tempor, tellus quis rhoncus luctus.
                </p>
            </div>

            <div class="gambarBritish">
                <img class="gambarBritish" src="{{ asset('asset/KochengBritish.png') }}" alt="KochengBritish.png">
            </div>

            <div class="kolomSection3">
                <p>woi</p>
            </div>

        </div>
    </div>

</body>

</html>