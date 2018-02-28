<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <?php
        include 'functions.php';
        switch ($_POST['op']) {
          case 'create':
            create($_POST['id'],$_POST['author'], $_POST['content'], $_POST['date'], $_POST['title']);
            break;
          case 'update':
            update($_POST['id'], $_POST['title']);
            break;
          case 'delete':
            remove($_POST['id']);
            break;
          case 'search':
            // echo getType($_POST['notice']);
            show($_POST['id']);
            break;
          default:
            echo "<p>Nenhuma operação realizada ainda!</p>";
            break;
        }
       ?>
       <hr>
    </div>
  </body>
</html>