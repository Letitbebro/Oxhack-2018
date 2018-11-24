<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>10. Which of the following is an aim of UK government macroeconomic policy?<BR>
<input type="radio" name="#" value="#">A. A fall in the supply of money.<BR>
<input type="radio" name="#" value="#">B. A stable labour force.<BR>
<input type="radio" name="#" value="#">C. An increase in real GDP per head.<BR>
<input type="radio" name="#" value="#">D. Low interest rates.<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="finish.php">
Finish!
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "C. An increase in real GDP per head")
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
