<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css');


  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar');

      @include('admin.navbar');
        <!-- partial -->
        <div class="card">
  <div class="card-header">Agent Page</div>
  <div class="card-body">
      
      <form action="{{ url('uploadagent') }}" method="post">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>joindate</label></br>
        <input type="text" name="joindate" id="joindate" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
       
          <!-- partial -->
        @include('admin.script');
  </body>
</html>