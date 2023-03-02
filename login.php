<?php
if ($_POST['username']=='mohammed' and $_POST['password']=='00998877a@')
{
    header('location:index.html');
}
else
{
    header('location:error.html');
}
?>