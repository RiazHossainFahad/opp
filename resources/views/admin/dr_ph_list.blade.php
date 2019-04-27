@extends('layouts.admin')

@section('title')
Admin-Doctor & admin List
@endsection

@section('styleSection')
    <style>
    .row{
    text-align: center;
    }
    </style>
@endsection

@section('dl')
  class='active'    
@endsection

@section('ul')
  class='active'    
@endsection

@section('customBody')
<div class="col-sm-8 col-sm-offset-2">

 <div class="panel panel-info">
     <div class="panel-heading">
         <h3 style="text-align:center" class="panel-title">Doctor & Pharmacy List</h3>
     </div>
     <div class="panel-body">


         <table class="table">
             <thead>
                 <tr>
                     <th>Sl No</th>
                     <th>Name</th>
                     <th>Address</th>
                     <th>Type</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
              @if (count($uList) != 0)
              @for ($i = 0; $i < count($uList); $i++)
              <tr>
                <td>{{$i+1}}</td>
                <td>{{$uList[$i]->u_name}}</td>
                <td>{{$uList[$i]->u_location}}</td>
                <td>{{$uList[$i]->u_type}}</td>
              <td>
                <a data-toggle="modal" data-target="#myModal-view-{{$uList[$i]->id}}" class="btn btn-success">VIEW</a>
                <a data-toggle="modal" data-target="#myModal-edit-{{$uList[$i]->id}}" class="btn btn-default">EDIT</a>
                <a data-toggle="modal" data-target="#myModal--delete-{{$uList[$i]->id}}" class="btn btn-danger">DELETE</a>

              </td>
  <!-- Modal for view -->
  <div class="modal fade" id="myModal-view-{{$uList[$i]->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Information of {{$uList[$i]->u_name}}</h4>
        </div>
        <div class="modal-body">
          <div class="panel panel-info">
            <div class="panel-heading">
                <h4 style="text-align:center" >Name: {{$uList[$i]->u_name}}</h4>
                <h5 style="text-align:center" >Email: {{$uList[$i]->u_email}}</h5>
                <h5 style="text-align:center" >Location: {{$uList[$i]->u_location}}</h5>
                <h5 style="text-align:center" >User Type: {{$uList[$i]->u_type}}</h5>
                <h5 style="text-align:center" >Gender: {{$uList[$i]->u_gender}}</h5>
                <h5 style="text-align:center" >Date of Birth: {{$uList[$i]->u_dob}}</h5>
                <h5 style="text-align:center" >Account Status: {{$uList[$i]->status}}</h5>
                <h5 style="text-align:center" >Hospital name: {{$uList[$i]->hospital_name}}</h5>
               @if ($uList[$i]->u_type == 'Doctor')
               
               <h5 style="text-align:center" >Degree: {{$uList[$i]->degree}}</h5>
               @endif 
                <h5 style="text-align:center" >Licenese Number: {{$uList[$i]->lic_no}}</h5>
            </div>             
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
{{--     
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Information of {{$uList[$i]->u_name}}</h4>
        </div>
        <div class="modal-body">
          <div class="panel panel-info">
            <div class="panel-heading">
                <h4 style="text-align:center" >{{$uList[$i]->u_name}}</h4>
                <h5 style="text-align:center" >{{$uList[$i]->u_email}}</h5>
                <h5 style="text-align:center" >{{$uList[$i]->u_phone}}</h5>
            </div>
            <div class="panel-body">
            <form method="post" action="{{route('admin.storeRequest',$uList[$i]->id)}}">
                @csrf
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                     <button type="button" class="close" data-dismiss="alert">×</button>
                     <ul>
                      @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                      @endforeach
                     </ul>
                    </div>
                   @endif

                  <div class="row">  
                     <div class="col-sm-4 form-group">
                      <h4 class="label-info">Problem Details</h4>
                      <h4>{{preg_replace('/\<br(\s*)?\/?\>/i', "", $uList[$i]->p_problem)}}</h4>
                     </div>

                     <div class="col-sm-8 form-group">
                      <h4 class="label-info">Medicines</h4>
                      <h4>{{preg_replace('/\<br(\s*)?\/?\>/i','', $uList[$i]->p_medicine)}}</h4>
                     </div>
                   </div>

                   <div class="row">  
                     <div class="col-sm-12 form-group">
                  <textarea class="form-control" placeholder="Inform DR. for medicine unavailability" name="req_message" required rows="2"></textarea>
                     </div>


                   <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-info btn-block">Change Medicine Request</button>
                     </div>
                   </div>
                   
                </form>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div> --}}
             </tr>

              @endfor
              @else
                  <tr>
                   <td style="colh2:4">No available user found in th system</td>
                  </tr>
              @endif
             </tbody>
         </table>


         <div class="col-xs-12">
             <a href="{{route('admin.index')}}" class="btn btn-block btn-danger">Back</a>
         </div>



     </div>
 </div>

</div>
@endsection

