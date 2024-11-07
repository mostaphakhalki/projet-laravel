<x-master title="profile">
    <div class="container py-5">
        <form method="POST" action="{{route('store') }}">

            @csrf
            <div class="form-group">
                <label >NOM</label>
                <input type="text" name="name" class="form-control">
              </div>

            <div class="form-group">
              <label >Email address</label>
              <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label >Password</label>
              <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <label >DESCRIPTION</label>
                <textarea type="text" name="bio" class="form-control"></textarea>
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</x-master>
