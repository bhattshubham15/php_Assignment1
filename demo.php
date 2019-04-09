<form method="post" action="" class="form">
<p>First Value:<br/>
<input type="text" id="fir" name="first"></p>
<p>Second Value:<br/>
<input type="text" id="sec" name="second"></p>
<input type="radio" name="group1"  value="add">+
<input type="radio" name="group1"  value="subtract">-
<input type="radio" name="group1"  value="times">*
<input type="radio" name="group1"  value="divide">/
<p></p>
<input type="submit" name="submit" value="=">
</form>
<?php
$first = $_POST['first'];
$second= $_POST['second'];
echo "First number is $first"."<br>"; 
echo "Second number is $second"."<br>";
echo "<br>";
echo "The Result is";
if($_POST['group1'] == add) {
$addition = $first + $second;
echo "$addition";
}
else if($_POST['group1'] == subtract) {
$substract = $first - $second;
echo "$substract";
}
else if($_POST['group1'] == times) {
$multiply = $first * $second;
echo "$multiply";
}
else{
$divide = $first / $second;
echo "$divide";
}
?>
