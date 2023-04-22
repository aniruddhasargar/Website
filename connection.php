<?php
$db = new mysqli('localhost','root','','paneltechnogy');
if(!$db)
{
    ?>
    <script language="javascript">
        alert("Error: Unable to connect Database");
        </script>
        <?php
}
?>