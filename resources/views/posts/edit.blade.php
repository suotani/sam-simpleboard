<form method="POST" action="/posts/{{$post->id}}">
  @csrf
  <input type="hidden" name="_method" value="PATCH">
  <input type="text" name="title" value="{{$post->title}}">
  <input type="text" name="content" value="{{$post->content}}">
  <input type="submit">
</form>