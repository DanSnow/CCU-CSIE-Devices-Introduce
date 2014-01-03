<div align="center">
  <table>
<?php
echo "<tr>\n";
for($i=0;$i<5;$i++){
  echo "<td><a href='image/401/401-0$i.JPG' data-lightbox='roadtrip'><img src='image/capture/401/401-0$i-s.jpg'></a></td>\n";
  if(($i+1)%2 == 0) echo "</tr>\n<tr>\n";
}
echo "</tr>\n";
?>
  </table>
</div>
