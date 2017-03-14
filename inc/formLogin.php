<?php include 'bin/accessValidation.php'; ?>
<fieldset>
    <legend>Assignment</legend>
    <p>Sign into sql with username, (case-sensitive)</p>
    <form action="index.php" method="post" id="logon">
        <label for="name">Name:</label>
        <input type="text" name="name"/><br/>
        <label for="password">Password:</label>
        <input type="password" name="password"/><br/>
        <input type="submit" name="submit" value="Submit"/>
        <input type="button" name="cancel" value="Cancel"/>


    </form>

</fieldset>



