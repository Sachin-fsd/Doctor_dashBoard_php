<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Doctor Appointment </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .card-img-top {
            height: 500px;
            /* Set a fixed height */
            object-fit: cover;
            /* Ensures the images are cropped but keep their aspect ratio */
        }

        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-body {
            flex-grow: 1;
            /* Makes sure the body stretches */
            display: flex;
            flex-direction: column;
        }

        .card-text {
            flex-grow: 1;
            /* Stretches the text to fill available space */
        }

        .btn {
            align-self: flex-start;
            /* Keeps the button aligned properly */
        }
    </style>
</head>

<body>

    <!-- As a heading -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Doctor Appointment</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Doctors</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Signup</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Appointments</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/356040/pexels-photo-356040.jpeg?auto=compress&cs=tinysrgb"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/2324837/pexels-photo-2324837.jpeg" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1350560/pexels-photo-1350560.jpeg" class="d-block w-100"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Doctors Appointment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action={{route('save.appointment')}}>
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Timing</label>
                            <input type="text" name="timing" class="form-control" id="exampleInputEmail1">
                        </div>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="row container mx-auto mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="https://th.bing.com/th/id/OIP.IVwf85npYYUcwRp4EIhqDgHaJm" class="card-img-top" alt="Doctor 1">
                <div class="card-body">
                    <h5 class="card-title">Dr. John Smith</h5>
                    <p class="card-text">Specialist in Cardiology with over 15 years of experience. Provides top-quality
                        care and personalized treatment plans for patients.</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Take
                        Appointment</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://th.bing.com/th/id/OIP.LoqQ15EiLvHxNJVj_k8mXgHaHa" class="card-img-top" alt="Doctor 2">
                <div class="card-body">
                    <h5 class="card-title">Dr. Emily Johnson</h5>
                    <p class="card-text">A leading Dermatologist with a focus on skin care and cosmetic dermatology.
                        Known for her compassionate care and expertise.</p>
                    <a href="#" class="btn btn-primary">Take Appointment</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://th.bing.com/th/id/OIP.JW_4m4RVV4ywf0aiB6TWrgHaLH" class="card-img-top" alt="Doctor 3">
                <div class="card-body">
                    <h5 class="card-title">Dr. Michael Lee</h5>
                    <p class="card-text">Renowned Orthopedic Surgeon specializing in sports injuries and joint
                        replacement. Dedicated to improving mobility and quality of life.</p>
                    <a href="#" class="btn btn-primary">Take Appointment</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row container-fluid mt-4 " style="background-color: grey;">
        <div class="col-md-4">
            Contact: 0000000000
        </div>
        <div class="col-md-4">
            &copy; Doctor
        </div>
        <div class="col-md-4">
            Email: abc@doctor.com
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>