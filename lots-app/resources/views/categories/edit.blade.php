<form action="{{route('categories.update', $category->id)}}" method="post">
    @csrf
    @method('PATCH')
      <div>
          <label>Назва категорії</label>
          <input type="text" name="title" placeholder="category name" value="{{$category->title}}">
          @error('title')
              <div>Назва обовьязкова</div>
          @enderror
        </div>
        <input type="submit" value="update">
  </form>