@foreach ($posts as $post)

<h1>{{ $post->title }}</h1>
<p>{{  str_limit($post->content,100) }}</p>
    
@endforeach