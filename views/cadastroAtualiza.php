<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>

    <div class="container border rounded mt-5 bg-white">

    <?php
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao,"SELECT * FROM aluno WHERE codigo = $varIda");
    while($exibe = mysqli_fetch_array($query)){
    ?>

    <form action="../controllers/atualizarAluno.php" method="post">
     <div class="row mt-3">
        <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
        <div class="col">
        <label class="form-label">Nome</label>
        <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>
        </div>
        <div class="col">
        <label class="form-label" >Cidade</label>
        <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>
        </div>
    </div>
        <input class="form-check-input" type="radio" value="m" name="alunoSexo" <?php echo ($exibe[3]=="m")?"checked":""?>>
        <label class = "radio-inline">Masculino</label><br>
        <input class="form-check-input" type="radio" value="f" name="alunoSexo" <?php echo ($exibe[3]=="f")?"checked":""?>>
        <label class="radio-inline">Feminino</label><br>
        <input class="mt-2 mb-3 btn btn-outline-secondary" type="submit" value="Atualizar">
       
    </form>
    
    </div>

    <?php } ?>

<?php include("blades/footer.php") ?>