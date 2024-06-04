<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando nova Tarefa</title>
</head>
<body>
    <h1>Criando nova Tarefa</h1>
    <form action="Taskindex.php?action=create" method="post">
        <label for="Tarefa">Tarefa:</label>
        <input type="text" id="tarefa" name="tarefa" required>
        <br>
        <label for="Prazo">Prazo:</label>
        <input type="Prazo" id="Prazo" name="Prazo" required>
        <br>
        <input type="submit" value="Create">
    </form>
    <a href="Userindex.php">Voltar para lista de tarefas</a>
</body>
</html>
