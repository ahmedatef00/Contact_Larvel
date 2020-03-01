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
  <table class="table table-striped">
    <thead>
        <tr>
          <td>user</td>
         
          <td colspan="2">Action</td>
          <td >Phone</td>

        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a></td>
@foreach ( $user->phones  as $item)
<td> {{ $item->phone}} </td>

@endforeach

                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>

                </form>
              </td>
        </tr>
        @endforeach
    </tbody>

  </table>
  <a href="{{url('/users/create')}}">adduser</a>

<div>
@endsection