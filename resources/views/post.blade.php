<h1>Posts</h1>
@foreach($posts as $post)
<span>{{$post->title}}</span>
<p>{{$post->body}}</p>
@endforeach