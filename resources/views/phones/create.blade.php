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

</div>
<form method="post" action="{{route('phones.store')}}">
    <div class="form-group">
        @csrf
        <label for="phone">phone:</label>
        <input type="text" class="form-control" name="phone"/>
        
        <button type="submit" class="btn btn-primary">Add</button>
<a href="{{url('/phones/')}}">listPhones</a>
    </form>


    </div>