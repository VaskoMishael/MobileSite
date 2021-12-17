<?php
    include 'header.php';
?>
    <h3 style="display:flex; justify-content: center;">Here are some photos made on LG V30:</h3>
    <div class="row"> 
        <!-- <img src ="/img/media/column1/20201115_151509-01~2.jpeg">
        <img src="img\media\20201115_151509-01~2.jpeg" style="width:100%"> -->

    <?php
    for($i = 1; $i <5; $i++){
       $handle = opendir(dirname(realpath(__FILE__)).'/img/media/column'.$i);
       echo '<div class="column">';
       while($file = readdir($handle)){
         if($file !== '.' && $file !== '..'){
           echo '<img src="img/media/column'.$i.'/'.$file.'"/>';
         }
       }
        echo '</div>';
    }
    ?>
      </div>
</body>