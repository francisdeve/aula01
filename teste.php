<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<h1>Meu primeiro sistema</h1>
<?php

if($_POST){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $idade = $_POST["idade"];
    $salario = $_POST["salario"];

    if($idade>18){
        echo $nome." é maior de idade<br>";
    }else{
        echo $nome." não é é maior de idade<br>";
    }
    if($salario>1400){
        echo $nome." é maior do que o salário mínimo<br>";
    }else{
        echo $nome." é menor que o salário mínimo";
    }
}
?>
<br>
<form method="post" action="teste.php">
    Qual é seu nome?<input type="text" name="nome" placeholder="qual é seu nome?"><br><br>
    Qual é seu email?<input type="email" name="email" placeholder="qual é seu nome?"><br><br>
    Qual é sua idade?<input type="number" name="idade" placeholder="qual é sua idade?"><br><br>
    Qual é o seu salário?<input type="number" name="salario" placeholder="qual é o seu salario?">
    <input type="submit" value="ENVIAR">
</form>


<form>
  <div class="mb-3">
    <label class="form-label">Qual é seu nome?</label>
    <input type="email" class="form-control" placeholder="qual é seu nome?">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>