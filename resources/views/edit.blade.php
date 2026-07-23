<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Edit Task</h1>

        <!-- Edit Form -->
        <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $task->title }}" class="w-full p-2 border rounded mb-4" required>
            <div class="flex justify-between">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update</button>
                <a href="/" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>