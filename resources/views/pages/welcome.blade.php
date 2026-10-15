<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DentalSmart - Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body>

    <!-- NAVIGATION BAR -->
    <header class="navbar">

        <div class="logo-container">

            <!-- TOOTH LOGO -->
            <img
                src="https://i.pinimg.com/736x/4f/0c/05/4f0c05eb95fdfd934b44d297e988fc73.jpg"
                alt="DentalSmart Tooth Logo"
                class="logo"
            >

            <span class="brand-name">DentalSmart</span>

        </div>

       
        
        <!-- LOGIN AND REGISTER LINKS -->
        <nav class="nav-links">
            <a href="{{ url('/Login') }}" class="nav-btn">Login</a>
            <a href="{{ url('/Register') }}" class="nav-btn">Register</a>
        </nav>

    </header>

    <!-- WELCOME SECTION WITH BACKGROUND IMAGE -->
    <section class="hero">

    
        <div class="hero-icon">
            🦷
        </div>

        <h1>DentalSmart</h1>

        <p>
            Manage your dental appointments with ease.
            Book your appointment and stay connected with your dental
            care team.
        </p>


        

        <!-- THREE DENTAL PICTURES -->
        <div class="gallery">

            <!-- FIRST PICTURE -->
            <img
                src="https://i.pinimg.com/736x/f7/17/16/f71716cd64f269b22f0ad5a346de4245.jpg"
                alt="Dentist consulting a patient"
            >

            <!-- SECOND PICTURE -->
            <img
                src="https://i.pinimg.com/736x/f6/a0/b8/f6a0b8b7d47275a1c27cc370de0e596a.jpg"
                alt="Dentist examining a child"
            >

            <!-- THIRD PICTURE -->
            <img
                src="https://i.pinimg.com/736x/d0/65/e2/d065e2427cd761204ccf69625deb99f9.jpg"
                alt="Dentist performing a dental examination"
            >

        </div>

    </section>

</body>
</html>
