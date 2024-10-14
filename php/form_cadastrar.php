<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h3> Cadastrar </h3>
        
<form name="dados" action="../php/exec/exec_cadastrar.php" method="POST" enctype="multipart/form-data">
  <label> Celular: </label>  
  <input type="text" name="cel" /> <br /> <br />
  <input type="submit" name="btn" value="Cadastrar" />
</form>

<?php
  if (isset ($_GET['retorno']))
  {
    $msg = $_GET['retorno'];
    echo "<br />";
    echo $msg;
    $msg="";
  }
?>
<h3><a href="principal.php">[Voltar ao Início]</a></h3> 
</body>
</html>
