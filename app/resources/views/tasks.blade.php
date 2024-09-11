<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <form action="/add" method="POST">
        @csrf
        <input type="text" name="task" placeholder="Nova tarefa" required>
        <button type="submit">Adicionar</button>
    </form>

    <ul>
        @foreach($tasks as $index => $task)
            <li>
                {{ $task }}
                <form action="/remove" method="POST" style="display:inline;">
                    @csrf
                    <input type="hidden" name="index" value="{{ $index }}">
                    <button type="submit">Remover</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
