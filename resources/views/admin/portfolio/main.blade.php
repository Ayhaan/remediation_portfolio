@extends('layouts.back')

@section('content')
    <h1>Partie Portfolio</h1>
    <table class="table container my-4">
        <thead>
          <tr>
            <th scope="col">Img</th>
            <th scope="col">filter</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $item)
                <tr>
                    <th scope="row">{{ $item->img }}</th>
                    <td>{{ $item->filter }}</td>
                    <td class="d-flex justify-content-center">
                      <form action="{{ route('portfolio.destroy', $item->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                      </form>
                      <a href="{{ route('portfolio.edit', $item->id) }}" class="btn btn-success">Modifier</a>
                    </td>
                </tr>     
            @endforeach

        </tbody>
      </table>
    {{-- @dump($portfolios) --}}
@endsection