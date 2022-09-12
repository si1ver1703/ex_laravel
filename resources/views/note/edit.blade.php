<form action="{{route('note.update', $note)}}" method="post">
    @csrf
    @method('PATCH')
    <input type="text" name="title" value="{{$note->title}}">
    <input type="submit" value="Изменить">
</form>
