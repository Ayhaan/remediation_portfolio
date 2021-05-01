@extends('layouts.back')

@section('content')
    <h1>Edition projet portfolio</h1>
    <form class="container w-50 my-5" action="{{ route('portfolio.update', $portfolio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group ">
          <label for="img">URL image</label>
          <input type="text" class="form-control" id="img" name="img" value="{{ $portfolio->img }}" placeholder="Enter img">
        </div>
        <div class="form-group">
          <label for="exampleInputPasfilersword1">Filter</label>
          <input type="text" class="form-control" id="filer" name="filter" value="{{ $portfolio->filter }}" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection