@extends('layout')

@section('content')
  <div class="row">
    <div class="col-md-6">

      <h3>Cursos</h3>

      <ul class="list-group">
        @foreach ($cursos as $curso)
          <li class="list-group-item"><a href="/cursos/{{ $loop->index }}">{{ $curso }}</a></li>
        @endforeach
      </ul>

    </div>
  </div>
@endsection
