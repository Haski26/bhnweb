<?php 
echo "<center>";
echo "<font size = '8pt' color = 'yellow'>";

for ($a=1;$a<=7;$a++){
    for ($b=1;$b<=$a;$b++){
        echo " * ";
    }
    echo " <br> ";
}
echo "<font size = '8pt' color = 'pink'>";
for ($a=4;$a>=2;$a--){
    for ($b=1;$b<=$a;$b++){
        echo " * ";
    }
    echo " <br> ";
}