<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body  style='margin-top:20;margin-left:20;margin-right:20;'>
        <h2>Tasks</h2>

        <hr>

        <h4>Add Task:</h4>

        <form method="POST" action="/addTask" class="form-inline">

          {{ csrf_field() }}

            <label for="task">Task:</label>
            <input type="text" class="form-control" id="task" name="task">

          <button type="submit" class="btn btn-default">Add</button>

        </form>

        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th style="text-align:center">Done</th>
                    <th style="text-align:center">Task</th>
                    <th style="text-align:center">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                  <td style="text-align:center">
                    <?php if($task->isdone): ?>
                      <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-remove"></span>
                      </button>
                    <?php else: ?>
                      <a href="/doneTask/{{$task->id}}">
                      <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-ok"></span>
                      </button>
                      </a>
                    <?php endif; ?>
                  </td>
                  <td style="text-align:center">
                    <?php if(!$task->isdone): ?>
                      <form method="POST" action="/editTask/{{$task->id}}" class="form-inline">

                        {{ csrf_field() }}

                          <label for="task"></label>
                          <input type="text" class="form-control" id="task" name="task" value="{{$task->task}}">

                        <button type="submit" class="btn btn-default">Edit</button>

                      </form>
                      <?php else: ?>
                        {{$task->task}}
                    <?php endif; ?>
                  <td style="text-align:center"><a href="/deleteTask/{{$task->id}}"><button type="button" name="edit" class="btn btn-default">Delete</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>
