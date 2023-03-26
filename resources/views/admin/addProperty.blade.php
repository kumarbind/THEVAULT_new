@php
$properties;
@endphp
<!DOCTYPE html>
<html>
<head>
    <title>add property</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <nav class="sidebar">
                    <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="d8631889-919e-0705-2d4b-159fdbdfe8cd">
                        <ul class="nav flex-column">
                            <li class="card-header bg-dark">
                                <a class="nav-link active" href="../developers">
                                    <i class="ni ni-tv-2 text-primary"></i>
                                    <span class="nav-link-text">Project Details</span>
                                </a>
                            </li>
                            <li class="card-header bg-dark">
                                <a class="nav-link active" href="addProperty">
                                    <i class="ni ni-tv-2 text-primary"></i>
                                    <span class="nav-link-text">Total Projects</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-sm-10">
                <div class="card">
                    <div class="card-header">
                        <h1>Add Property</h1>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <!-- Button trigger modal -->
                                <a class="nav-link" href="addpropertyform" data-toggle="modal" data-target="#">
                                    <i class="ni ni-bullet-list-67 text-default"></i>
                                    <span class="nav-link-text badge badge-success">Add Propety</span>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('Submitproperty')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <label class="cstm-name">Property Name *</label><br>
                                                    <input type="text" class="frm-custom" name="propertyname" required><br>
                                                    <label class="cstm-name">Developer Name *</label><br>
                                                    <input type="text" class="frm-custom" name="developername" required><br>
                                                    <label class="cstm-name badge badge-secondary">Property Descriptions*</label><br>
                                                    <textarea name="description" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name badge badge-secondary">Photo For slider:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="developerPageProperty[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Banner Image:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="bannerImag[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Logo Img:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="logoImg[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Amenities Photo:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="amenitiesimage[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Amenities Icons:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="amenitiesIcon[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name badge badge-secondary">Villa Descriptions*</label><br>
                                                    <textarea name="villaDescription" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name badge badge-secondary">Amenities List:</label><br>
                                                    <textarea name="amenitiesList[]" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name badge badge-secondary">Amenities Nearby:</label><br>
                                                    <textarea name="amenitiesNearby[]" rows="5" cols="40"></textarea></br>
                                                    <label class="cstm-name">Location</label><br>
                                                    <input type="text" class="frm-custom"  name="location[]" required><br><br>
                                                    <label class="cstm-name badge badge-secondary">Gallery Photo:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="gallaryPhoto[]" multiple>
                                                    </div><br>
                                                    <label class="cstm-name">Availabilities</label><br>
                                                    <input type="text" class="frm-custom"  name="availabilities[]" required><br>
                                                    <label class="cstm-name">Payment Plan</label><br>
                                                    <input type="text" class="frm-custom"  name="paymentPlane[]" required><br>
                                                    <label class="cstm-name">Agents</label><br>
                                                    <input type="text" class="frm-custom" name="agants[]" required><br>
                                                    <label class="cstm-name badge badge-secondary">Agent Img:</label><br>
                                                    <div class="form-group">  
                                                        <input type="file" class="form-control" required name="agentImg[]" multiple>
                                                    </div><br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button id="sumintpro" type="sumit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            
            <table class="table table-bordered">
                <thead class="bg-primary">
                    <tr>
                        <th>Id</th>
                        <th>Developer Name</th>
                        <th>Property Type</th>
                        <th>Property name</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach($properties as  $properties)
                
                <tbody>
                    <tr>
                        <th>{{$properties->id}}</th>
                        <th>{{$properties->developer_name}}</th>
                        <th>{{$properties->developer_name}}</th>
                        <th>{{$properties->property_name}}</th>
                        <th>{{$properties->Country}}</th>
                        <th>
                        <a class="nav-link" href="" data-toggle="modal" data-target="#editModalLong">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text badge badge-success">Edit</span>
                        </a>
                        </th>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="editModalLong" tabindex="-1" role="dialog" aria-labelledby="editModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="#" method="POST">
                    @csrf
                <div class="modal-body">
                    <label class="cstm-name">Developer Name *</label><br>
                    <input type="text" class="frm-custom" placeholder="Example Emmar" name="developerName" value="{{$properties->developer_name}}" required><br>
                    <label class="cstm-name">Project Name *</label><br>
                    <input type="email" class="frm-custom" placeholder="example@gmail.com" name="email" required><br><br>
                    <div class="input-group ">
                        <div class="custom-file">
                            <input type="file" name="files[]" id="inputFile"multiple class="form-control @error('files') is-invalid @enderror">
                        </div>
                    </div><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="sumintpro" type="sumit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
   
<script type="text/javascript">
  $(function () {
    
    // var table = $('.data-table').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     ajax: "#",
    //     columns: [
    //         {data: 'id', id: 'id'},
    //         {data: 'name', name: 'name'},
    //         {data: 'email', name: 'email'},
    //         {data: 'action', name: 'action', orderable: false, searchable: false},
    //     ]
    // });
    
  });
</script>
</html>


