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
        
        <!-- Combobox para selecionar a Sala -->
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Sala</label>
            <select id="sala" name="sala" class="form-control" required>
                <option value="Sala 1" <?php if ($linha['sala'] == 'Sala 1') echo 'selected'; ?>>Sala 1</option>
                <option value="Sala 2" <?php if ($linha['sala'] == 'Sala 2') echo 'selected'; ?>>Sala 2</option>
                <option value="Sala 3" <?php if ($linha['sala'] == 'Sala 3') echo 'selected'; ?>>Sala 3</option>
                <option value="Sala 4" <?php if ($linha['sala'] == 'Sala 4') echo 'selected'; ?>>Sala 4</option>
                <option value="Sala 5" <?php if ($linha['sala'] == 'Sala 5') echo 'selected'; ?>>Sala 5</option>
                <option value="Sala 6" <?php if ($linha['sala'] == 'Sala 6') echo 'selected'; ?>>Sala 6</option>
                <option value="Sala 7" <?php if ($linha['sala'] == 'Sala 7') echo 'selected'; ?>>Sala 7</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Data</label>
            <input value="<?php echo $linha['data'] ?>" type="date" class="form-control" id="data" name="data" required>
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
