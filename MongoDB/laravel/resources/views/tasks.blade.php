<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TODO List</title>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  </head>
  <body>
  <div class="container">
    <h2><strong>TODO List</strong></h2>
    <iframe style="text-align:center" src="https://ghbtns.com/github-btn.html?user=enisimsar&repo=Laravel-First-Project-TODO-List&type=star&count=true&size=large" frameborder="0" scrolling="0" width="160px" height="30px"></iframe>
    
    <hr>

    <form style="text-align:center" method="POST" action="/addTask" class="form-inline">

      {{ csrf_field() }}

      <label for="task">Task:</label>
      <input style="width:245px" type="text" class="form-control" id="task" name="task" placeholder="Give a star this project on GitHub :)">

      <button type="submit" class="btn btn-primary">Add</button>
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
            <button type="button" class="btn btn-success">
              <span class="glyphicon glyphicon-remove"></span>
            </button>
          <?php else: ?>
            <a href="/doneTask/{{$task->_id}}">
              <button type="button" class="btn btn-warning">
                <span class="glyphicon glyphicon-ok"></span>
              </button>
            </a>
          <?php endif; ?>
          </td>
          <td style="text-align:center">
          <?php if(!$task->isdone): ?>
            <form method="POST" action="/editTask/{{$task->_id}}" class="form-inline">
              {{ csrf_field() }}
              <label for="task"></label>
              <input type="text" class="form-control" id="task" name="task" value="{{$task->task}}">

              <button type="submit" class="btn btn-info">Edit</button>

            </form>
          <?php else: ?>
            {{$task->task}}
          <?php endif; ?>
          <td style="text-align:center"><a href="/deleteTask/{{$task->_id}}"><button type="button" name="edit" class="btn btn-danger">Delete</button></a></td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  </body>
</html>
