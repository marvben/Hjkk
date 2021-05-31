
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    print_r($_POST["Yes"]);
    print_r($_POST["No"]);
    print_r($_POST["birthday"]);
};

$today = date('Y-m-j'); 
echo $today;


?>

<form action="form.php" method="post">
    <input type="text" name="" id="" required title="Please enter your name">
    <label ><input name="Yes" value="Positive answer" type="checkbox" name="" id="">Agreed</label><br>
    <label ><input name="No" value="Negative answer" type="checkbox" name="" id="">Not agreed</label><br>
    <label ><input name="color" type="radio" name="" id="">Red</label><br>
    <label ><input name="color" type="radio" name="" id="">Yellow</label><br>
    <label ><input name="color" type="radio" name="" id="">Green</label><br>
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday"   value="<?= $today ?>"   min="2021-04-01" max="2021-05-30" ><br><br>
    <button type="submit" >Submit</button>
</form>

