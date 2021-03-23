<?php include_once 'Member_Dashboard.php';
include_once '../Connection.php';

if ($_SESSION['mid'] == "") {
  header("location:../Home.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
    }

    .content {
      margin-left: 360px;
      margin-top: 200px;
      width: 1200px;
    }

    .columns {
      float: left;
      width: 25.3%;
      padding: 8px;
    }

    .price {
      list-style-type: none;
      border: 1px solid #eee;
      margin: 0;
      padding: 0;
      -webkit-transition: 0.3s;
      transition: 0.3s;
    }

    .price:hover {
      box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2)
    }

    .price .header {
      background-color: #111;
      color: white;
      font-size: 25px;
    }

    .price li {
      border-bottom: 1px solid #eee;
      padding: 20px;
      text-align: center;
    }

    .price .grey {
      background-color: #eee;
      font-size: 20px;
    }

    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 25px;
      text-align: center;
      text-decoration: none;
      font-size: 18px;
    }

    @media only screen and (max-width: 600px) {
      .columns {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <p style="text-align:center">Select your installment</p>

  <div class="content">
    <div class="columns">
      <ul class="price">
        <li class="header" style="background-color:#4CAF50">Pro</li>
        <li class="grey"> 30000 &#8377; / year</li>
        <li>12 Months</li>
        <li>1 Installment</li>
        <li class="grey"><a href="#" class="button">Pay</a></li>
      </ul>
    </div>

    <div class="columns">
      <ul class="price">
        <li class="header">Premium</li>
        <li class="grey"> 33000 &#8377; / year</li>
        <li>6 Months</li>
        <li>2 Installments</li>
        <li class="grey"><a href="#" class="button">Pay</a></li>
      </ul>
    </div>

    <div class="columns">
      <ul class="price">
        <li class="header">Basic</li>
        <li class="grey"> 36000 &#8377; / year</li>
        <li>3 Months</li>
        <li>4 Installments</li>
        <li class="grey"><a href="#" class="button">Pay</a></li>
      </ul>
    </div>
  </div>

</body>

</html>