
<?php
 $beer = 99;
 while($beer >= 0)  {
   if($beer-1 === 0){
       echo($beer.' bottles of beer on the wall, '.$beer.' bottles of beer,<br/>');
       echo('Take one down and pass it around, no more bottles of beer on the wall.<br/>');
   }
   else if($beer-1 < 0){
       echo('No more bottles of beer on the wall, no more bottles of beer,<br/>');
       echo 'Go to the store and buy some more, 99 bottles of beer on the wall.';
   }
   else{
       echo($beer.' bottles of beer on the wall, '.$beer.' bottles of beer,<br/>');
       echo('Take one down and pass it around, '.(($beer - 1 == 0 )).' bottles of beer on the wall.<br/>');
   }
   echo('<br/>');
   $beer--;
 } 
} 
        ?>
