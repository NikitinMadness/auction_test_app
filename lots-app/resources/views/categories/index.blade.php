<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>category</title>
</head>
<body>
    this is a categoty page

    <a href="{{route('categories.create')}}">add category</a>


    <br>
    @foreach ($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{$category->title}}</td>
      <td><a href="{{route('categories.show', $category->id)}}">show</a></td>
      <td><a href="{{route('categories.edit', $category->id)}}">edit</a></td>
      <td>
        <form action="{{route('categories.delete', $category->id)}}" method="POST">
          @csrf
          @method('delete')
          <button type="submit">
            delete
          </button>
        </form>
    </tr>
    @endforeach
</body>
</html>