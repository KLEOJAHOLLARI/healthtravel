<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <link rel="stylesheet" href="./css/index.css  " />
    <link rel="stylesheet" href="./css/helper.css  " />
    <link rel="stylesheet" href="./css/queris.css  " />
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <title>Health Travel</title>
</head>

<body>
    <?php include 'pages/header.php'; ?>

    <!-- Section 1  -->
    <section class="section-hero vh">
        <div class="hero-video-box">
            <video autoplay muted loop playsinline class="hero-video">
                <source src="./img/video/healthvideo1.mp4" type="video/mp4">
            </video>
            <div class="hero-overlay"></div>
        </div>
        <div class="hero container">
            <div class="hero-text-box">
                <p class="heading no-margin green">
                    Welcome to
                </p>
                <h3 class="heading-secondary white">
                    Health Travel Albania
                </h3>
                <p class="hero-description green">
                    Medical Tourism in Tirana, Albania
                </p>
                <a href="#" class="btn btn--outline">
                    OUR TREATMENTS
                </a>
            </div>
        </div>
    </section>

    <?php include 'pages/counter.php'; ?>
    <?php include 'pages/galleryitem.php'; ?>



    <section class="describe-section">
        <div class="story__pictures">
            <img src="img/business-meeting-woman-and-happy-with-laptop-wor-2023-09-01-22-19-36-utc 1.jpg"
                alt="business-meeting-woman-and-happy-with-laptop" class="hero-img queris-margin-left medium-width" />
        </div>

        <div class="story__content">
            <h2 class="heading-tertiary ">
                Why us?
            </h2>

            <p class="story__text">
                We source out the best Dental or Medical Practice to suit your needs The must haves for clinics to work
                with us: Expert doctors with excellent patient results, Latest technology Dental & Medical Equipment,
                Top Quality medical materials, Digital Imaging, Laser Surgery, Mercury-free dental fillings, Sedation
                for painless treatment.
            </p>
            <a href="#" class="btn btn--outline">Learn more<ion-icon name="arrow-forward"></ion-icon></a>
        </div>
    </section>
    <?php include 'pages/beforeafter.php'; ?>
    <?php include 'pages/medicalmore.php'; ?>
    <?php include 'pages/footer.php'; ?>



    <script src="./js/index.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>