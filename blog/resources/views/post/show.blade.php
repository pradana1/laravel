<h1>{{   $post->title   }}</h1>
<p>{{  $post->content }}</p>
{{-- <p>{{  $post->published_at->diffForHumans() }}</p> --}}
<p>{{  $post->published_at->format('dMY') }}</p>