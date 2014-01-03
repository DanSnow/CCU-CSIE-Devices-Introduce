<div>
  <table>
<?php
echo "<tr>";
for($i=0;$i<5;$i++){
  echo "<td><a href='img/image-2.jpg' data-lightbox='roadtrip'><img src='image/capture/401/401-0$i-s.jpg'></a></td>";
  if(($i+1) % 3 == 0) echo "</tr>\n<tr>";
}
echo "</tr>";
?>
  </table>
</div>
