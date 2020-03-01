<div class="card uper">
    <div class="card-header">
      Edit phone
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
        <form method="post" action="{{ route('phones.update', $phones->id) }}">
          @method('PATCH')
          @csrf
          <div class="form-group">
            <label for="name">phone :</label>
            <input type="text" class="form-control" name="phone" value={{ $phones->phone }} />
          </div>

        
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
  </div>