<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">

    <title>AnyHelpsOrg.</title>
</head>

<body>
    <marquee class="fixed-top text-white">This text will scroll from right to left</marquee>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light pt-4 bg-orenge ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="gallry.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.php">Contact</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Services
                        </a>
                        <ul class="dropdown-menu bg-orenge">
                            <li>
                                <a class="dropdown-item text-white Helth" href="helth.php">Helth Camp</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white Helth" href="women_empower.php">Women empowerment</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white Helth" href="eduction.php">Eduction</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white Helth" href="plantation.php">Planttation</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu bg-orenge ">
                            <li>
                                <a class="dropdown-item text-white Helth" href="#">arogya</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white Helth" href="#">Volintaier</a>
                            </li>
                            <li>
                                <a class="dropdown-item text-white Helth" href="register.php">Registarion</a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <form class="d-flex px-1 py-1" role="">
                    <button class="btn btn-success px-3" type="submit"><a href="register.php" class="text-decoration-none text-white">PNET Reg.</a></button> &nbsp;
                </form>
                <form class="d-flex px-1 py-1" role="">
                <button class="btn btn-success px-3" type="submit"><a href="donate.php" class="text-decoration-none text-white">Donate</a></button> &nbsp;
                    
                </form>

            </div>
        </div>
    </nav>
</body>

</html>