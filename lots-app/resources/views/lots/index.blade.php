<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lots</title>
</head>
<body>
    this is a lots page

    <a href="{{route('lots.create')}}">add lot</a>
    <br>
    <table>
    <thead>
        <tr>
          <th>ID</th>
          <th>lot</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($lots as $lot)
        <tr>
          <td>{{$lot->id}}</td>
          <td>{{$lot->title}}</td>
          <td><a href="{{route('lots.show', $lot->id)}}">show</a></td>
          <td><a href="{{route('lots.edit', $lot->id)}}">update</a></td>
          <td>
            <form action="{{route('lots.delete', $lot->id)}}" method="POST">
              @csrf
              @method('delete')
              <button type="submit">
                delete</td>
              </button>
            </form>
        </tr>
        @endforeach
      </tbody>
    </table>
</body>
</html>