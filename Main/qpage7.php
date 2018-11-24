<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>7. Deflation is:<BR>
<input type="radio" name="#" value="#">A. A fall in the external value of the domestic currency.<BR>
<input type="radio" name="#" value="#">B. A fall in the rate of inflation.<BR>
<input type="radio" name="#" value="#">C. A loss in value of capital stock due to physical wear and tear.<BR>
<input type="radio" name="#" value="#">D. A rise in the real value of money over time.<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage8.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "D. A rise in the real value of money over time.")
    alert("You have selected the correct answer");
    //push(1).array
     
    else {
      alert("You have selected the wrong answer");
      break;
       
    }
  }
}
   
</script>

<?php
   include_once('footer.php');
?>
