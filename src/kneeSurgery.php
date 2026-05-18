<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <link rel="stylesheet" href="./css/index.css  " />
    <link rel="stylesheet" href="./css/helper.css  " />
    <link rel="stylesheet" href="./css/queris.css  " />
    <link rel="stylesheet" href="./css/kneeSurgery.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  
    <script defer src="./index.js"></script>
    <title>Health Travel</title>
  </head>
  <body>
   
    <?php include 'pages/header.php'; ?>

    <section class="first-section-knee">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 p-0 header-knee z-index">
            <img
              class="img-fluid img-header-knee d-desktop"
              src="https://webapp.recufe.com/healthTravel/frontend/assets/hero/Knee replacement surgery.png"
              alt="header image knee"
            />
            <img
              class="img-fluid img-header-knee d-mobile"
              src="https://webapp.recufe.com/healthTravel/frontend/assets/hero/Knee replacement surgery.png"
              alt="header image knee"
            />
            <h4 class="img-text-knee bolded">
              KNEE REPLACEMENT <br />
              SURGERY
            </h4>
          </div>
        </div>
      </div>
    </section>

    <section class="first-section-knee-text">
      <div class="container">
        <div class="row">
          <h2 class="header-title bolded">What is Knee replacement surgery?</h2>

          <div class="col-lg-12">
            <p class="header-desc">
              If your knee is severely damaged by arthritis or injury, it may be
              hard for you to perform simple activities, such as walking or
              climbing stairs. You may even begin to feel pain while you are
              sitting or lying down. Total knee replacement is one of the most
              successful procedures in all of medicine. In the vast majority of
              cases, it enables people to live richer, more active lives free of
              chronic knee pain.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="second-section-knee">
      <div class="container">
        <div class="row second-section-reverse">
          <div class="col-lg-6 col-description">
            <h4 class="bolded">Cause of knee joint damage</h4>
            <p class="point-desc">
              The most common cause of chronic knee pain and disability is
              arthritis. Although there are many types of arthritis, most knee
              pain is caused by just three types:<br />
              <br />
              <i class="fa-solid fa-caret-right"></i> osteoarthritis<br />
              <i class="fa-solid fa-caret-right"></i> rheumatoid arthritis<br />
              <i class="fa-solid fa-caret-right"></i> posttraumatic arthritis.
            </p>
          </div>
          <div class="col-lg-6 p-0">
            <img
              src="https://webapp.recufe.com/healthTravel/frontend/assets/hero/therapist-showing-knee-joint.png"
              class="img-fluid"
              alt="description image"
            />
          </div>
        </div>
      </div>
    </section>

    <section class="third-section-knee">
      <div class="container">
        <div class="row">
          <h2 class="h2-title-third">Candidates for Surgery</h2>
          <p class="text-center h2-title-thirdsec">
            There are no absolute age or weight restrictions for total hip
            replacements.
          </p>
        </div>
      </div>
    </section>

     <?php include 'pages/medicalmore.php'; ?>
    <?php include 'pages/footer.php'; ?>
  </body>
</html>
