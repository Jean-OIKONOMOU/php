<?php
$fname = $_GET['fname'];
$lname = $_GET['lname'];
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
     <p>Also, GET is used to request data from a specified resource.</p>
     <p>for more on http requests please visit <a href="https://www.w3schools.com/tags/ref_httpmethods.asp" target="_blank">this link</a>.</p>
     </div>
  <div style="">
    <h4>Some other notes on GET requests:</h4>
    <ul style="">
      <li>GET requests can be cached.</li>
      <li>Appends form-data into the URL in name/value pairs</li>
      <li>The length of a URL is limited (about 3000 characters)</li>
 <li>GET requests remain in the browser history.</li>
 <li>GET requests can be bookmarked.</li>
 <li>GET requests should never be used when dealing with sensitive data.</li>
 <li>GET requests have length restrictions</li>
 <li>GET requests is only used to request data (not modify)</li>
 <li>GET is better for non-secure data, like query strings in Google</li>
    </ul>
  </div>

   </body>
 </html>
