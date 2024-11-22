<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Externo -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <title>Contador</title>
</head>
<body>
    <header>
        <?php if (isset($_SESSION['login'])) {
            echo '
            <nav>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>

            <!-- Ícone da casa -->
            <img src="img/houseIcon.png" alt="Ícone de Casa" class="house-icon" onclick="toggleMenu()">

            <!-- Caixa de menu -->
            <div class="menu" id="menu">
                <h5>BookRoom <span class="text-muted">Empresa</span></h5>
                <a href="?pagina=cadastros">Reservas</a>
                <a href="?pagina=novoCadastro">Reservar Sala</a>
                <a href="logout.php">Sair</a>
            </div>
            ';
        } ?>
    </header>

    <script>
        // Função para alternar a exibição do menu
        function toggleMenu() {
            const menu = document.getElementById('menu');
            menu.style.display = menu.style.display === 'none' || menu.style.display === '' ? 'block' : 'none';
        }
    </script>
</body>
</html>
