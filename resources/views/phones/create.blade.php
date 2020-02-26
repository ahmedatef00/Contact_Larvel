<form method="post" action="{{route('phones.store')}}">
    <div class="form-group">
        @csrf
        <label for="phone">phone:</label>
        <input type="text" class="form-control" name="phone"/>
        
        <button type="submit" class="btn btn-primary">Add</button>
<a href="http://127.0.0.1:8001/phones">listPhones</a>
    </form>
    </div>