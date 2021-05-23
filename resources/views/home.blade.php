@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card" style="">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$post->post_date}}</h6>
                  <p class="card-text">{{$post->post}}</p>
                </div>
            </div>
            <hr>
            @endforeach            
        </div>

        <div class="col-md-4">
            <form action="/posteo" method="post" >
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="txtTitle" placeholder="Titulo" required>
                </div>
                <div class="form-group">
                  <textarea type="text" class="form-control" name="txtPost" placeholder="Escribe tu post" required> </textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Publicar</button>
              </form>
        </div>
    </div>
</div>
@endsection
