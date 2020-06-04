<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>PHP</title>
</head>
<body>
    <?php 
        $result = file_get_contents("http://node-container:9001/produtos");
        $produtos = json_decode($result);
    ?>

<table class="table">
    <thead>
      <tr>
        <th>Codigo</th>
        <th>Nome</th>
      </tr>
    </thead>
    <tbody>
      <?php
       foreach($produtos as $linha){?>
         <tr>
          <td><?php echo $linha->cod_produto; ?></td>
          <td><?php echo $linha->nome_produto; ?></td>
         </tr>
       <?php }
      ?>
    </tbody>
  </table>
    
</body>
</html>