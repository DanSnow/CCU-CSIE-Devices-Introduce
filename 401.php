<div>
  <table>
<?php
echo "<tr>";
for($i=0;$i<5;$i++){
  echo "<td><img src='image/capture/401/401-0$i-s.jpg' onclick=''></td>";
  if($i % 3 == 0) echo "</tr>\n<tr>";
}
echo "</tr>";
>
  </table>
</div>