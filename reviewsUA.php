<?php
    include 'header.php';
?>
    <div class="rewiewPage">
        <div class="userReview">
            <form name="input" action="html_form_action.asp" method="get">
                <label for="email"> Ім'я:</label>
                <input style="border-radius: 20px;" type="text" name="email">
                <br>
                <label for="email"> Email:</label>
                <input style="border-radius: 20px;" type="text" name="email">
                <br>
                <p>Ваша оцінка:</p>
                <input type="radio" id="r1" name="review" value="1">
                <label for="age1">1</label>
                <input type="radio" id="r2" name="review" value="2">
                <label for="age1">2</label>
                <input type="radio" id="r3" name="review" value="3">
                <label for="age1">3</label>
                <input type="radio" id="r4" name="review" value="4">
                <label for="age1">4</label>
                <input type="radio" id="r5" name="review" value="5">
                <label for="age1">5</label><br>
                <label for="text">Повідомлення:</label>
                <input style="border-radius: 25px;" type="text" name="email" class="textField">
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="reviews">
            <h2>Оцінки</h2>
            <p>Заальна оцінка:</p>
            <h1>4.8/5</h1>
        </div>
        <br>
        <div class="comments">
            <h5>Комментарії</h5>
        </div>
    </div>
</body>