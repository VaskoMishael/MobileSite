<?php
    include 'header.php';
    include 'common.php';
    

?>  
    <h1 style="display: flex; justify-content: center;"> <?php echo($lang['title']);?></h1>

    <div class="contact">

        <div style="flex-grow: 6">
            <h2><?php echo $lang['header2'];?></h2>
            <form name="input" action="html_form_action.asp" method="get">
                <label for="email"> <?php echo $lang['email'];?></label>
            <br>
                <input style="border-radius: 20px;" type="text" name="email"> 
                <br>
                <label for="text"><?php echo $lang['message'];?></label>
                <br>
                <input style="border-radius: 20px;" type="text" name="email">
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <div style="flex-grow: 2">
            <h2><?php echo $lang['CEO'];?></h2>
            <p>
                <b><?php echo $lang['telephone'];?></b> <br>
                +421-951-741-049 (Sk) <br>
                +380-95-256-70-18 (UA) <br>
                <b> <?php echo $lang['email'];?></b> <br>
                xvaskom@stuba.sk <br>
                <b><?php echo $lang['adress'];?></b> <br>
                <?php echo $lang['Bratislava'];?>
            </p>

        </div>
        <div style="flex-grow: 2">
            <h2><?php echo $lang['support'];?></h2>
            <p>
                <b> <?php echo $lang['telephone'];?></b> <br>
                +421-951-741-055 (Sk) <br>
                +380-95-100-55-44 (UA) <br>
                <b><?php echo $lang['social'];?></b> <br>
                Instagram: @lgmobileglobal <br>
                Facebook: @LG Mobile <br>
                Twitter: @LgMobileGlobal <br>
            </p>
        </div>
    </div>

</body>