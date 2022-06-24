<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
<base href="/public">
      @include('admin.css');



  </head>
  <body>

      <!-- partial -->
      @include('admin.sidebar');

      @include('admin.navbar');
        <!-- partial -->
        <div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('agentupdate',$data->id) }}" method="post">
        @csrf
        <input type="hidden" name="id" id="id" value="{{$data->id}}" id="id" />
        <label>name</label></br>
        <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control"></br>
        <label>address</label></br>
        <input type="text" name="address" id="address" value="{{$data->address}}" class="form-control"></br>
        <label>mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$data->mobile}}" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$data->email}}" class="form-control"></br>
        <label>joindate</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$data->joindate}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  

          <!-- partial -->
        @include('admin.script');

</div>
  </body>
</html>