<?php
    include 'header.php';
    include 'dba.inc.php';
    date_default_timezone_set('Europe/Bratislava');
    include 'comments.inc.php';
?>
    <div class="rewiewPage">
        <div class="userReview">
            <?php
                echo  "<form method='POST' action='".setComments($conn)."'>
                <input type='text' name='uid' value='Anonymous' > <br>
                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                <textarea rows='4' cols='50' name='message'></textarea><br>
                <button class='btn-main' type='submit' name='commentSubmit'>Submit</button>
                </form>";
            ?>
        </div>
        <div class="reviews">
            <h2>Reviews</h2>
            <p>Overall rate:</p>
            <h1>4.8/5</h1>
        </div>
        <br>
        <div class="comments">
            <h5>Comment section</h5>
            <?php
                getComments($conn);
            ?>
        </div>
    </div>
</body>
</html>