<!DOCTYPE html>
<html>
  <head>
    <title>Sell Your Ticket</title>
    <style>
      *{
        font-family: sans-serif;
      }
      body{
        background-image:url('./air.jpg');
        background-repeat: no-repeat;
        position: relative;
        background-size: cover;
      }
      
       html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
      form {
        margin: 30px auto;
        width: 50%;
        border: 1px solid #35cfdd;
        padding: 40px;
        border-radius: 10px;
        color: rgb(218, 107, 107);
        
       
      }

      label {
        color: rgb(255, 255, 255);
        display: block;
        margin-bottom: 10px;
        background-color: #5b13b9;
        font-weight: bolder;
      }

      input[type="text"],
      input[type="email"],
      input[type="number"] {
        display: block;
        width: 100%;
        padding: 15px;
        border: 1px solid #4ec2b6;
        border-radius: 5px;
        margin-bottom: 20px;
      }
select{
  display: block;
        width: 104.8%;
        padding: 10px;
        border: 1px solid #4cb9cf;
        border-radius: 5px;
        height: 50px;
        margin-bottom: 20px;
}
      textarea {
        display: block;
        width: 100%;
        padding: 10px;
        border: 1px solid #4cb9cf;
        border-radius: 5px;
        height: 100px;
        margin-bottom: 20px;
      }

      input[type="submit"] {
        /* background-color: #29a697; */
        color: rgb(25, 23, 23);
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #ffffff;
      }

      h1{
        color: #5b13b9;
        font-size: 3rem;
        text-align: center;
        margin-bottom: -2rem;
      }
      #not{
        background: transparent;
        color: #5b13b9;
      }
      form{
        background-color: #5b13b9;
      }
      #btn{
        background-color: steelblue;
        color: rgb(255, 255, 255);
      }
      #btn:hover{
        background-color: rgb(33, 88, 133);
        color: white;
        
      }
    </style>
  </head>
  <body>
    <p class = "element"></p>
    <h1>CANCEL TRIP</h1>
    <form action="#" method="POST" onsubmit="showConfirmation()">
      <label for="event-name">Event Name:</label>
      <input type="text" id="event-name" name="event-name" placeholder="Enter the name of the event" required>

      <label class="text-white travel"> Travel class</label>
                    <select class="text-white " style="color: black;"><br>
                        <option>First class/1A - GHs20000</option>
                        <option>AC 2tier/2A - GHs15000</option>
                        <option>AC 3tier/1A - GHs13000</option>
                        <option>First Class/1A - Ghs10000</option>
                        <option>Executive class chair car/Economy class - GHs23000</option>
                        <option>AC chair car - GHs25000</option>
                        <option>Sleeper class - GHs18000</option>
                        <option>General - GHs8000</option>
                    </select>
      <label for="ticket-description">Why do you want to cancel this trip?</label>
      <textarea id="ticket-description" name="ticket-description" placeholder="Enter a description of the ticket" required></textarea>

      <label for="seller-name">Your Name:</label>
      <input type="text" id="seller-name" name="seller-name" placeholder="Enter your name" required>

      <label for="seller-email">Your Email:</label>
      <input type="email" id="seller-email" name="seller-email" placeholder="Enter your email address" required>

      <input type="submit" value="Submit" id="btn">

      <p id="not">
        Note that, a week to a trip cannot be cancelled, thus no refund...
      </p>
    </form>

    <script>
      function showConfirmation() {
        alert("Your ticket has been uploaded successfully!");
      }
    </script>
  </body>
</html>