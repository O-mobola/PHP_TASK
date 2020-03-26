







<! DOCTYPE HTML>
<html lang="en">
  <head>
  <meta charset="utf-8"/>
  <title>Contact-Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.o"/>
  <style>
  body{
    background-color: orange; 
    color: white;
    /*font-size: 24px;*/
    margin: 0;
    padding: 0;
  }
  h2 {margin: 5px;}
  label {
    display: inline-block;
    padding-bottom: 5px;}
    input {
      padding: 5px;
      margin-bottom: 15px;
      outline: none;
      border: none;
      border-bottom: solid blue 3px;
    }
    button {
      font-weight: bold;
      margin-top: 5px;
      padding: 5px 15px;
      background-color: blue;
      color: white;
      outline: none;
      border: none;
    }
    p{text-align: center;}
  </style>
  </head>
  <body>
    <main>
      <h2>Contact Us:</h2>
      <div style="margin: 0 20px;">
        <form style="background-color:black; color:white; padding:25px; width: 75%;" action="process.php" method="POST">
          <label for="fullname">Fullname:</label><br/>
          <input type="text" name="fullname" id="fullname" required/><br/>
          <label for="username">Username:</label><br/>
          <input type="text" name="username" id="username" required/><br/>
          <label for="email">Email:</label><br/>
          <input type="email" name="email" id="email" placeholder="example@gmail.com" required/><br/>
          <label for="message">Message:</label><br/>
          <textarea name="message" cols="25" rows="5" placeholder="type your message here" required></textarea><br/>
          <label for="policy"></label><br/>
          <input type="checkbox" name="policy" id="policy" required/>Do you accept our privacy policy?<br/>
         <!-- <center>-->
           <button type="submit" name="submit">submit</button>
         <!--</center>-->
        </form>
      </div>
    </main>
    <footer>
      <pre><p>All right reserved &copy;codeIn 2020.</p></pre>
    </footer>
  </body>
</html>
