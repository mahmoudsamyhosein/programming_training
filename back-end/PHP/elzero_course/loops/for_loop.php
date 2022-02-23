<?php
// الحلقات


for($i=1; $i<=100; $i++){
     echo $i . "<br>";
}
?>
<select name="days">
<?php
for( $day=31; $day>=1; $day++){

    echo "<option value='$day'>" . $day . "</option>";


}
?>
</select>