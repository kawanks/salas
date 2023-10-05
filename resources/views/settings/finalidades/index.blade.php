@extends('main')
@section('content')

<div class="mb-3">
    <a href="{{route('finalidades.create')}}" class="btn btn-success">Adicionar Finalidade</a>
</div>

<div class="card">
    <div class="card-header">
        Lista de Finalidades
    </div>
    <ul class="list-group list-group-flush">
        @if (count($finalidades) > 0)
            @foreach ($finalidades as $finalidade)
                <li class="list-group-item d-inline-flex justify-content-between align-items-center">
                    <a href="{{route('finalidades.edit', $finalidade->id)}}" style="background-color: {{$finalidade->cor}}" class="btn px-4 rounded">
                        {{$finalidade->legenda}} 
                    </a>
                    <div class="row">
                        <a href="{{route('finalidades.edit', $finalidade->id)}}" class="btn btn-warning mr-2"><i class="fa fa-pen text-white"></i></a>

                        <form action="{{route('finalidades.destroy', $finalidade->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" id="btn-exluir-finalidade" onclick="return confirm('Excluir a finalidade {{$finalidade->legenda}}?')"><i class="fa fa-trash" ></i></button>
                        </form>
                    </div>
                </li>
            @endforeach
        @else
            <li class="list-group-item">Não há finalidades cadastradas.</li>
        @endif
    </ul>

</div>
    
@endsection