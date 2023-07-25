@extends('adminlte::page')
@section('title', 'Pastpapers')
@section('content_header')
    <h1><b>PastPapers</b></h1>
    
@stop
@section('content')
{{-- <div style="width:25%">
    <button type="button" class="btn btn-block bg-gradient-primary btn-sm">upload</button>

    <button type="button" class="btn btn-block bg-gradient-success btn-sm">export</button>

    </div><br> --}}

    <div class="container" >
        <div class="row">
          <div class="col">
            <b>Filter by:</b>
            <button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-table" aria-hidden="true"></i>  Date Range</button>
            <button type="button" class="btn btn-primary btn-sm float-right"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
            <button type="button" class="btn btn-success btn-sm"><i class="fa fa-download" aria-hidden="true"></i> Download</button>
              
          
   
            <!-- Add more buttons if needed -->
          </div>
        </div>
      </div>
<br>

    <table class="table align-middle mb-0 bg-white" >
      <thead class="bg-light">
    <tr>
        <th>#</th>
      <th>Unit Code</th>     
      <th>Unit</th>
      <th>Date</th>
      {{-- <th>D<i class="fa fa-cloud-download" aria-hidden="true"></i></th> --}}
      <th>Action</th>



    </tr>
  </thead>
  <tbody>
  
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>SMA2201 </td>                            
                                <td >Statistics</td>
                                <td>12/04</td>
                                {{-- <td><i class="fa fa-download" aria-hidden="true"></i> --}}
                                </td>

                                <td>
                                <div class="btn-group"style="margin-top:-10px">
                                <button  type="button" class="btn btn-warning btn-sm">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>Download</a>

                                <a class="dropdown-item" href="#"><i class="fas fa-edit"></i>Update</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off"></i>Deactivate</a>

                                </div>
                            </div>
                            </div>
             
                                </td>
                            </tr>

                            <tr>
                                <td><input type="checkbox"></td>
                                <td>BIT212 </td>                            
                                <td >OOP 1</td>
                                <td>12/04</td>
                                {{-- <td><i class="fa fa-download" aria-hidden="true"></i> --}}
                                </td>

                                <td>
                                <div class="btn-group"style="margin-top:-10px">
                                <button  type="button" class="btn btn-warning btn-sm">Action</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-download"></i>Download</a>

                                <a class="dropdown-item" href="#"><i class="fas fa-edit"></i>Update</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off"></i>Deactivate</a>

                                </div>
                            </div>
                            </div>
             
                                </td>
                            </tr>
                       

    
  </tbody>
</table>


  
</div>
@stop