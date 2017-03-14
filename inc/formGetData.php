
<?php
 include 'bin/accessValidation.php';
?>

<fieldset>
    <legend>
        <?php
        if (isset($username)) {
            echo $username, " is logged in. Please select a table(s) below";
        }
        else {
            echo "Assignment";
        }
        ?>
    </legend>
    <form action="index.php" method="post" id="logon">
        <p>You may view data from the following <?php echo count($access); ?> table(s)</p>
        <select name="tables">
            <option value="none" selected>Please select</option>
            <?php
            $cnt;
            $options = count($access);

            for ($i = 0; $i < $options; $i++) {
                echo "<option value='".$access[$i]."'>".$access[$i]."</option>";
            }
            echo $options;

            ?>
        </select>

        <input type="submit" name="submit" value="Submit"/>
        <input type="button" name="cancel" value="Cancel"/><br />
        <?php
       // include 'bin/validation.php';
       // getData($handler, $table);
        ?>



    </form>

</fieldset>
