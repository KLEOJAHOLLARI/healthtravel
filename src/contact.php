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
    <link rel="stylesheet" href="./css/eye-surgery.css" />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>
    <script defer src="./index.js"></script>
    <title>Eye Surgery</title>

    <style>
        .section-hero-contact{
            min-height: 0rem;
            padding: 0;
            background-image: linear-gradient(90deg, #eef8f3 2.85%, rgba(238, 248, 243, 0.7) 40%,
             rgba(238, 248, 243, 0) 90%), url(../src/img/image.png);
            background-position: center;
            background-size: cover;
            object-fit: cover;
            background-repeat: no-repeat;
        }
        .hero{
            gap: 7rem;
            padding: 3rem;
        }
        .contact-mini-title {

            display: inline-block;

            margin-bottom: 1.8rem;

            color: #39b972;

            font-size: 2.4rem;
            font-weight: 700;

            letter-spacing: 2px;

            text-transform: uppercase;
          }

          .contact-main-title {

            font-size: 3.8rem;
            line-height: 1.1;
            font-weight: 800;

            color: #111;

            margin-bottom: 2.4rem;
          }

          .contact-text-description {

            max-width: 62rem;

            color: #555;

            font-size: 1.9rem;
            line-height: 1.8;

            font-weight: 400;
          }

    </style>
  </head>
  <body>
  <?php include 'pages/header.php'; ?>

    <!-- Section 1 -->
    <section class="section-hero-contact">
        </div>
          <div class="hero container">
            <div class="hero-img-">
                <img
                    src="./img/image.png"  
                    alt="group-of-doctors-walking-in-corridor"
                    class="hero-img hero-img-390px remove"
                />
              </div>
              <div class="hero-text-box">
                 <span class="contact-mini-title">
                  HEALTH TRAVEL ALBANIA
                </span>

                <h1 class="contact-main-title">
                  Get a Free Medical Consultation
                </h1>

                <p class="contact-text-description">

                  Fill out the form below and our medical consultants
                  will contact you shortly with a personalized treatment
                  plan, medical recommendations, and pricing details
                  tailored to your needs.

                </p>
              </div>   
          </div>  
        </section>
        
        <?php include 'pages/toast.php'; ?>
        <?php include 'pages/form.php'; ?>
        <?php include 'pages/footer.php'; ?>
  </body>
</html>