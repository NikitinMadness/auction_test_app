

<form action="{{route('categories.store')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="category name">
    <input type="submit" value="add">
</form>