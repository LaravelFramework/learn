@extends( 'app' )

@section( 'content' )
    <div>
        {!! link_to_route( 'post', 'published' ) !!} &nbsp;&nbsp;&nbsp;
        {!! link_to_route( 'post.unpublished', 'unpublished' ) !!} &nbsp;&nbsp;&nbsp;
        {!! link_to_route( 'post.create', 'create' ) !!}
    </div>

    @foreach( $posts as $post )
        <h2>{{ $post->title }}</h2>
        <p>{!! $post->excerpt  !!}</p>
        <p>{{ $post->published_at }}</p>
    @endforeach
@stop