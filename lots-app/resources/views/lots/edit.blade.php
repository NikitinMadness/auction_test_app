<form action="{{route('lots.update', $lot->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div>
        <label>lot name</label>
        <input type="text"name="title" placeholder="lot name" value="{{$lot->title}}">
        @error('title')
            <div>name required</div>
        @enderror
      </div>
      <div>
        <textarea name="description">{{$lot->description}}</textarea>
      </div>
      <div>
        <label>Обрати</label>
        <select name="category_id">
          @foreach ($categories as $category)
          <option value="{{$category->id}}"
            {{$category->id == $lot->category_id ? 'selected' : ''}}
            >{{$category->title}}</option>
          @endforeach
        </select>
      </div>
      <input type="submit" value="update">
  </form>