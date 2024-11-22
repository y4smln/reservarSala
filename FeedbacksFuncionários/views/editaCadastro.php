<?php

include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastros)) {
    if ($linha['id'] == $_POST['id']) {
?>

<br>
<div class="caixa">
    <h4>Cadastro</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <form method="post" action="processaEditaCadastro.php" autocomplete="off">
        <input value="<?php echo $linha['id'] ?>" type="text" class="form-control" id="id" name="id" style="display:none;">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Nome</label>
            <input value="<?php echo $linha['nome'] ?>" type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Sala</label>
            <textarea value="<?php echo $linha['sala'] ?>" type="text" class="form-control" id="sala" name="sala"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Data</label>
            <input value="<?php echo $linha['data'] ?>" type="date" class="form-control" id="date" name="date" required>
        </div>

        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Horário</label>
            <input value="<?php echo $linha['hora'] ?>" type="time" class="form-control" id="hora" name="hora" required>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>   

</div>
<br><br>

<?php
    }
}