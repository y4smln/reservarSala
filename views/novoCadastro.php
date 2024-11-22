<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container-form">
        <h4 class="title">Reservar</h4>
        <a type="button" class="btn-back" href="?pagina=cadastros">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>

        <form method="post" action="insereCadastro.php" autocomplete="off" class="form-box">
            <div class="form-group">
                <label for="nome">Nome Reservante</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite seu nome">
            </div>

            <div class="form-group">
                <label for="sala">Selecione a Sala</label>
                <select id="sala" name="sala" required>
                    <option value="">Selecione uma sala</option>
                    <option value="Sala 1">Sala 1</option>
                    <option value="Sala 2">Sala 2</option>
                    <option value="Sala 3">Sala 3</option>
                    <option value="Sala 4">Sala 4</option>
                    <option value="Sala 5">Sala 5</option>
                    <option value="Sala 6">Sala 6</option>
                    <option value="Sala 7">Sala 7</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" id="data" name="data" required>
            </div>

            <div class="form-group">
                <label for="hora">Horário</label>
                <input type="time" id="hora" name="hora" required>
            </div>

            <button type="submit" class="btn-submit">Reservar</button>
        </form>
    </div>
</body>
</html>
