<?php
$qid=$_REQUEST['qid'];
//echo $qid;
?>
<form action="anscode.php" method="post">
<input type="hidden" name="qid" value="<?php echo $qid ?>"/>
POST ANSWER
<textarea name="ans"></textarea>
</br>
<input type="submit" value="send"/>
</form>