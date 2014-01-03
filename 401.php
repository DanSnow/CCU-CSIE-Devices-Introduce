<div align="center">
  <table>
<?php
$fh = fopen("about401.txt", "r");
while($about[] = fgets($fh));
echo "<tr>\n";
for($i=0;$i<5;$i++){
  echo "<td align='center'><a href='image/401/401-0$i.JPG' data-lightbox='roadtrip' title='$about[$i]'><img src='image/capture/401/401-0$i-s.jpg'></a></td>\n";
  if(($i+1)%3 == 0) echo "</tr>\n<tr>\n";
}
echo "</tr>\n";
?>
  </table>
</div>
