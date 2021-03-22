<?php

header("Content-Type:image/png"); //IMPORTANT: Setting content type of data to browser. if not set then
//browser will display bizzare text.

$image = imagecreate(300,400);//create image.

$image_background_color = imagecolorallocate($image,71, 37, 184); //allocate color to image.

$font_color = imagecolorallocate($image,125,213,123);

//echo "<img src=".$image.">";//Doesnt work. dont write in exam :)

imagestring($image,10,20,50,"Wilfred Almeida",$font_color); //Set string on image

imagepng($image); //Save image in file on disk. name can be path also like D://i1.png.

imagedestroy($image);//destroy created image. does not delete image saved on disk

?>