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


    <form method="post" action="{{route('contacts.store')}}">
      <div class="form-group">
          @csrf
          <label for="contact">contacts:</label>
          <input type="text" class="form-control" name="contact"/>
          
          <button type="submit" class="btn btn-primary">Add Contact</button>
  <a href="{{url('/contacts/')}}">list Contacts</a>
      </form>
  
    </div>