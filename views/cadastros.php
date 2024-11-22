<div class="caixa">
    <h4>Reservas de Salas</h4>
    <br>
    <a type="button" class="btn btn-primary" href="?pagina=novoCadastro"><i class="bi bi-plus"></i> Cadastrar</a>
    <br><br><br>
    <div>
        <table id="pricing_table">
            <thead>
                <tr>
                    <th>Nome do Reservante</th>
                    <th>Sala</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Ações</th>
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
                    <div class="action-buttons">
                        <form method="post" action="?pagina=editaCadastro">
                            <select style="display:none" name="id">
                                <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                            <select>
                            <button type="submit" class="btn-edit">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                        </form>

                        <form method="post" action="deletaCadastro.php">
                            <select style="display:none" name="id">
                                <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                            <select>
                            <button type="submit" class="btn-delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                    </td>';
                    echo '</tr>';
                };
                ?>
            </tbody>
        </table>
    </div>
</div>
