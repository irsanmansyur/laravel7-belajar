@extends('layouts.admin')
@section('content')
    <div class="row">
      @foreach ($posts as $post)
          <div class="col-md-4 my-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{$post->title}}</h1>
              </div>
              <div class="card-body">
                <p>{{ Str::limit($post->body,120)}}</p>
                <a href="{{route("post.slug",$post->slug)}}" class="text-primary">Show</a>

              </div>
              <div class="card-footer">
                {{-- Published an : {{$post->created_at->format( "d, M Y")}} --}}
                Published an : {{$post->created_at->diffForHumans()}}
              </div>
            </div>
          </div>
      @endforeach
    </div>
    <div class="pagination my-2 d-flex justify-content-center">
      {{$posts->links()}}
    </div>
@endsection