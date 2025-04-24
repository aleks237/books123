@extends('layout')


@section('content')

<style>

  .uper {

    margin-top: 40px;

  }

</style>

<div class="card uper">

  <div class="card-header">

    Edit Book Data

  </div>

  <div class="card-body">

    @if ($errors->any())

      <div class="alert alert-danger">

        <ul>

            @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

            @endforeach

        </ul>

      </div><br />

    @endif

      <form method="post" action="{{ route('book.update', $book->id) }}" onsubmit="return confirm('The record will be updated');">

          <div class="form-group">

              @csrf

              @method('PATCH')

              <label for="name">Book Title:</label>

              <input type="text" class="form-control" name="name" value="{{ $book->name }}"/>

          </div>

          <div class="form-group">

              <label for="city">City:</label>

              <input type="text" class="form-control" name="city" value="{{ $book->city }}"/>

          </div>
		  
		  <div class="form-group">

              <label for="rooms">Rooms:</label>

              <input type="text" class="form-control" name="rooms" value="{{ $book->rooms }}"/>

          </div>
		  
		  <div class="form-group">

              <label for="apart">Apartments:</label>

              <input type="number" id="tentacles" class="form-control" name="apart" min="0" max="100" value="{{ $book->apart }}"/>

          </div>
			<br>
          <button type="submit" class="btn btn-primary">Update Data</button>

      </form>

  </div>

</div>

@endsection