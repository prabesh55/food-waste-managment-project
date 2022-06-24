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
        <div class="card-header">Contact Page</div>
  <div class="card-body">
      
      <form action= "{{url('contactupdate',$data->id)}}" method="post">
        @csrf
        <input type="hidden"  id="id" />
        <label>FullName</label></br>
        <input type="text" name="name"value="{{$data->Fullname}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" value="{{$data->Address}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" value="{{$data->Email}}" class="form-control"></br>
        <label>PhoneNumber </label></br>
        <input type="text" name="phone" value="{{$data->PhoneNumber}}" class="form-control"></br>
        
        <label>Message</label></br>
        <input type="text" name="message" value="{{$data->Message}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
       
          <!-- partial -->
        @include('admin.script');
  

  
  </div>
</body>
</html>