<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>9. Which of the following is most likely to reduce inflationary pressures in the UK economy?<BR>
<input type="radio" name="#" value="#">A. An increase in labour productivity.<BR>
<input type="radio" name="#" value="#">B. A fall in the value of the pound.<BR>
<input type="radio" name="#" value="#">C. The emergence of a positive output gap.<BR>
<input type="radio" name="#" value="#">D. A reduction in the rate of interest paid on mortgages.<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage10.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "A. An increase in labour productivity.")
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
