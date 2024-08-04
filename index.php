<p?php

require 'vendor/autoload.php';
require 'config.php';

session_start();

if (!empty($_SESSION['_contact_form_error'])) {
  $error = $_SESSION['_contact_form_error'];
  unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
  $success = true;
  unset($_SESSION['_contact_form_success']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://kenndeclouv.github.io/ave/dist/css/ave.css">
  <link rel="stylesheet" href="./assets/style/css/main.css" />
  <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>KennDeClouv</title>
</head>

<body class="overflow-x-hidden">
  <div id="cursor-wrapper"></div>
  <div class="loader-wrapper">
    <div class="loader">
      <div style="display: flex;height: 100%;width: 100%;justify-content: space-between;">
        <h1 style="font-size:clamp(2rem, 5vw,5rem);" id="DOM">0%</h1>
        <h1 style="font-size:clamp(2rem, 5vw,5rem); margin-top: auto;" id="MEH">KennDeClouv</h1>
      </div>
      <div class="loader-bar">
        <div class="loader-bar-inner"></div>
      </div>


    </div>

    <div class="transition">
      <div></div>
      <div></div>
      <div></div>
      <div>
        <h1>Welcome.</h1>
      </div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main class="main">
        <section id="S1" class="main-section">
          <div class="container-">
            <div class="main-content text-center">
              <h1 data-speed="1.1">
                Kenn<br class="d-block d-lg-none">DeClouv
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none"
                  class="d-none d-md-inline">
                  <path
                    d="M0 5.0505C0 2.26138 2.26089 0 5.0505 0H28.2828C31.0724 0 33.3333 2.26138 33.3333 5.0505V18.1818C33.3333 28.2868 37.3737 33.3333 48.4848 33.3333H51.5151C61.6201 33.3333 66.6667 29.2929 66.6667 18.1818V5.0505C66.6667 2.26138 68.9276 0 71.7172 0H94.9495C97.7391 0 100 2.26138 100 5.0505V28.2828C100 31.0719 97.7391 33.3333 94.9495 33.3333H81.8182C71.7132 33.3333 66.6667 37.3737 66.6667 48.4848V51.5151C66.6667 61.6201 70.7071 66.6667 81.8182 66.6667H94.9495C97.7391 66.6667 100 68.928 100 71.7172V94.9495C100 97.7386 97.7391 100 94.9495 100H71.7172C68.9276 100 66.6667 97.7386 66.6667 94.9495V81.8182C66.6667 71.7132 62.6263 66.6667 51.5151 66.6667H48.4848C38.3799 66.6667 33.3333 70.7071 33.3333 81.8182V94.9495C33.3333 97.7386 31.0724 100 28.2828 100H5.0505C2.26089 100 0 97.7386 0 94.9495V71.7172C0 68.928 2.26089 66.6667 5.0505 66.6667H18.1818C28.2868 66.6667 33.3333 62.6263 33.3333 51.5151V48.4848C33.3333 38.3799 29.2929 33.3333 18.1818 33.3333H5.0505C2.26089 33.3333 0 31.0719 0 28.2828V5.0505Z"
                    fill="white" />
                </svg>
              </h1>
            </div>
          </div>
          <div class="ms-hoverable d-none d-md-grid" id="main-hoverr">

          </div>
        </section>
        <section id="S2" class="second-section">
          <h1 class="main-content d-none d-md-inline text-nowrap" id="ss_main-content" style="z-index: 100;">
            <span style="font-weight: 900;">&emsp;Hello ..</span>
            <span style="font-weight: 100;"> Im</span><span
              style="-webkit-text-stroke: 3px #212121;color: transparent; font-weight: 500;"> Muhammad Ken
              Izzulhaq</span><span style="font-weight: 900; text-transform: uppercase;"> Programmer</span>&nbsp;<span
              style="font-weight: 100; -webkit-text-stroke: #fff 2px;color: transparent; background-color: #212121; padding: 0 10px;border-radius: 10px;">
              and </span> &nbsp;<span style="font-weight: 900; text-transform: uppercase;">Designer</span>
            who combines <span style="text-transform: uppercase; font-weight: 700;">beauty</span><span
              style="font-weight: 100; -webkit-text-stroke: #212121 2px;color: transparent;font-family: fk;"> and
            </span><span style="text-transform: uppercase; font-weight: 700;">functionality</span> in every <span
              style="text-transform: uppercase; color: transparent; -webkit-text-stroke: #212121 2px;">design.</span>
          </h1>
          <h1 class="d-block d-md-none fs-6 text-center" style="z-index: 100;">Hello .. Im Muhammad Ken Izzulhaq <span
              style="font-weight:600">PROGRAMMER</span> and <span style="font-weight:600">DESIGNER</span> who combines
            beauty and functionality in every <span style="font-weight:600">DESIGN.</span>
          </h1>
          <div class="w-100 position-absolute z-3">
            <div class="row text-center plus-play">
              <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                  <path
                    d="M0 2C0 0.89541 0.895313 0 2 0H7C8.10469 0 9 0.89541 9 2V6C9.00078 8.09824 9.80078 8.99756 12 8.99756L11.9023 8.99814L11.8035 9H16C17.1047 9 18 9.89541 18 11V15C18.0008 17.0982 18.8008 17.9976 21 17.9976C20.9332 17.9976 20.868 17.9983 20.8035 18H24.1945C24.1309 17.9983 24.066 17.9976 24 17.9976C26.0992 17.9976 26.9992 17.1981 27 15V11C27 9.89541 27.8953 9 29 9H33C35.1 9 36 8.2 36 6V2C36 0.89541 36.8953 0 38 0H43C44.1047 0 45 0.89541 45 2V7C45 8.10459 44.1047 9 43 9H39C36.9 9 36 9.8 36 12V16C36 17.1046 35.1047 18 34 18H29.8035C27.8438 18.0498 27 18.8675 27 20.9976V24C27.0008 26.0982 27.8008 26.9976 30 26.9976L29.9258 26.9979L29.8035 27H34C35.1047 27 36 27.8954 36 29V33C36.0008 35.0982 36.8008 35.9976 39 35.9976C38.9332 35.9976 38.868 35.9983 38.8035 36H43C44.1047 36 45 36.8954 45 38V43C45 44.1046 44.1047 45 43 45H38C36.8953 45 36 44.1046 36 43V38.9976C36 36.9606 35.2477 36.0526 33.1945 36H29C27.8953 36 27 35.1046 27 34V29.9976C27 27.9606 26.2477 27.0526 24.1945 27H20.8035C18.8438 27.0498 18 27.8675 18 29.9976V34C18 35.1046 17.1047 36 16 36H11.8035C9.84375 36.0498 9 36.8675 9 38.9976V43C9 44.1046 8.10469 45 7 45H2C0.895313 45 0 44.1046 0 43V38C0 36.8954 0.895313 36 2 36H6.19453C6.13086 35.9983 6.06602 35.9976 6 35.9976C8.09922 35.9976 8.99922 35.1981 9 33V29C9 27.8954 9.89531 27 11 27H15.1945C15.1309 26.9983 15.066 26.9976 15 26.9976C17.0992 26.9976 17.9992 26.1981 18 24V20.9976C18 18.9606 17.2477 18.0526 15.1945 18H11C9.89531 18 9 17.1046 9 16V11.9976C9 9.96064 8.24766 9.05264 6.19453 9H2C0.895313 9 0 8.10459 0 7V2Z"
                    fill="black" />
                </svg>
              </div>
              <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                  <path d="M14.5 1V27M1 14H28" stroke="#33333350" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                  <path d="M14.5 1V27M1 14H28" stroke="#33333350" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="col-3">
                <h3 class="d-none d-md-block">27</h3>
              </div>
            </div>
            <div class="row text-center plus-play" style="margin-top: 30vh;">
              <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                  <path d="M14.5 1V27M1 14H28" stroke="#33333350" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="col-3">
              </div>
              <div class="col-3">
              </div>
              <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                  <path d="M14.5 1V27M1 14H28" stroke="#33333350" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
            <div class="row text-center plus-play" style="margin-top: 30vh;">
              <div class="col-3 d-none d-md-block">
                <h5 id="scramble">ALL ABOUT DESIGN.</h5>
              </div>
              <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                  <path d="M14.5 1V27M1 14H28" stroke="#33333350" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                  <path d="M14.5 1V27M1 14H28" stroke="#33333350" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="col-3 d-none d-md-block">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                  <path d="M14.5 1V27M1 14H28" stroke="#33333350" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>

          </div>
        </section>
        <div id="black-section">
          <section id="S3" class="third-section d-none d-md-block">
            <div class="container">
              <h1 class="ms-1 ms-md-0 pb-0 pb-md-6">
                ABOUT <br />
                <span class="ps-3">
                  <span>B</span>
                  <span>I</span>
                  <span>O</span>
                  <span>G</span>
                  <span>R</span>
                  <span>A</span>
                  <span>P</span>
                  <span>H</span>
                  <span>Y</span>
                  <span>.</span>
                </span>
              </h1>

            </div>
            <h1 class="d-none d-md-inline mb-10">
              take closer
              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none"
                class="mb-1">
                <path
                  d="M29.1429 0C28.0697 0 27.2 0.869827 27.2 1.94286C27.2 5.35272 26.3041 6.47119 23.8353 6.73331C21.0288 6.43258 20.4 5.07903 20.4 1.94286C20.4 0.869827 19.5303 0 18.4571 0H8.74286C7.66973 0 6.8 0.869827 6.8 1.94286V4.85714C6.8 5.93017 7.66973 6.8 8.74286 6.8H15.5429C18.9527 6.8 20.071 7.6962 20.3332 10.1647C20.0327 12.9711 18.6791 13.6 15.5429 13.6C14.4697 13.6 13.6 14.4698 13.6 15.5429C13.6 19.5675 12.3516 20.3999 8.74286 20.4C7.66973 20.4 6.8 21.2698 6.8 22.3429C6.8 26.3675 5.55156 27.1999 1.94286 27.2C0.869732 27.2 0 28.0698 0 29.1429V32.0571C0 33.1302 0.869732 34 1.94286 34H4.85714C5.93027 34 6.8 33.1302 6.8 32.0571C6.8 28.0325 8.04844 27.2001 11.6571 27.2C12.7303 27.2 13.6 26.3302 13.6 25.2571C13.6 21.2325 14.8484 20.4001 18.4571 20.4C19.5303 20.4 20.4 19.5302 20.4 18.4571C20.4 15.0473 21.2959 13.9288 23.7647 13.6667C26.5712 13.9674 27.2 15.321 27.2 18.4571V25.2571C27.2 26.3302 28.0697 27.2 29.1429 27.2H32.0571C33.1303 27.2 34 26.3302 34 25.2571V15.5429C34 14.4698 33.1303 13.6 32.0571 13.6C28.6473 13.6 27.529 12.7038 27.2668 10.2353C27.5673 7.42887 28.9209 6.8 32.0571 6.8C33.1303 6.8 34 5.93017 34 4.85714V1.94286C34 0.869827 33.1303 0 32.0571 0H29.1429Z"
                  fill="#121212" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                <path d="M0 0H6.5H13V6.5V13C13 3.25 9.75 0 0 0Z" fill="#fff" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                <path d="M0 0H6.5H13V6.5V13C13 3.25 9.75 0 0 0Z" fill="#fff" />
              </svg>
            </h1>
            <!-- <div class="ps-0 ps-md-4"> -->
            <div class="mt-5 ts_main-content ps-3 ps-md-8">
              <p>Full name</p>
              <h2>Muhammad Ken Izzulhaq</h2>
            </div>
            <div class="ts_main-content ps-3 ps-md-8">
              <p>Ages</p>
              <h2>18 Years old</h2>
            </div>
            <div class="ts_main-content ps-3 ps-md-8">
              <p>Highest school</p>
              <h2>High school</h2>
            </div>
            <div class="ts_main-content ps-3 ps-md-8">
              <p>Nationality</p>
              <h2>Indonesian</h2>
            </div>
            <div class="ts_main-content ps-3 ps-md-8">
              <p>Speak language</p>
              <h2>English, Bahasa, Arabic</h2>
            </div>
            <!-- </div> -->

            <div class="container" style="margin-top: 20vh">
              <!-- <div class="plus-play"></div> -->
            </div>
            <div class="container plus-play" style="margin-top: 30vh;">
              <!-- <p>lorem20</p> -->
              <div class="row text-center">
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="72" height="50" viewBox="0 0 72 50" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M41.625 0.648487C39.8179 0.224273 37.9349 0 36 0C34.0651 0 32.1821 0.224273 30.375 0.648487C28.5679 0.224273 26.6849 0 24.75 0C11.081 0 0 11.1929 0 25C0 38.8071 11.081 50 24.75 50C26.6849 50 28.5679 49.7757 30.375 49.3515C32.1821 49.7757 34.0651 50 36 50C37.9349 50 39.8179 49.7757 41.625 49.3515C43.4321 49.7757 45.3151 50 47.25 50C60.9191 50 72 38.8071 72 25C72 11.1929 60.9191 0 47.25 0C45.3151 0 43.4321 0.224273 41.625 0.648487ZM36 47.274C35.7075 47.4251 35.4116 47.5704 35.1125 47.7099C35.4069 47.7215 35.7028 47.7273 36 47.7273C36.2972 47.7273 36.5931 47.7215 36.8875 47.7099C36.5884 47.5704 36.2925 47.4251 36 47.274ZM38.3598 45.8843C39.4093 46.3407 40.5001 46.7188 41.625 47.0113C51.3294 44.4883 58.5 35.59 58.5 25C58.5 14.41 51.3294 5.51171 41.625 2.98874C40.5001 3.28118 39.4093 3.65928 38.3598 4.11574C45.0713 8.58731 49.5 16.2712 49.5 25C49.5 33.7288 45.0713 41.4127 38.3598 45.8843ZM36 2.72595C35.7075 2.57491 35.4116 2.42957 35.1125 2.29008C35.4069 2.27855 35.7028 2.27273 36 2.27273C36.2972 2.27273 36.5931 2.27855 36.8875 2.29008C36.5884 2.42957 36.2925 2.57491 36 2.72595ZM46.3625 2.29008C54.8559 6.2509 60.75 14.9302 60.75 25C60.75 35.0698 54.8559 43.7491 46.3625 47.7099C46.6569 47.7215 46.9528 47.7273 47.25 47.7273C59.6764 47.7273 69.75 37.5519 69.75 25C69.75 12.4481 59.6764 2.27273 47.25 2.27273C46.9528 2.27273 46.6569 2.27855 46.3625 2.29008ZM33.6402 4.11574C32.5907 3.65928 31.4999 3.28118 30.375 2.98874C20.6706 5.51171 13.5 14.41 13.5 25C13.5 35.59 20.6706 44.4883 30.375 47.0113C31.4999 46.7188 32.5907 46.3407 33.6402 45.8843C26.9287 41.4127 22.5 33.7288 22.5 25C22.5 16.2712 26.9287 8.58731 33.6402 4.11574ZM36 5.31323C29.2747 9.24289 24.75 16.5877 24.75 25C24.75 33.4123 29.2747 40.7571 36 44.6868C42.7253 40.7571 47.25 33.4123 47.25 25C47.25 16.5877 42.7253 9.24289 36 5.31323ZM24.75 47.7273C25.0472 47.7273 25.3431 47.7215 25.6375 47.7099C17.1441 43.7491 11.25 35.0698 11.25 25C11.25 14.9302 17.1441 6.2509 25.6375 2.29008C25.3431 2.27855 25.0472 2.27273 24.75 2.27273C12.3236 2.27273 2.25 12.4481 2.25 25C2.25 37.5519 12.3236 47.7273 24.75 47.7273Z"
                      fill="white" />
                  </svg>
                </div>
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                    <path d="M14.5 1V27M1 14H28" stroke="#ffffff50" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                    <path d="M14.5 1V27M1 14H28" stroke="#ffffff50" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                    <path d="M14.5 1V27M1 14H28" stroke="#ffffff50" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
              <div class="row text-center" style="padding-top: 30vh;">
                <div class="col-md-3">
                </div>
                <div class="col-6 col-md-3 text-start">
                  <p>Experienced in programming since 2023. And have done many projects</p>
                </div>
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                    <path d="M14.5 1V27M1 14H28" stroke="#ffffff50" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                    <path d="M14.5 1V27M1 14H28" stroke="#ffffff50" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
              <div class="row text-center" style="padding-top: 30vh;">
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                    <path d="M14.5 1V27M1 14H28" stroke="#ffffff50" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                    <path d="M14.5 1V27M1 14H28" stroke="#ffffff50" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>

                </div>
                <div class="col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                    <path d="M14.5 1V27M1 14H28" stroke="#ffffff50" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="col-3">
                  <h1>27</h1>
                </div>
              </div>
            </div>
          </section>
          <section id="S3-m" class="third-section d-md-none">
            <div class="container">
              <h3 class="fs-4 opacity-50">about</h3>
              <h2 class="fs-12">BIOGRAPHY</h2>
              <div class="mt-8 border-start border-2 border-light ps-3 border-opacity-50">
                <p class="fs-4 m-0 opacity-50">Name</p>
                <p class="fs-6 m-0 text-uppercase">Muhammad Ken Izzulhaq</p>
              </div>
              <div class="mt-3 border-start border-2 border-light ps-3 border-opacity-50">
                <p class="fs-4 m-0 opacity-50">Age</p>
                <p class="fs-6 m-0 text-uppercase">18 Years old</p>
              </div>
              <div class="mt-3 border-start border-2 border-light ps-3 border-opacity-50">
                <p class="fs-4 m-0 opacity-50">Highest school</p>
                <p class="fs-6 m-0 text-uppercase">High scholl</p>
              </div>
              <div class="mt-3 border-start border-2 border-light ps-3 border-opacity-50">
                <p class="fs-4 m-0 opacity-50">Nationality</p>
                <p class="fs-6 m-0 text-uppercase">Indonesian</p>
              </div>
              <div class="mt-3 border-start border-2 border-light ps-3 border-opacity-50">
                <p class="fs-4 m-0 opacity-50">Speak language</p>
                <p class="fs-6 m-0 text-uppercase">English, Bahasa, Arabic</p>
              </div>
              <div class="mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="50" viewBox="0 0 72 50" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M41.625 0.648487C39.8179 0.224273 37.9349 0 36 0C34.0651 0 32.1821 0.224273 30.375 0.648487C28.5679 0.224273 26.6849 0 24.75 0C11.081 0 0 11.1929 0 25C0 38.8071 11.081 50 24.75 50C26.6849 50 28.5679 49.7757 30.375 49.3515C32.1821 49.7757 34.0651 50 36 50C37.9349 50 39.8179 49.7757 41.625 49.3515C43.4321 49.7757 45.3151 50 47.25 50C60.9191 50 72 38.8071 72 25C72 11.1929 60.9191 0 47.25 0C45.3151 0 43.4321 0.224273 41.625 0.648487ZM36 47.274C35.7075 47.4251 35.4116 47.5704 35.1125 47.7099C35.4069 47.7215 35.7028 47.7273 36 47.7273C36.2972 47.7273 36.5931 47.7215 36.8875 47.7099C36.5884 47.5704 36.2925 47.4251 36 47.274ZM38.3598 45.8843C39.4093 46.3407 40.5001 46.7188 41.625 47.0113C51.3294 44.4883 58.5 35.59 58.5 25C58.5 14.41 51.3294 5.51171 41.625 2.98874C40.5001 3.28118 39.4093 3.65928 38.3598 4.11574C45.0713 8.58731 49.5 16.2712 49.5 25C49.5 33.7288 45.0713 41.4127 38.3598 45.8843ZM36 2.72595C35.7075 2.57491 35.4116 2.42957 35.1125 2.29008C35.4069 2.27855 35.7028 2.27273 36 2.27273C36.2972 2.27273 36.5931 2.27855 36.8875 2.29008C36.5884 2.42957 36.2925 2.57491 36 2.72595ZM46.3625 2.29008C54.8559 6.2509 60.75 14.9302 60.75 25C60.75 35.0698 54.8559 43.7491 46.3625 47.7099C46.6569 47.7215 46.9528 47.7273 47.25 47.7273C59.6764 47.7273 69.75 37.5519 69.75 25C69.75 12.4481 59.6764 2.27273 47.25 2.27273C46.9528 2.27273 46.6569 2.27855 46.3625 2.29008ZM33.6402 4.11574C32.5907 3.65928 31.4999 3.28118 30.375 2.98874C20.6706 5.51171 13.5 14.41 13.5 25C13.5 35.59 20.6706 44.4883 30.375 47.0113C31.4999 46.7188 32.5907 46.3407 33.6402 45.8843C26.9287 41.4127 22.5 33.7288 22.5 25C22.5 16.2712 26.9287 8.58731 33.6402 4.11574ZM36 5.31323C29.2747 9.24289 24.75 16.5877 24.75 25C24.75 33.4123 29.2747 40.7571 36 44.6868C42.7253 40.7571 47.25 33.4123 47.25 25C47.25 16.5877 42.7253 9.24289 36 5.31323ZM24.75 47.7273C25.0472 47.7273 25.3431 47.7215 25.6375 47.7099C17.1441 43.7491 11.25 35.0698 11.25 25C11.25 14.9302 17.1441 6.2509 25.6375 2.29008C25.3431 2.27855 25.0472 2.27273 24.75 2.27273C12.3236 2.27273 2.25 12.4481 2.25 25C2.25 37.5519 12.3236 47.7273 24.75 47.7273Z"
                    fill="white" />
                </svg>
              </div>
            </div>
          </section>

          <section id="S4" class="fourth-section d-none d-md-flex flex-column">
            <h1 class="fs_title">
              EDUCATION
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                <path d="M0 0H6.5H13V6.5V13C13 3.25 9.75 0 0 0Z" fill="#fff" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                <path d="M0 0H6.5H13V6.5V13C13 3.25 9.75 0 0 0Z" fill="#fff" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                <path d="M0 0H6.5H13V6.5V13C13 3.25 9.75 0 0 0Z" fill="#fff" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                <path d="M0 0H6.5H13V6.5V13C13 3.25 9.75 0 0 0Z" fill="#fff" />
              </svg>
            </h1>
            <div class="fs-main" style="padding-top: 10vh;">
              <div class="row px-4 pt-2 justify-content-between mx-3" id="pin-scrub">
                <div class="col-3 d-none d-md-flex px-3 fs-main-hover" id="fs-main-gsap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="170" height="118" viewBox="0 0 170 118" fill="none"
                    id="fs-main-svg" class="m-auto">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M98.2812 1.53043C94.0145 0.529284 89.5685 0 85 0C80.4315 0 75.9855 0.529284 71.7188 1.53043C67.452 0.529284 63.006 0 58.4375 0C26.1634 0 0 26.4152 0 59C0 91.5848 26.1634 118 58.4375 118C63.006 118 67.452 117.471 71.7188 116.47C75.9855 117.471 80.4315 118 85 118C89.5685 118 94.0145 117.471 98.2812 116.47C102.548 117.471 106.994 118 111.562 118C143.837 118 170 91.5848 170 59C170 26.4152 143.837 0 111.562 0C106.994 0 102.548 0.529284 98.2812 1.53043ZM85 111.567C84.3093 111.923 83.6107 112.266 82.9045 112.595C83.5996 112.623 84.2982 112.636 85 112.636C85.7018 112.636 86.4004 112.623 87.0955 112.595C86.3893 112.266 85.6907 111.923 85 111.567ZM90.5717 108.287C93.0498 109.364 95.6253 110.256 98.2812 110.947C121.194 104.992 138.125 83.9924 138.125 59C138.125 34.0076 121.194 13.0076 98.2812 7.05342C95.6253 7.74358 93.0498 8.6359 90.5717 9.71315C106.418 20.2661 116.875 38.4001 116.875 59C116.875 79.5999 106.418 97.734 90.5717 108.287ZM85 6.43325C84.3093 6.07678 83.6107 5.73379 82.9045 5.4046C83.5996 5.37737 84.2982 5.36364 85 5.36364C85.7018 5.36364 86.4004 5.37737 87.0955 5.4046C86.3893 5.73379 85.6907 6.07678 85 6.43325ZM109.467 5.4046C129.521 14.7521 143.438 35.2352 143.438 59C143.438 82.7648 129.521 103.248 109.467 112.595C110.162 112.623 110.861 112.636 111.562 112.636C140.903 112.636 164.688 88.6225 164.688 59C164.688 29.3775 140.903 5.36364 111.562 5.36364C110.861 5.36364 110.162 5.37737 109.467 5.4046ZM79.4283 9.71315C76.9502 8.6359 74.3747 7.74358 71.7188 7.05342C48.8056 13.0076 31.875 34.0076 31.875 59C31.875 83.9924 48.8056 104.992 71.7188 110.947C74.3747 110.256 76.9502 109.364 79.4283 108.287C63.5816 97.734 53.125 79.5999 53.125 59C53.125 38.4001 63.5816 20.2661 79.4283 9.71315ZM85 12.5392C69.1209 21.8132 58.4375 39.147 58.4375 59C58.4375 78.853 69.1209 96.1868 85 105.461C100.879 96.1868 111.562 78.853 111.562 59C111.562 39.147 100.879 21.8132 85 12.5392ZM58.4375 112.636C59.1393 112.636 59.8379 112.623 60.533 112.595C40.479 103.248 26.5625 82.7648 26.5625 59C26.5625 35.2352 40.479 14.7521 60.533 5.4046C59.8379 5.37737 59.1393 5.36364 58.4375 5.36364C29.0974 5.36364 5.3125 29.3775 5.3125 59C5.3125 88.6225 29.0974 112.636 58.4375 112.636Z"
                      fill="white" />
                  </svg>
                </div>
                <div class="col-12 col-md-8">
                  <div class="fs-main-content">
                    <h1>KINDERGARTEN</h1>
                    <div class="hr"></div>
                    <div class="row mt-4">
                      <div class="col-12 col-md-2 ms-md-2">
                        <h5>
                          TK DHARMA WANITA
                        </h5>
                      </div>
                      <div class="col-12 col-md-3">
                        <p>First time ever going to school and start learning reading and playing with my friends and
                          teachers</p>
                      </div>
                      <div class="col-12 col-md-1"></div>
                      <div class="col-12 col-md-2">
                        <h5>SURABAYA</h5>
                      </div>
                      <div class="col-2">
                        <p>-7.297359999708036, 112.74471821565001</p>
                      </div>
                    </div>
                  </div>

                  <div class="fs-main-content mt-3">
                    <h1>ELEMENTARY</h1>
                    <div class="hr"></div>
                    <div class="row mt-4">
                      <div class="col-2 ms-2">
                        <h5>
                          SDN PERCOBAAN
                        </h5>
                      </div>
                      <div class="col-3">
                        <p>Start to learn deeper for better life and found some problem with each others.</p>
                      </div>
                      <div class="col-1"></div>
                      <div class="col-2">
                        <h5>MALANG</h5>
                      </div>
                      <div class="col-2">
                        <p>-7.972384, 112.612908</p>
                      </div>
                    </div>
                  </div>
                  <div class="fs-main-content mt-3">
                    <h1>JUNIOR HIGH</h1>
                    <div class="hr"></div>
                    <div class="row mt-4">
                      <div class="col-2 ms-2">
                        <h5>
                          SMP PARAMITHA
                        </h5>
                      </div>
                      <div class="col-3">
                        <p>start the stage of looking for interests and talents then deepen them.</p>
                      </div>
                      <div class="col-1"></div>
                      <div class="col-2">
                        <h5>MALANG</h5>
                      </div>
                      <div class="col-2">
                        <p>-7.948096470818341, 112.65804376666391</p>
                      </div>
                    </div>
                  </div>
                  <div class="fs-main-content mt-3">
                    <h1>HIGH SCHOOL</h1>
                    <div class="hr"></div>
                    <div class="row mt-4">
                      <div class="col-2 ms-2">
                        <h5>
                          SMK AVERROES
                        </h5>
                      </div>
                      <div class="col-3">
                        <p>Team work and real projects started, trying to enjoy my life. and i find my soul.</p>
                      </div>
                      <div class="col-1"></div>
                      <div class="col-2">
                        <h5>MALANG</h5>
                      </div>
                      <div class="col-2">
                        <p>-7.928816087913843, 112.61740935100647</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div style="margin-top: 15vh;">
              <h3 style="text-transform: uppercase;"><span
                  style="background-color: #fff;color: #212121;border-radius: 10px;padding: 4px 10px;margin-left: 30px;">12
                  Years</span></span>
                &nbsp;education &nbsp;<span
                  style="border-radius: 10px;padding: 4px 10px;background-color: #c9c9c9;color: #212121;">20+</span>&nbsp;
                <span
                  style="border-radius: 10px;border: 1px #fff solid;padding: 4px 10px;position: relative;">achievment
                  <span
                    style="border-radius: 100%;background-color: #fff;position: absolute;top: -15px;right: -15px;color: #212121; font-size: 1rem;width: 30px;height: 30px;display: flex; justify-content: center;align-items: center;">21+</span></span>
              </h3>
            </div>
          </section>
          <section id="S4-m" class="d-md-none">
            <div class="container text-light">
              <h1 class=" fs-12 mt-20">EDUCATION</h1>
              <div class="mt-5">
                <div class="border-start border-3 border-light ps-3">
                  <h1>KINDERGARTEN</h1>
                  <p class="fs-3 opacity-50">TK Dharma Wanita</p>
                  <p class="fs-3 mt-3">First time ever going to school and start learning reading and playing with my
                    friends and
                    teachers</p>
                  <p class="fs-2 opacity-25 mt-5">SURABAYA <br>-7.297359999708036, 112.74471821565001</p>
                </div>
              </div>
              <div class="mt-5 text-end">
                <div class="border-3 border-end border-light pe-3">
                  <h1>ELEMENTARY</h1>
                  <p class="fs-3 opacity-50">SDN Percobaan 2</p>
                  <p class="fs-3 mt-3">Start to learn deeper for better life and found some problem with each others.
                  </p>
                  <p class="fs-2 opacity-25 mt-5">MALANG <br>-7.297359999708036, 112.74471821565001</p>
                </div>
              </div>
              <div class="mt-5">
                <div class=" border-start border-3 border-light ps-3">
                  <h1>JUNIOR HIGH</h1>
                  <p class="fs-3 opacity-50">SMP Paramitha</p>
                  <p class="fs-3 mt-3">start the stage of looking for interests and talents then deepen them.</p>
                  <p class="fs-2 opacity-25 mt-5">MALANG <br>-7.948096470818341, 112.65804376666391</p>
                </div>
              </div>
              <div class="mt-5 text-end">
                <div class=" border-end border-3 border-light pe-3">
                  <h1>HIGH SCHOOL</h1>
                  <p class="fs-3 opacity-50">SMK AVERROES</p>
                  <p class="fs-3 mt-3">Team work and real projects started, trying to enjoy my life. and i find my soul.
                  </p>
                  <p class="fs-2 opacity-25 mt-5">MALANG <br>-7.928816087913843, 112.61740935100647 </p>
                </div>
              </div>
            </div>
          </section>
          <section id="S5" class="fifth-section d-none d-md-block">
            <div class="container d-none d-md-block">
              <h1>WORKS <br>
                <span class="ms-3">
                  <span>P</span>
                  <span>R</span>
                  <span>O</span>
                  <span>J</span>
                  <span>E</span>
                  <span>C</span>
                  <span>T</span>
                  <span>.</span>
                </span>
              </h1>
            </div>
            <div class="container">
              <a href="https://figma.com/@kenndeclouv" target="_blank" class="mt-5 main-work" id="link-click-hover">
                <div class="work-hover-wrapper d-none d-md-grid" id="main-hover-wrapper">
                </div>
                <img src="./assets/img/main-work.png" alt="" data-speed="0.9" style="height:115%" />
              </a>
              <div class="work-des mt-3 d-flex justify-content-between">
                <a href="https://www.figma.com/@kenndeclouv">Figma design<span></span></a>
                <h6>2024</h6>
              </div>
              <div class="mt-4 row">
                <div class="col-12 col-md-6 mt-1">
                  <a href="https://sisdps.com" target="_blank" class="side-work" id="link-click-hover">
                    <div class="work-hover-wrapper d-none d-md-grid" id="side-hover-wrapper">
                    </div>
                    <img src="./assets/img/medina-work.png" alt="" class="mb-5" data-speed="0.9" style="height:110%" />
                  </a>
                  <div class="work-des mt-3 d-flex justify-content-between">
                    <a href="https://sisdps.com">Medina residence web project <span></span></a>
                    <h6>2023</h6>
                  </div>
                </div>
                <div class="col-12 col-md-6 mt-1">
                  <a href="https://pioneercnc.id" target="_blank" class="side-work" id="link-click-hover">
                    <div class="work-hover-wrapper d-none d-md-grid" id="side-hover-wrapper">
                    </div>
                    <img src="./assets/img/pioneer-work.png" alt="" class="mb-5" data-speed="0.9" style="height:110%" />
                  </a>
                  <div class="work-des mt-3 d-flex justify-content-between">
                    <a href="https://pioneercnc.id" target="_blank">Pioneer project<span></span></a>
                    <h6>2023</h6>
                  </div>
                </div>
              </div>
              <div class="mt-4 row">
                <div class="col-12 col-md-6 mt-1">
                  <a href="https://instagram.com/kenndeclouv" target="_blank" class="side-work" id="link-click-hover">
                    <div class="work-hover-wrapper d-none d-md-grid" id="side-hover-wrapper">
                    </div>
                    <img src="./assets/img/media-work.png" alt="" class="mb-5" data-speed="0.9" style="height:110%" />
                  </a>
                  <div class="work-des mt-3 d-flex justify-content-between">
                    <a href="https://instagram.com/kenndeclouv">School media admin<span></span></a>
                    <h6>2023</h6>
                  </div>
                </div>
                <div class="col-12 col-md-6 mt-1">
                  <div class="side-work more-work" id="link-click-hover">
                    <div class="m-auto d-flex flex-column">
                      <svg xmlns="http://www.w3.org/2000/svg" width="91" height="91" viewBox="0 0 91 91" fill="none"
                        class="m-auto">
                        <path d="M45.5 4V87M4 45.5H87" stroke="#ffffff" stroke-width="8" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                      <p class="mt-3">MORE WORKS</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section id="S5-m" class="d-md-none">
            <div class="container mt-15 text-light">
              <h3 class="fs-4 opacity-50">works</h3>
              <h2 class="fs-12">PROJECTS</h2>
              <a href="https://www.figma.com/@kenndeclouv" class="text-light mb-3 mt-6">
                <img src="assets/img/main-work.png" alt="" class="w-100 rounded-4">
                <div class="d-flex justify-content-between mt-1">
                  <p>Figma design</p>
                  <p>2024</p>
                </div>
              </a>

              <a href="https://sisdps.com" class="text-light mb-3">
                <img src="assets/img/medina-work.png" alt="" class="w-100 rounded-4 mb-3">
                <div class="d-flex justify-content-between mt-1">
                  <p>Medina residence</p>
                  <p>2023</p>
                </div>
              </a>
              <a href="https://pioneercnc.id" class="text-light mb-3">
                <img src="assets/img/pioneer-work.png" alt="" class="w-100 rounded-4 mb-3">
                <div class="d-flex justify-content-between mt-1">
                  <p>Pioneer cnc</p>
                  <p>2023</p>
                </div>
              </a>
              <a href="https://instagram.com/kenndeclouv" class="text-light mb-3">
                <img src="assets/img/media-work.png" alt="" class="w-100 rounded-4 mb-3">
                <div class="d-flex justify-content-between mt-1">
                  <p>School content</p>
                  <p>2024</p>
                </div>
              </a>
            </div>
            <div class="d-flex mb-4">
              <div class="mx-auto plus-play">
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                  <path d="M14.5 1V27M1 14H28" stroke="#ffffff95" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none"
                  class="mx-4">
                  <path d="M14.5 1V27M1 14H28" stroke="#ffffff95" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                  <path d="M14.5 1V27M1 14H28" stroke="#ffffff95" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          </section>
        </div>
        <section id="S6" class="sixth-section d-none d-md-block py-5">
          <div class="container-xxl">
            <h1 class="text-center mb-5" data-speed="1.2">SKILL</h1>
            <div class="slider-container pt-5">
              <div class="skill-slider">
                <h2 style="font-size: 3rem; padding-right: 15rem">
                  What can i do?
                </h2>
                <div class="skill">
                  <div class="pb-5 mb-5">
                    <div class=" d-flex gap-5">
                      <img src="assets/img/c.png" alt="" />
                      <p>
                        My design are focused &emsp;&emsp;&emsp;on web design
                        and graphic design, i make &emsp;design as
                        communication between designer &emsp;&emsp;to others
                      </p>
                    </div>
                  </div>
                  <div class="pt-5">
                    <div class="d-flex justify-content-between">
                      <h2>DESIGN</h2>
                      <h2 class="opacity-50">01</h2>
                    </div>
                  </div>
                </div>
                <div class="skill">
                  <div class="pb-5 mb-5">
                    <div class=" d-flex gap-5">
                      <img src="assets/img/b.png" alt="" />
                      <p>
                        Expert at web programming turn design to real website
                        isn't easy at the moment, but its really fun
                      </p>
                    </div>
                  </div>
                  <div class="row pt-5">
                    <div class="col-12 d-flex justify-content-between">
                      <h2>PROGRAM</h2>
                      <h2 class="opacity-50">02</h2>
                    </div>
                  </div>
                </div>
                <div class="skill">
                  <div class="row pb-5 mb-5">
                    <div class="col-12 d-flex gap-5">
                      <img src="assets/img/a.png" alt="" />
                      <p>
                        turning local websites into real and useful websites
                        with optimal SEO for the easiest searches
                      </p>
                    </div>
                  </div>
                  <div class="row pt-5">
                    <div class="col-12 d-flex justify-content-between">
                      <h2>DEVELOPMENT</h2>
                      <h2 class="opacity-50">03</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="S6-m" class="d-md-none">
          <div class="container mt-7 mb-6">
            <h1 class="m-0 ms-2 fs-18" data-speed="1.09">SKILL</h1>
            <h1 class="m-0 ms-2 fs-10 opacity-50" data-speed="1.12">what can i do </h1>
            <div class="rounded-4 p-3 mt-4 text-light" style="background-color: #222831;">
              <div class="row w-100">
                <div class="col-3">
                  <img src="assets/img/a.png" alt="" class="rounded-circle w-100">
                </div>
                <div class="col-9">
                  <p class="text-uppercase">
                    My design are focused &emsp;&emsp;&emsp;on web design
                    and graphic design, i make &emsp;design as
                    communication between designer &emsp;&emsp;to others
                  </p>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-3">
                <h1>DESIGN</h1>
                <h1 class="opacity-50">01</h1>
              </div>
            </div>
            <div class="rounded-4 p-3 mt-2 text-light" style="background-color: #6b9a9c;">
              <div class="row w-100">
                <div class="col-3">
                  <img src="assets/img/b.png" alt="" class="rounded-circle w-100">
                </div>
                <div class="col-9">
                  <p class="text-uppercase">
                    Expert at web programming turn design to real website
                    isn't easy at the moment, but its really fun
                  </p>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-3">
                <h1>PROGRAM</h1>
                <h1 class="opacity-50">02</h1>
              </div>
            </div>
            <div class="rounded-4 p-3 mt-2" style="background-color: #dcdcdc;">
              <div class="row w-100">
                <div class="col-3">
                  <img src="assets/img/c.png" alt="" class="rounded-circle w-100">
                </div>
                <div class="col-9">
                  <p class="text-uppercase">
                    turning local websites into real and useful websites
                    with optimal SEO for the easiest searches
                  </p>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-3">
                <h1>DEVELOPMENT</h1>
                <h1 class="opacity-50">03</h1>
              </div>
            </div>
          </div>
        </section>
        <section id="S7" class="seventh-section">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                <!-- <h1 data-speed="1.1">Lets start <br data-speed="0.9">&emsp;&emsp;to being <br data-speed="1.6">a friend</h1> -->
                <h1 data-speed="1.1">Lets start</h1>
                <h1 data-speed="1.15">&emsp;&emsp;To being</h1>
                <h1 data-speed="1.2">a friends</h1>
              </div>
              <div class="col-12 col-md-6" data-speed="1.1">
                <div class="contact-box" style="--focus-ring: 254, 254, 254;">
                  <p>Your data</p>

                  <form method="post" action="submit.php">
                    <?php
                    if (!empty($error)) {
                      ?>
                      <div class="alert alert-danger mt-4"><?= $error ?></div>
                      <?php
                    }
                    ?>
                    <div class="form-floating opacity-50 mt-3" id="inputField">
                      <input type="text" class="form-control" id="floatingName" placeholder="Name" name="name" autocomplete="off">
                      <label for="floatingName">Name*</label>
                    </div>
                    <div class="form-floating mt-3 opacity-50" id="inputField">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autocomplete="off"
                        name="email">
                      <label for="floatingInput">Email address*</label>
                    </div>
                    <div class="form-floating opacity-50 mt-3" id="inputField">
                      <input type="text" class="form-control" id="floatingName" placeholder="Subject" name="subject" autocomplete="off">
                      <label for="floatingSub">Subject*</label>
                    </div>
                    <div class="mt-4">
                      <div class="mt-4">
                        <div class="form-floating opacity-50" id="inputField">
                          <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 150px" name="message"></textarea>
                          <label for="floatingTextarea2">Your Messages</label>
                        </div>
                      </div>
                      <div class="mt-4">
                        <button class="btn">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <div class="container text-light text-center text-md-start d-flex">
            <h4 class="d-none d-md-inline">Follow me</h4>
            <span class="ms-md-4 align-items-center">
              <a href="https://www.instagram.com/kenndeclouv" class="text-light me-3"><i
                  class="fa fa-brands fa-instagram fa-xl"></i></a>
              <a href="https://www.facebook.com/kenndeclouv" class="text-light me-3"><i
                  class="fa fa-brands fa-facebook-f fa-xl"></i></a>
              <a href="https://x.com/kenndeclouv" class="text-light me-3"><i
                  class="fa fa-brands fa-x-twitter fa-xl"></i></a>
              <a href="https://github.com/KennDeClouv" class="text-light me-3"><i
                  class="fa fa-brands fa-github fa-xl"></i></a>
              <a href="https://www.linkedin.com/in/muhammad-ken-izzulhaq-4470b6290/" class="text-light "><i
                  class="fa fa-brands fa-linkedin-in fa-xl"></i></a>
            </span>
            <p class="fs-2 ms-auto">Personal portfolio @2024</p>
          </div>
        </footer>
      </main>
    </div>
  </div>
  <div id="navbox" class="top"></div>
  <!-- <script type="module" src="assets/components/index.js"></script> -->
  <script src="assets/js/gsap.js"></script>
  <script src="assets/components/navbar.js"></script>
  <script>
    // INDEXES

    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

    ScrollTrigger.normalizeScroll(true);

    let smoother = ScrollSmoother.create({
      wrapper: "#smooth-wrapper",
      content: "#smooth-content",
      smooth: 2,
      normalizeScroll: true,
      effects: true,
      smoothTouch: 2,
    });

    const targets = document.querySelectorAll("#S3,#S4,#S5,#S6,#S7");
    const targetsM = document.querySelectorAll("#S3-m,#S4-m,#S5-m,#S6-m,#S7");
    const navigates = document.querySelectorAll("#toEdu,#toAbout,#toPro,#toSkill,#toCont");

    navigates.forEach((navigate, index) => {
      navigate.addEventListener("click", () => {
        if (window.innerWidth > 768) {
          smoother.scrollTo(targets[index], true, "top top");
        } else {
          smoother.scrollTo(targetsM[index], true, "top top");
        }
      });
    });


    // FIRST SECTION
    let block = document.createElement("div")
    let mainWorkBlockLength = 38 * 18;
    const mainn = document.querySelector("#main-hoverr")
    mainn.appendChild(block)

    for (let i = 0; i < mainWorkBlockLength; i++) {
      let newBlock = block.cloneNode(true);
      mainn.appendChild(newBlock);
    }

    const msHoverDiv = document.querySelectorAll(".ms-hoverable div");
    msHoverDiv.forEach((div) => {
      div.addEventListener("mousedown", () => {
        div.classList.toggle("opacity-100");
      });
    });

    // SECOND SECTION
    function handleHorizontalScroll(containerSelector, sectionSelector, offset) {
      const container = document.querySelector(containerSelector);
      const sections = gsap.utils.toArray(sectionSelector);
      const content = document.querySelector(sectionSelector);

      let contentWidth = 0;
      // Iterate over each section to calculate the total width
      sections.forEach((section) => {
        contentWidth += section.offsetWidth;
      });

      // Calculate the amount to scroll horizontally
      let amountToScroll = contentWidth - window.innerWidth;

      if (window.innerWidth > 768) {
        const tween = gsap.to(content, {
          x: -amountToScroll - offset,
          duration: 1,
          ease: "none",
        });

        ScrollTrigger.create({
          trigger: containerSelector,
          start: "top",
          end: `+=${amountToScroll}`,
          pin: true,
          animation: tween,
          scrub: 1,
        });
      }
    }

    handleHorizontalScroll("#S2", "#ss_main-content", "400");


    document.addEventListener("DOMContentLoaded", function () {
      const textElement = document.getElementById("scramble");
      const originalText = textElement.innerText;
      const characters = originalText.split("");

      let scrambleInterval;
      const scrambleFrequency = 50; // Scramble text every 50ms

      // Function to scramble text
      function scrambleText() {
        let newText = "";
        for (let i = 0; i < characters.length; i++) {
          if (characters[i] === " ") {
            newText += " ";
          } else {
            newText += String.fromCharCode(Math.random() * (126 - 33) + 33);
          }
        }
        textElement.innerText = newText;
      }

      // Start scrambling text when scrolling
      window.addEventListener("scroll", function () {
        if (!scrambleInterval) {
          scrambleInterval = setInterval(scrambleText, scrambleFrequency);
        }
      });

      // Stop scrambling and clear interval when scrolling stops
      let scrollTimeout;
      window.addEventListener("scroll", function () {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(function () {
          clearInterval(scrambleInterval);
          scrambleInterval = null;
          textElement.innerText = originalText; // Reset to original text
        }, 1000);
      });
    });


    // FOURTH SECTION

    const tl = gsap.timeline({
      scrollTrigger: {
        scrub: 1,
        pin: true,
        trigger: "#fs-main-gsap",
        start: "50% 50%",
        endTrigger: "#pin-scrub",
        end: "100% 72%",
        // ease: "power2.inOut",
        // markers:true
      },
    });

    tl.to("#fs-main-svg", {
      rotateZ: 720,
    });

    // SIXTH SECTION
    function handleHorizontalScroll(containerSelector, sectionSelector, offset) {
      const container = document.querySelector(containerSelector);
      const sections = gsap.utils.toArray(sectionSelector);
      const content = document.querySelector(sectionSelector);

      let contentWidth = 0;
      // Iterate over each section to calculate the total width
      sections.forEach((section) => {
        contentWidth += section.offsetWidth;
      });

      // Calculate the amount to scroll horizontally
      let amountToScroll = contentWidth - window.innerWidth;

      if (window.innerWidth > 768) {
        const tween = gsap.to(content, {
          x: -amountToScroll - offset,
          duration: 1,
          ease: "none",
        });

        ScrollTrigger.create({
          trigger: containerSelector,
          start: "top",
          end: `+=${amountToScroll}`,
          pin: true,
          animation: tween,
          scrub: 1,
        });
      }
    }

    handleHorizontalScroll(".slider-container", ".skill-slider", "400");

    // SEVENTH SECTION
    const inputField = document.querySelectorAll("input, textarea");

    inputField.forEach((e) => {
      e.addEventListener("input", () => {
        if (e.value.length > 0) {
          e.parentElement.classList.remove("opacity-50");
        } else {
          e.parentElement.classList.add("opacity-50");
        }
      });
    });

    setTimeout(() => {
      console.clear()
      console.log(
        "%cLook at my github profile",
        "font-size: 15px; color: #151515; font-weight: bold; background-color: #fff; padding: 5px 20px;border-radius:10px",
        "https://github.com/KennDeClouv"
      );
    }, 10000);

    // LOADER
    let images = document.images;
    let loaded = 0;
    let filesLength = images.length;

    let loaderHTML = document.querySelector(".loader");

    let percentHTML = document.querySelector("#DOM");
    let progressHTML = document.querySelector(".loader-bar-inner");

    gsap.set("#MEH", { yPercent: 110 });
    gsap.set("#DOM", { yPercent: 110 });

    const getFiles = () => {
      gsap.to("#MEH", { yPercent: 0 }, "<50%");
      gsap.to("#DOM", { yPercent: 0 }, "<25%");
      for (let i = 0; i < filesLength; i++) {
        let tImg = new Image();
        tImg.onload = filesLoading;
        tImg.onerror = filesLoading;
        tImg.src = images[i].src;
      }
    };

    const filesLoading = () => {
      loaded += 1;
      let percentage = `${((100 / filesLength) * loaded) << 0}%`;
      if (loaded === filesLength) doneLoading();
    };

    const doneLoading = () => {
      let loaderTimeLine = gsap.timeline();

      loaderTimeLine.to(progressHTML, {
        width: "100%",
        duration: 1.5,
        ease: Power1.easeIn,
      });
      loaderTimeLine.fromTo(
        percentHTML,
        { textContent: "0%" },
        {
          textContent: "100%",
          snap: { textContent: 1 },
          duration: 2,
          ease: Power1.easeIn,
        },
        "<"
      );

      setTimeout(() => {
        let transitionElement = document.querySelector(".transition");
        if (transitionElement) {
          transitionElement.classList.add("loaded");
        }

        setTimeout(() => {
          let loaderElement = document.querySelector(".loader");
          let loaderWrapper = document.querySelector(".loader-wrapper");
          if (loaderElement && loaderWrapper) {
            loaderWrapper.removeChild(loaderElement);
          }

          setTimeout(() => {
            let transitionElement = document.querySelector(".transition");
            let loaderWrapper = document.querySelector(".loader-wrapper");
            if (transitionElement && loaderWrapper) {
              loaderWrapper.removeChild(transitionElement);
            }
          }, 5000);
        }, 2100);
      }, 3000);
    };
    getFiles();

  </script>
  <!-- <script src="./assets/components/loader.js"></script> -->
  <script src="./assets/components/cursor.js"></script>
</body>

</html>