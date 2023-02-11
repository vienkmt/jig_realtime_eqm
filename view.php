<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LINE 4</title>
    <link href="src/css/bootstrap.min.css" rel="stylesheet">
    <script src="src/jquery.js"></script>
    <script type="text/javascript">
      function getMachine() {
          $.ajax({
              url: 'machine.php',
              type: 'GET',
              success: function(data) {
                  $('#ketqua').html(data);
              },
              complete:function(data) {
                  setTimeout(getMachine, 500);
              }
          });
      }
      $(document).ready(function() {
          setTimeout(getMachine, 500);
      });
    </script>

  </head>
  <body>

  <br>
    <div id="ketqua">
      
    </div>
  </div>
</div>


    <script src="src/js/bootstrap.bundle.min.js"></script>
  </body>
</html>