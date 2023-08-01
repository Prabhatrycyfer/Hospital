<html>

<head>
  <title>Thank You!</title>
  <link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
  <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="errorModule">
      <div class="errorIcon">
        <i class="fa fa-unlink"></i>
      </div>
      <div class="errorMsg">Oops! Something went Wrong. <a href="https://meliora.org.in/">Try Again</a></div>
    </div>
</body>

<style>
    body, button {
      background: #F5F1E3;
      font-family: "Armata", sans-serif;
    }
    
    .errorModule {
      margin: 40px auto 20px;
      text-align: center;
      color: #A80000;
    }
    .errorModule .errorIcon {
      font-size: 34px;
      margin: 15px;
      animation: animateIcon 5s infinite;
    }
    .errorModule .errorMsg {
      font-size: 14px;
    }
    @keyframes animateIcon {
      0% {
        -ms-transform: scale(1);
        -moz-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1);
      }
      50% {
        -ms-transform: scale(2);
        -moz-transform: scale(2);
        -webkit-transform: scale(2);
        transform: scale(2);
      }
      100% {
        -ms-transform: scale(1);
        -moz-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }
</style>

</html>