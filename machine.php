<div class="container">
    <table class="table table-bordered text-center">
        <thead>
        <tr >
            <th scope="col">#</th>
            <th scope="col">Công đoạn</th>
            <th scope="col" >Trạng thái</th>
            <th scope="col">Lần cập nhật cuối</th>
        </tr>
        </thead>
        <tbody>

<?php

  //DB info
  $servername = "localhost";
  $username = "root";
  $password = "Auth@8495678";
  $dbname = "iot_eqm";

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  //Nếu khác null mới insert Error
  $sql = "SELECT * FROM Logs";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $stt="";
        if($row["Value"]!="0")
            $stt='<button type="button" class="btn btn-danger">HAVE NG</button>';
        else
            $stt='<button type="button" class="btn btn-primary">OK NOW</button>';

        echo sprintf("<tr><th scope='row'>%s</th><td>%s</td><td class=\"text-center\">%s</td><td>%s</td></tr>",$row["Id"],$row["Name"],$stt,$row["LastUpdate"]);
    }
  } else {
    echo "0 results";
  }
  $conn->close();

  ?>


        </tbody>
    </table>
