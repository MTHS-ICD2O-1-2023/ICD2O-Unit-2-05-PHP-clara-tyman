<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Salary program with PHP" />
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
  <title>Salary program, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./answer.php"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Salary program, with PHP</span>
      </div>
    </header>
    <div class="content">
      <div class="row">
        <div class="column">
          <!-- Numeric Textfield with Floating Label -->
          <form action="answer.php" method="GET">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="hours-of-work" />
              <label class="mdl-textfield__label" for="sample4">Hours worked</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <!-- Numeric Textfield with Floating Label -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="rate-of-pay" />
              <label class="mdl-textfield__label" for="sample4">Pay per hour</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <!-- Accent-colored raised button with ripple -->
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
              Calculate
            </button>
          </form>
        </div>
        <div class="column">
          <img src="./images/income_tax.jpg" alt="income tax" class="income-tax-image">
        </div>
      </div>
    </div>
  </div>
</body>

</html>