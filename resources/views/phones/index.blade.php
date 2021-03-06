{{-- @section('content')
<style>
  
  .uper {
    margin-top: 40px;
  }
</style> --}}
@extends('layouts.app')
@section('content')

<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>phone</td>
         
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($phones as $phone)
        <tr>
            <td>{{$phone->phone}}</td>
            @can('update',$phone)
              
            <td><a href="{{ route('phones.edit',$phone->id)}}" class="btn btn-primary">Edit</a></td>
            @endcan

            <td>
                <form action="{{ route('phones.destroy', $phone->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>

                </form>
              </td>
        </tr>
        @endforeach
    </tbody>

  </table>
  <a href="{{url('/phones/create')}}">addPhone</a>

<div>
@endsection