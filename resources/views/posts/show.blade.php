@extends("layouts.app")
@section("content")
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
           Post details
        </div>
{{--        @dd($post)--}}

        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->description}}</p>
        </div>
    </div>
</div>

<div class="btn align-content-md-around">
    <a class="btn btn-info" href="{{route("posts")}}"> All Posts</a>

</div>

@endsection
