<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">

<?php

require_once('connect.php');

$conn = connect();


function EchoBoy ($row , $id) {

   echo
   "<div id = 'game$id'>",
   "<h2>",$row["anvnamn"],"</h2>",
   "<p>",$row["text"],"</p>",
   '</div>';

 }



$sql = "SELECT konton.anvnamn, posts.text  FROM konton,posts AND post.id=konton.id";
$result = $conn->query($sql);
?>
<aside>
        <?php

          $tmp = 0;

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  $tmp++;
                  EchoBoy($row, $tmp);
              }
          } else {
              echo "0 results";
          }
         ?>

      </aside>
  <body>

    <form id="top" action="submit.php" method="post">
    <textarea type="text" name="inlägg"></textarea>
    <br>
    <button type="submit" name="submit">Uppdatera</button>
    </form>


  </body>
      <?php
$conn->close();
?>
  </body>
</html>
