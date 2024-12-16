<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Task</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Task Details</h1>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="font-weight-bold">Title:</label>
                    <p class="form-control-plaintext">{{ $task->title }}</p>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold">Description:</label>
                    <p class="form-control-plaintext">{{ $task->description }}</p>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold">Long Description:</label>
                    <p class="form-control-plaintext">{{ $task->long_description }}</p>
                </div>
                <div class="mb-3">
                    <label class="font-weight-bold">Completed:</label>
                    <p class="form-control-plaintext">{{ $task->completed ? 'Yes' : 'No' }}</p>
                </div>
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to Tasks</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>