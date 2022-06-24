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
                    <div class="card-header">Contact</div>
                    <div class="card-body">
                        
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FullName</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($data as $data)
                                
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->Fullname }}</td>
                                        <td>{{ $data->Address }}</td>
                                        <td>{{ $data->Email }}</td>
                                        <td>{{ $data->PhoneNumber }}</td>
                                        <td>{{ $data->Message }}</td>
                                        


                                        
                                        <td>
                                            <a href="" title=""><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{url('contactedit',$data->id)}}" title=""><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                
                                            <a href="{{url('Contactdelete',$data->id)}}" title=""><button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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