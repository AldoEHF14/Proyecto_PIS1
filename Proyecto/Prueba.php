<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Document</title>
  </head>
  <body>
    <textarea id="textArea">We are learning to copy text to clipboard in JavaScript.</textarea>
    <button onclick="copyToClipBoard()">Copy</button>

  </body>
</html>

<script>
    function copyToClipBoard() {

var content = document.getElementById('textArea');

content.select();
document.execCommand('copy');

alert("Copied!");
}
</script>