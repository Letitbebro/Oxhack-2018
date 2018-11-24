<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>1. Question bla bla<BR>
<input type="radio" name="#" value="#">op1<BR>
<input type="radio" name="#" value="#">op2<BR>
<input type="radio" name="#" value="#">op3<BR>
<input type="radio" name="#" value="#">op4<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage3.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "op1")
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
