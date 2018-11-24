<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>6. Which of the following is a correct statement?(Fiscal policy refers to policies affecting government spending and taxation)<BR>
<input type="radio" name="#" value="#">A. Fiscal policy can be used to affect both the level of economic activity and the pattern of economic activity<BR>
<input type="radio" name="#" value="#">B. The Bank of England handles fiscal policy.<BR>
<input type="radio" name="#" value="#">C. Fiscal policy is used only to affect the demand side of the economy<BR>
<input type="radio" name="#" value="#">D. The government uses fiscal policy to control the exchange rate.<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage7.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "A. Fiscal policy can be used to affect both the level of economic activity and the pattern of economic activity")
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
