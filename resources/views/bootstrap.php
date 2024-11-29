<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jannat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css ">
    @vite('resources/sass/app.scss')
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle .min.js"></script>
    <nav class="navbar navbar-expand-sm navbar-light mb-1">
        <div class="container py-2 px-4">
            <a href="#" class="navbar-brand mb-0 h1">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo b.png') }}" alt="logo" style="width: 30px;">
            </a>
        </div>
    </nav>

    <div class="container">
        <section class="landing">
            <div class="row vertical-center">
                <div class="col-lg-8 text-left pb-5">
                    <h1 class="display-1"><b>Jannat Ramadhan</b></h1>
                    <p class="lead-pl-2">Chairman</p>
                </div>
                <div class="col-lg-4 text-center my-auto pb-5 rounded-circle">
                    <img class="img-fluid rounded-circle" src="{{ Vite::asset('resources/images/AW.png') }}">
                </div>
            </div>
        </section>
        <section class="mt-5 mb-5">
            <h4 class="display-4">A little about me,</h4>
            <div class="row">
                <div class="col-lg-6 wrap text-left">
                    <div class="about-desc">
                        <h1 class="bold-text bg-text">About</h1>
                        <div class="pt-5">
                            <h2 class="mb-5">Hi there!!</h2>
                            <p> I'm Jannat Ramadhan, a passionate reader hailing from Surabaya, but currently based in
                                Temanggung. At just 17, I took on the role of Chairman, and I'm now the proud owner of
                                an investment firm, specializing in investment banking. Let's turn your financial dreams
                                into a reality!
                            </p>
                            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                                <li class="nav-item col-6 col-md-auto">
                                    <a href="#" class="nav-link active">
                                        <i class="bi-github"></i><small class="ms-3d-md-none"></small>
                                    </a>
                                </li>
                                <li class="nav-item col-6 col-md-auto">
                                    <a href="#" class="nav-link active">
                                        <i class="bi-twitter"></i><small class="ms-3d-md-none"></small>
                                    </a>
                                </li>
                                <li class="nav-item col-6 col-md-auto">
                                    <a href="#" class="nav-link active">
                                        <i class="bi-facebook"></i><small class="ms-3d-md-none"></small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wrap align-content-center">
                    <div class="row mt-5 flex-column">
                        <div class="col-md-8">
                            <h2 class="mb-4">My Skills</h2>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="progress-wrap">
                                <h5>Financial Analysis</h5>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="95"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 95%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="progress-wrap">
                                <h5>Financial Modeling</h5>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="progress-wrap">
                                <h5>Software Development</h5>
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="85"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h1 class="display-4 mt-5">Education</h4>
                <h1 class="bold-text bg-text">Academics</h1>
                <div class="py-4">
                    <div class="desc">
                        <h4>Master of Sciencenin Computer Science</h4>
                        <p>Massachusetts Institute of Technology</p>
                    </div>
                    <div>
                        <p>2023 - 2025</p>
                    </div>
                </div>
                <div class="py-4">
                    <div class="desc">
                        <h4>Master of Business Administration </h4>
                        <p>Oxford University</p>
                    </div>
                    <div>
                        <p>2022 - 2023</p>
                    </div>
                </div>
                <div class="py-4">
                    <div class="desc">
                        <h4>Bachelor of Arts in Economics and Management</h4>
                        <p>Oxford University</p>
                    </div>
                    <div>
                        <p>2019 - 2022</p>
                    </div>
                </div>
        </section>
        <section>
            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <li class="nav-item col-6 col-md-auto">
                    <a href="#" class="nav-link active">
                        <i class="bi-github"></i><small class="ms-3d-md-none"></small>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a href="#" class="nav-link active">
                        <i class="bi-twitter"></i><small class="ms-3d-md-none"></small>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a href="#" class="nav-link active">
                        <i class="bi-facebook"></i><small class="ms-3d-md-none"></small>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a href="#" class="nav-link active">
                        <i class="bi-linkedin"></i><small class="ms-3d-md-none"></small>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a href="#" class="nav-link active">
                        <i class="bi-threads"></i><small class="ms-3d-md-none"></small>
                    </a>
                </li>
                <li class="nav-item col-6 col-md-auto">
                    <a href="#" class="nav-link active">
                        <i class="bi-instagram"></i><small class="ms-3d-md-none"></small>
                    </a>
                </li>
            </ul>
        </section>
    </div>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    @vite('resources/images/logo b.png')
    @vite('resources/images/AW.png')
</body>

</html>