<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h1>Submitted Form Data using the POST method</h1>
     <h2>Your input was received as:</h2>
     <hr>
     <div style="word-wrap:break-word; color:red; ">
    <p>fname=<?php echo $fname;?> lname=<?php echo $lname;?></p></div>
     <p>The server has processed your input and returned this answer.</p>
     <div style="width:50%; background-color:green; border:1px solid black;">
     <p><strong>Note:</strong> Processing input is explained in our <a href="https://www.w3schools.com/tags/ref_httpmethods.asp" target="_blank">PHP tutorial</a>.</p>
     <p>Also, the data sent to the server with POST is stored in the request body of the HTTP request.</p>
     <p>for more on http requests please visit <a href="https://www.w3schools.com/tags/ref_httpmethods.asp" target="_blank">this link</a>.</p>
     </div>
  <div style="">
    <ul style="">
      <li>POST requests are never cached</li>
 <li> POST requests do not remain in the browser history</li>
 <li>Appends form-data inside the body of the HTTP request (data is not shown is in URL)</li>
 <li> POST requests cannot be bookmarked</li>
 <li> POST requests have no restrictions on data length</li>
    </ul>
  </div>

   </body>
 </html>
