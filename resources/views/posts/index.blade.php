@if(count($posts) > 0)
    @foreach($posts as $post)
        {{ $post->title }} <br>
        {{ $post->content }}
        <hr>
    @endforeach
@else
    No Data
@endif