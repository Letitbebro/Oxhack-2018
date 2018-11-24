<?php
   include_once("header.php");
?>

<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>5. Demerit goods(e.g. Alcohol, Cigarettes, etc) are a type of market failure because:<BR>
<input type="radio" name="#" value="#">A. Their consumption results in positive externalities.<BR>
<input type="radio" name="#" value="#">B. Their production results in negative production externalities.<BR>
<input type="radio" name="#" value="#">C. They are over-consumed in a free market.<BR>
<input type="radio" name="#" value="#">D. They are under-consumed when left to free market forces.<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage6.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "C. They are over-consumed in a free market.")
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
