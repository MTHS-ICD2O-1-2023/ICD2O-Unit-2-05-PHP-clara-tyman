      <!DOCTYPE html>
      <html>

      <head>
        <meta charset="utf-8" />
        <meta name="description" content="Salary program with JavaScript" />
        <meta name="keywords" content="mths, icd2o" />
        <meta name="author" content="Clara" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
        <link rel="manifest" href="site.webmanifest" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css" />
        <link rel="stylesheet" href="./css/style.css" />
        <title>Salary program, with JavaScript</title>
      </head>

      <body>
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script src="./js/script.js"></script>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
          <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
              <span class="mdl-layout-title">Salary program, with JavaScript</span>
            </div>
          </header>
          <div class="column">
            <img src="./images/income_tax.jpg" alt="income tax" class="income-tax-image">
          </div>
          <div class="page-content-php">
            <div name="user-info">
              <?php
              $TAX_RATE = 0.18;

              $hours = $_GET["hours-of-work"];
              $rate = $_GET["rate-of-pay"];

              // process
              $pay = ($hours * $rate) * (1.00 - $TAX_RATE);
              $taxes = ($hours * $rate) * $TAX_RATE;

              // output
              echo "Your pay is = " . $pay . " $" ;
              echo "<br />";
              echo "The gouverment will take " . $taxes . " $" ;
              ?>
            </div>
          </div>
          </main>
        </div>
      </body>

      </html>