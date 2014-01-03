<div>
  <table>
<?php
echo "<tr>";
for($i=0;$i<5;$i++){
  echo "<td><a href='image/401/401-0$i.JPG' data-lightbox='roadtrip'><img src='image/capture/401/401-0$i-s.jpg'></a></td>";
  if(($i+1) % 3 == 0) echo "</tr>\n<tr>";
}
echo "</tr>";
?>
  </table>
</div>
