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

    <title>FlyingPiet's Jobbörse</title>
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark fs-2">
            <div class="container">
                <a class="navbar-brand text-light fs-2" href="/index.html">
                    <img class="logo" src="{{ asset('images/logo1_white.png') }}" alt="Logo" width="50"
                        height="auto" class="d-inline-block align-text-center" />
                    FlyingPiet's
                    <span class="logo">Jobbörse</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="/pages/job.html">
                                Jobs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="pages/company.html">
                                Firmen
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="pages/category.html">
                                Kategorie
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="pages/user.html">
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
        <h1 class="display-2 fw-bold">Willkommen bei FlyingPiet's Jobbörse</h1>
        <hr>
        <p class="text-sm-justify my-0 mx-5 px-3 lh-1 ">
            Herzlich willkommen auf unserer Plattform, wo berufliche Möglichkeiten und Talente aufeinandertreffen, um
            die Karrieren von Menschen zu gestalten und Unternehmen mit den besten Fachleuten zu verbinden. Bei
            FlyingPiet geht es nicht nur um Jobsuche, sondern auch um das Finden von beruflichem Erfolg und persönlicher
            Weiterentwicklung.</p>

        <p class="text-sm-justify my-0 mx-5 pt-2 px-3 lh-1">
            Unsere Mission ist es, eine Brücke zwischen Arbeitgebern und Arbeitnehmern zu schlagen, um eine perfekte
            Passform zu gewährleisten. Egal, ob du auf der Suche nach deinem Traumjob bist oder qualifizierte Fachkräfte
            für dein Unternehmen suchst – FlyingPiet ist der Ort, um deine Ziele zu erreichen.
        </p>
        <p class="text-sm-justify my-0 mx-5 pt-3 px-3 lh-1 fw-bold">
            Was macht die FlyingPiet's Jobbörse einzigartig?
        </p>
        <p class="text-sm-justify my-0 mx-5 pt-3 px-3 lh-1">
            <span class="fw-bold">Umfassendes Stellenangebot:</span> Wir bieten eine breite Palette von
            Stellenangeboten in verschiedenen Branchen
            und Berufsfeldern.
        </p>
        <p class="text-sm-justify my-0 mx-5 pt-1 px-3 lh-1">
            <span class="fw-bold">Benutzerfreundlichkeit:</span> Unsere Plattform ist einfach zu navigieren, so dass du schnell und effizient nach
            den passenden Jobangeboten suchen kannst.
        </p>
        <p class="text-md-justify my-0 mx-5 pt-1 px-3 lh-1">
            <span class="fw-bold">Professionelle Unterstützung:</span> Unser Team steht dir mit professioneller Unterstützung zur Seite, sei es bei
            der Erstellung deines Bewerbungsprofils oder bei der Schaltung von Stellenanzeigen.
        </p>
        <p class="text-md-justify my-0 mx-5 pt-3 px-3 lh-1">
            Trete unserer wachsenden Community bei und entdecke, wie FlyingPiet deine beruflichen Träume Wirklichkeit
            werden lassen kann. Wir freuen uns darauf, dich auf deiner beruflichen Reise zu begleiten!
        </p>
        <p class="text-md-justify my-0 mx-5 pt-3 px-3 lh-1">
            Mit freundlichen Grüßen,
        </p>
        <p class="text-md-justify my-0 mx-5 pt-3 px-3 lh-1">
            Euer FlyingPiet
        </p>
    </div>



    <footer class="footer mt-auto py-2 fs-5 fixed-bottom bg-dark">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <a class="text-light" href="#">Impressum</a>
                </div>
                <div class="col-md-auto">
                    <a class="text-light" href="#">Kontakt</a>
                </div>
                <div class="col-md-auto">
                    <a class="text-light" href="#">Datenschutz</a>
                </div>
                <div class="col-md-auto">
                    <span class="text-light">&copy; FlyingPiet</span>
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