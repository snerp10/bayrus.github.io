<?php
// No dynamic PHP needed—close PHP tag to output HTML directly.
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Secret Confession</title>
  <style>
    body {
      background-color: #1e1e1e;
      color: #e0e0e0;
      font-family: 'Courier New', Courier, monospace;
      font-size: 1.5em;
      text-align: center;
      padding-top: 20%;
    }
    #display {
      border-right: 2px solid #e0e0e0;
      white-space: nowrap;
      overflow: hidden;
      margin: 0 auto;
      width: 0;
    }
  </style>
</head>
<body>
  <div id="display"></div>
  <script>
    // The secret message
    var message = 'Gusto kita dati pa';
    var i = 0;
    var displayDiv = document.getElementById('display');
    
    // Function to simulate the typewriter effect
    function typeWriter() {
      if (i < message.length) {
        displayDiv.innerHTML += message.charAt(i);
        i++;
        // Increase the width gradually to simulate typing
        displayDiv.style.width = (i) + 'ch';
        setTimeout(typeWriter, 150);
      } else {
        // After typing is done, pop up the alert after a short delay
        setTimeout(function(){
          alert(message);
        }, 500);
      }
    }
    
    typeWriter();
  </script>
</body>
</html>
