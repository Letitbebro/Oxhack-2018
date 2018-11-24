<?php
   include_once("header.php");
?>
<br>
<form method="post" action="" enctype="text/plain">

Check the answer to each multiple-coice question, and click on the "Send Form" button to submit the information.

<P>1. Which one of the following is most likely to lead to greater labour productivity in an industry?<BR>
<input type="radio" name="option" value="#">a. An increase in market demand<BR>
<input type="radio" name="option" value="#">b. A fall in wages in the industry<BR>
<input type="radio" name="option" value="#">c. An increase in the number of firms in the industry<BR>
<input type="radio" name="option" value="#">d. An increase in capital investment in the industry<BR>
</p>
<br>
<input type="submit" value="Send Form">
<input type="reset" value="Clear Form">
<button>
<a href ="qpage2.php">
Next question
</a>
</button>
</form>
</body>
<script type="text/javascript">
function checkAnswer() {
  var a= document.getElementByName("option");
  for (var i = 0, i < a.length; i++) {
    if (a[i].value == "d. An increase in capital investment in the industry")
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
