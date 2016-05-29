@extends( 'app' )

@section( 'content' )
    <div>
        {!! link_to_route( 'post', 'published' ) !!} &nbsp;&nbsp;&nbsp;
        {!! link_to_route( 'post.unpublished', 'unpublished' ) !!} &nbsp;&nbsp;&nbsp;
        {!! link_to_route( 'post.create', 'create' ) !!}
    </div>

    <h1>Create</h1>
    {!! Form::open([ 'route' => 'post.store' ]) !!}
        @include( 'post._form' )
    {!! Form::close() !!}
@stop