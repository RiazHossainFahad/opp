@extends('layouts.master')

@section('title')
Doctor
@endsection

@section('styleSection')
    <style>
    .row{
    text-align: center;
    }
    </style>
@endsection

@section('ah')
  class='active'    
@endsection

@section('ahh')
href="{{route('doctor.index')}}"
@endsection
@section('aeph')
href="{{route('doctor.editProfile')}}"
@endsection
@section('aph')
  href="{{route('doctor.createPrescription')}}"
@endsection


@section('customBody')
  <div style='background-color: #e6e6e6;' class='col-sm-5 col-sm-offset-3'>
   <h2>Information about</h2>
   <img class='img-circle' src='{{asset("/assets/images/doctorP.jpg")}}' width='150' height='150'>
   <br><br>
   <ul class='list-group'>
    <li class='list-group-item' title='Username'><strong>{{$user->u_name}}</strong></li>

    <li class='list-group-item' title='User Status'><strong style='color: grey;'>{{$user->u_email}}</strong></li>

    <li class='list-group-item' title='Gender'><strong>{{$user->u_gender}}</strong></li>

    <li class='list-group-item' title='Country'><strong>{{$user->u_location}}</strong></li>

    <li class='list-group-item' title='User Registration Date'><strong>{{$user->u_dob}}</strong></li>
   </ul>
 </div>
@endsection
