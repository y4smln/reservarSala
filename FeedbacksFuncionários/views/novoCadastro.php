<br>
<div class="caixa">
    <h4>Cadastrar</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br> 
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <form method="post" action="insereCadastro.php" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Nome Reservante</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
        <label for="exampleInputText1" class="form-label">Selecione:</label>
            <select id=sala class="form-control">
            <option>Salas</option>
            <option>Sala 1</option>
            <option>Sala 2</option>
            <option>Sala 3</option>
            <option>Sala 4</option>
            <option>Sala 5</option>
            <option>Sala 6</option>
            <option>Sala 7</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Data</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Horário</label>
            <input type="time" class="form-control" id="hora" name="hora"></input>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>   

</div>
<br><br>