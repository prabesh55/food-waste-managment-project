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
        <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Donation</div>
                    <div class="card-body">
                        <a href="" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>YourName</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>FoodName</th>
                                        <th>Cooked time</th>
                                        <th>Qunatity</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                        <th>Notification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $data)
                                
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->Yourname }}</td>
                                        <td>{{ $data->Address }}</td>
                                        <td>{{ $data->Email }}</td>
                                        <td>{{ $data->FoodName }}</td>
                                        <td>{{ $data->Cookedtime }}</td>
                                        <td>{{ $data->Quantity }}</td>
                                        <td>{{ $data->Message }}</td>
                                        


                                        
                                        <td>
                                            <a href="" title=""><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{url('DOedit',$data->id)}}" title=""><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="" accept-charset="UTF-8" style="display:inline">
                                            
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                <a href="{{" title=""><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Send Mail</button></a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          <!-- partial -->
        @include('admin.script');
  </body>
</html>