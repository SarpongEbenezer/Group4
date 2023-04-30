<?php
session_start(); // start session to access user data

if (!isset($_SESSION['user'])) { // check if user data is not set
  header('Location: authentication.php'); // redirect to login page
  exit;
}

// continue with the rest of your code for the authenticated pages
?>



<!DOCTYPE html>
<html>

<head>
  <title>Refund and Buy Ticket Page</title>
  <style>
    * {
      font-family: sans-serif;
    }

    /* Center the content */
    body {
      text-align: center;
      background-image: url('./ree.jpg');
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      font-size: larger;

    }

    /* Style the headings */
    h1,
    h2 {
      font-family: Arial, sans-serif;
      color: #007bff;
    }

    /* Style the buttons */
    .btn {
      display: inline-block;
      background-color: #5b13b9;
      color: #fff;
      padding: 10px 20px;
      width: 50%;
      border: none;
      border-radius: 5px;
      text-decoration: none;
      margin: 10px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.2s ease-in-out;
    }

    .btn:hover {
      background-color: #0062cc;
    }

    /* Style the container */
    .container {
      max-width: 500px;
      margin: 0 auto;
      padding: 10px;
      background-color: #ffffff;
      width: 40%;
      position: relative;
    }

    /* Style the ticket reservation section */
    .ticket-reservation {
      margin: 50px 0;
    }

    /* Style the cancel trip section */
    .cancel-trip {
      margin-bottom: 20px;
      margin-top: -2rem;
    }

    #not {
      background: transparent;
      color: #5b13b9;
      font-size: medium;
    }

    h1 {
      background-color: #5b13b9;
      padding: 1rem;
      width: 94%;
      text-align: center;
      color: white;
      margin-bottom: -2.5rem;
      margin-top: -1.5rem;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>KYLE TRAVELS AND TOURS</h1>

    <div class="ticket-reservation">
      <h2>Ticket Reservation</h2>
      <p>To buy a ticket, please click on the button below:</p>
      <a href="index.php" aria-required="true" class="btn">Purchase</a>
    </div>
    <hr>
    <br>
    <br>

    <div class="cancel-trip">
      <h2>Cancel Trip</h2>

      <p>If you would like to cancel this trip, click the button to fill the form:</p>
      <a href="post.html" aria-required="true" class="btn">Refund</a>
    </div>
    <p id="not">
      Note that, a week to a trip cannot be cancelled, thus no refund...
    </p>
  </div>
</body>

</html>