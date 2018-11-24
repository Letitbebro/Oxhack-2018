<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>3. Which on the following is a factor of production?<BR>
<input type="radio" name="#" value="#">A. The profits made by firms.<BR>
<input type="radio" name="#" value="#">B. Land owned or rented by firms.<BR>
<input type="radio" name="#" value="#">C. A bank loan.<BR>
<input type="radio" name="#" value="#">D. The productivity of labour.<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage4.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "B. Land owned or rented by firms")
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
