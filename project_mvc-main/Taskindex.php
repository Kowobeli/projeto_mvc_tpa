<?php

include_once 'config/database.php';
include_once 'controllers/TaskController.php';

$database = new Database();
$db = $database->getConnection();

$TaskController = new TaskController($db);

// Obter a ação e o ID (se aplicável) dos parâmetros da URL
$action = isset($_GET['action']) ? $_GET['action'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Determinar a ação do usuário
switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $tarefa = $_POST['tarefa'];
            $prazo = $_POST['prazo'];
            $message = $TaskController->create($tarefa, $prazo);
            echo $message;
            echo '<a href="Taskindex.php">Back to task List</a>';
        } else {
            include 'views/task/create.php';
        }
        break;

    case 'read':
        if ($id) {
            $task = $TaskController->readOne($id);
            if (is_array($task)) {
                include 'views/task/show.php';
            } else {
                echo $task; // Exibir mensagem de erro
            }
        } else {
            echo 'task ID is required.';
        }
        break;

    case 'update':
        if ($id) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $tarefa = $_POST['tarefa'];
                $prazo = $_POST['prazo'];
                $message = $TaskController->update($id, $tarefa, $prazo);
                echo $message;
                echo '<a href="Taskindex.php">Back to task List</a>';
            } else {
                $task = $TaskController->readOne($id);
                include 'views/task/update.php';
            }
        } else {
            echo 'Task ID is required.';
        }
        break;

    case 'delete':
        if ($id) {
            $message = $TaskController->delete($id);
            echo $message;
            echo '<a href="Taskindex.php">Back to task List</a>';
        } else {
            echo 'Task ID is required.';
        }
        break;

    default:
        $tasks = $TaskController->index();  
        include 'views/task/index.php';
        break;
}
?>
