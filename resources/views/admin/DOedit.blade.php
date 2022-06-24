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
        <div class="card-header">Donation Page</div>
  <div class="card-body">
      
      <form action= "{{url('roleupdate',$data->id)}}" method="post">
        @csrf
        <input type="hidden"  id="id" />
        <label>YourName</label></br>
        <input type="text" name="name" value="{{$data->Yourname}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" value="{{$data->Address}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" value="{{$data->Email}}" class="form-control"></br>
        <label>foodname</label></br>
        <input type="text" name="foodname" value="{{$data->FoodName}}" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" value="{{$data->Category}}" class="form-control"></br>
        <label>Cookedtime</label></br>
        <input type="text" name="cooktime" value="{{$data->Cookedtime}}" class="form-control"></br>
        <label>quantity</label></br>
        <input type="text" name="quantity" value="{{$data->Quantity}}" class="form-control"></br>
        <label>message</label></br>
        <input type="text" name="message" value="{{$data->Message}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
       
          <!-- partial -->
        @include('admin.script');
  

  
  </div>
</body>
</html>