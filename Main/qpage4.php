<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>4. The fundamental economic problem facing all societies is:<BR>
<input type="radio" name="#" value="#">A. What, how and for whom, goods and services should be produced?<BR>
<input type="radio" name="#" value="#">B. The existence of unemployed resources.<BR>
<input type="radio" name="#" value="#">C. A significant divergence between social and private costs of production and consumption.<BR>
<input type="radio" name="#" value="#">D. Inequalities in the distribution of income wealth.<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage5.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "A. What, how and for whom, goods and services should be produced?")
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
