<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <p>

    <a href="/">Home</a>

    <p>

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