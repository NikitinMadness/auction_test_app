

<form action="{{route('lots.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="lot name">
    <textarea name="description"></textarea>
    <label>Обрати</label>
                        <select name="category_id">
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}"
                            {{$category->id == old('category_id') ? 'selected' : ''}}
                            >{{$category->title}}</option>
                          @endforeach
                        </select>
    <input type="submit" value="add">
</form>