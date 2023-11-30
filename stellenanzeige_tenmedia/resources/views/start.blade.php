<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>FlyingPiet's Job Board</title>
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark fs-2">
            <div class="container">
                <a class="navbar-brand text-light fs-2" href="/">
                    <img class="logo" src="{{ asset('images/logo1_white.png') }}" alt="Logo" width="50"
                        height="auto" class="d-inline-block align-text-center" />
                    FlyingPiet's
                    <span class="logo">Job Board</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="/jobs">
                                Jobs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="/companies">
                                Companies
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="/categories">
                                Categories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="/users">
                                User
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="p-3 mb-2 bg-gray text-dark container text-center">
        <h1 class="display-2 fw-bold">Welcome to FlyingPiet's Job Board</h1>
        <hr>
        <p class="text-sm-justify my-0 mx-5 px-3 lh-1 ">
            Welcome to our platform where professional opportunities and talents come together to shape people's careers and connect companies with the best professionals. FlyingPiet's job board is not only about finding a job, but also about finding professional success and personal development.</p>

        <p class="text-sm-justify my-0 mx-5 pt-2 px-3 lh-1">
            Our mission is to build a bridge between employers and employees to ensure a perfect fit. Whether you're looking for your dream job or seeking qualified professionals for your company, FlyingPiet's job board is the place to achieve your goals.
        </p>
        <p class="text-sm-justify my-0 mx-5 pt-3 px-3 lh-1 fw-bold">
            What makes FlyingPiet's job board unique?
        </p>
        <p class="text-sm-justify my-0 mx-5 pt-3 px-3 lh-1">
            <span class="fw-bold">Comprehensive job offer:</span> We offer a wide range of job opportunities in various industries and professional fields.
        </p>
        <p class="text-sm-justify my-0 mx-5 pt-1 px-3 lh-1">
            <span class="fw-bold">Ease of use:</span> Our platform is easy to navigate, so you can search for the right job offers quickly and efficiently.
        </p>
        <p class="text-md-justify my-0 mx-5 pt-1 px-3 lh-1">
            <span class="fw-bold">Professional support:</span> Our team is on hand to provide you with professional support, whether it's creating your application profile or posting job ads.
        </p>
        <p class="text-md-justify my-0 mx-5 pt-3 px-3 lh-1">
            Join our growing community and discover how FlyingPiet's job board can make your professional dreams come true. We look forward to accompanying you on your professional journey!
        </p>
        <p class="text-md-justify my-0 mx-5 pt-3 px-3 lh-1">
            Yours sincerely,
        </p>
        <p class="text-md-justify my-0 mx-5 pt-3 px-3 lh-1 fw-bold">
            Your FlyingPiet
        </p>
    </div>



    <footer class="footer mt-auto py-2 fs-5 fixed-bottom bg-dark">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <a class="text-light" href="#">Impressum</a>
                </div>
                <div class="col-md-auto">
                    <a class="text-light" href="#">Contact</a>
                </div>
                <div class="col-md-auto">
                    <a class="text-light" href="#">Privacy policy</a>
                </div>
                <div class="col-md-auto">
                    <span class="text-light">&copy; FlyingPiet 2023</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>