<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
  </head>
  <body>
    <h1>How to disable downloading of the PDF document</h1>
 
    <embed src="amaze_zone.pdf" />
  </body>
</html> --><?php 
$bgs = glob( 'img/*');
$i = 1;
            foreach ($bgs as &$bg) {
                echo '  <img class="mySlides w3-animate-fading" src="' . $bg.'" style="width:100%">
                        ';
                        $link = explode('/', $bg);
                        $fullname = explode('.', $link[1]);
                        echo '<center>' .  $fullname[0].'</center>';
                        $i++;
            }
// var_dump($bgs);
?>