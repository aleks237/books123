@extends('layout')

@section('content')

<style>

  .uper {

    margin-top: 40px;

  }

</style>

<div class="uper">

  @if(session()->get('success'))

    <div class="alert alert-success">

      {{ session()->get('success') }}  

    </div><br />

  @endif


<a href="{{ route('book.create')}}" class="btn btn-success">ADD</a>


  <table class="table table-striped">

    <thead>

        <tr>

          <td>ID</td>

          <td>Title</td>

          <td>City</td>
		  
          <td>Rooms</td>
		  
          <td>Apartments</td>

          <td colspan="2">Action</td>

        </tr>

    </thead>

    <tbody>
@if(Isset($books))
        @foreach($books as $book)

        <tr>

            <td>{{$book->id}}</td>

            <td>{{$book->name}}</td>

            <td>{{$book->city}}</td>
			
            <td>{{$book->rooms}}</td>
			
            <td>{{$book->apart}}</td>

            <td><a href="{{ route('book.edit', $book->id)}}" class="btn btn-primary">Edit</a></td>

            <td>

                <form action="{{ route('book.destroy', $book->id)}}" method="post" onsubmit="return confirm('The record will be deleted');">

                  @csrf

                  @method('DELETE')

                  <button class="btn btn-danger" type="submit">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

@endif
    </tbody>

  </table>
  {{ $books->links() }}

<div>

@endsection