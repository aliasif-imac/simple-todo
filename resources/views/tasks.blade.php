<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">My Tasks</h1>

        <!-- Task Form -->
        <form action="/tasks" method="POST" class="mb-4">
            @csrf
            <input type="text" name="title" placeholder="Add a new task..." class="w-full p-2 border rounded mb-2" required>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Add Task</button>
        </form>

        <ul>
            @foreach ($tasks as $task)
                <li class="flex justify-between items-center border-b py-2">
                    <span>{{ $task->title }}</span>
                    <div class="flex space-x-2">
                        <!-- Here is Edit link -->
                        <a href="/tasks/{{ $task->id }}/edit" class="text-blue-500 hover:text-blue-700 text-sm">Edit</a>
                        
                        <!-- Here is Delete Link -->
                        <form action="/tasks/{{ $task->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 text-sm">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>