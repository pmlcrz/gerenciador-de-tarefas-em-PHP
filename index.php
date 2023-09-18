<!DOCTYPE html>
<head>
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Gerenciador de Tarefas ☑</h1>

        <form method="post">
            <div class="form-group">
                <label for="date">Data:</label>
                <input type="date" class="form-control" name="date" id="date" required>
            </div>

            <div class="form-group">
                <label for="time">Horário:</label>
                <input type="time" class="form-control" name="time" id="time" required>
            </div>

            <div class="form-group">
                <label for="task">Tarefa:</label>
                <input type="text" class="form-control" name="task" id="task" required>
            </div>

            <div class="form-group">
                <label for="type">Tipo:</label>
                <select class="form-control" name="type" id="type" required>
                    <option value="Importante" style="color: #673AB7;">Importante</option>
                    <option value="Urgente" style="color: #607D8B;">Urgente</option>
                    <option value="Normal" style="color: #03A9F4;">Normal</option>
                </select>
            </div>

            <input type="submit" class="btn btn-info" value="Adicionar Tarefa">
        </form>

        <?php
        // Verificar se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obter os dados do formulário
            $date = $_POST["date"];
            $time = $_POST["time"];
            $task = $_POST["task"];
            $type = $_POST["type"];

            // Exibir a tarefa adicionada
            echo "<p>Tarefa adicionada:</p>";
            echo "<p>Data: $date</p>";
            echo "<p>Horário: $time</p>";
            echo "<p>Tarefa: $task</p>";
            echo "<p>Tipo: <span class='task-type'>$type</span></p>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
