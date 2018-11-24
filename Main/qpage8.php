<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>8. Which one of the following types of unemployment is best defined as 'unemployment for short lengths of time between jobs'?<BR>
<input type="radio" name="#" value="#">A. Frictional<BR>
<input type="radio" name="#" value="#">B. Seasonal<BR>
<input type="radio" name="#" value="#">C. Cyclical<BR>
<input type="radio" name="#" value="#">D. Structural<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage9.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "A. Frictional")
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
