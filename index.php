<!DOCTYPE html>
<!-- ICS2O-Unit5-02-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Positive and negative #, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="domenic dangelo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-amber.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Positive and negative #, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Positive and negative #, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/positive_negative.jpg" alt="positive and negative" />
      </div>
      <p>Select what kind of number you would like.</p>
      <br />
      <form action="answer.php" method="GET">
        <!-- Simple Textfield -->
        <div class="mdl-textfield mdl-js-textfield">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-positive">
            <input type="radio" id="option-positive" class="mdl-radio__button" name="kind-of-number" value="1" checked><!-- Positive -->
            <span class="mdl-radio__label">Positive</span>
          </label>
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-negative">
            <input type="radio" id="option-negative" class="mdl-radio__button" name="kind-of-number" value="2"><!-- Negative -->
            <span class="mdl-radio__label">Negative</span>
          </label>
        </div>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Generate
        </button>
      </form>
    </main>
  </div>
</body>

</html>