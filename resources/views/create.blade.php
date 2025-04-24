@extends('layout')

@section('content')

<style>

  .uper {

    margin-top: 40px;

  }

</style>

<div class="card uper">

  <div class="card-header">

    Add Book Data

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

      <form method="post" action="{{ route('book.store') }}">

          <div class="form-group">

              @csrf

              <label for="fn">Book Title:</label>

              <input type="text" class="form-control" name="name"/>

          </div>

          <div class="form-group">

              <label for="name">City:</label>

              <input type="text" class="form-control" name="city"/>

          </div>
		  
		  <div class="form-group">

              <label for="name">Rooms:</label>

              <input type="text" class="form-control" name="rooms"/>

          </div>
		  
		  <div class="form-group">

              <label for="name">Apartment:</label>

              <input type="number" id="tentacles"class="form-control" name="apart" min="0" max="100"/>
			  

          </div>

			<br>
          <button type="submit" class="btn btn-primary">Add Book</button>

      </form>

  </div>

</div>

@endsection