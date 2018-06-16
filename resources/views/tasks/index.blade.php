<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
</head>
<body>
    <h2>My Task List</h2>
    
    <ul>
        @foreach ($tasks as $task)

            <li>
				<a href="/tasks/{{ $task->id }}">
            		{{ $task->body }}
            	</a>

            </li>

        @endforeach
    </ul>

    
</body>
</html>