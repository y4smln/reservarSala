<br>
 
<div class="caixa">
    <h4>Reservas de Salas</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=novoCadastro"><i class="bi bi-plus"></i> Cadastrar</a>
    <br><br><br>
    <div>
        <table id="table_id" class="cell-border">
            <thead>
                <tr>
                    <th>Nome do Reservante</th>
                    <th>Sala</th>
                    <th>Data</th>
                    <th>Horário</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    echo '<tr><td style="word-wrap: break-word">' . $linha['nome'] . '</td>';
                    echo '<td style="word-wrap: break-word">' . $linha['sala'] . '</td>';
                    echo '<td style="word-wrap: break-word">' . $linha['data'] . '</td>';
                    echo '<td style="word-wrap: break-word">' . $linha['hora'] . '</td>';
                    echo '<td> 

                    <div class="row">

                        <div class="col-6">
                            <form method="post" action="?pagina=editaCadastro">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                        </div>

                        <div class="col-6">
                            <form method="post" action="deletaCadastro.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: red">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                    

                    </td>';
                    echo '</tr>';
                };
                ?>
            </tbody>
        </table>
    </div>
</div>