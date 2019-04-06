<link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
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

@section('customBody')
<div class='row'>
  <div style='background-color: #e6e6e6;' class='col-sm-5 col-sm-offset-3'>
   <h2>Information about</h2>
   <img class='img-circle' src='users/$image' width='150' height='150'>
   <br><br>
   <ul class='list-group'>
    <li class='list-group-item' title='Username'><strong>$f_name $l_name</strong></li>

    <li class='list-group-item' title='User Status'><strong style='color: grey;'>$describe_user</strong></li>

    <li class='list-group-item' title='Gender'><strong>$gender</strong></li>

    <li class='list-group-item' title='Country'><strong>$user_country</strong></li>

    <li class='list-group-item' title='User Registration Date'><strong>$register_date</strong></li>
   </ul>
  </div>
 </div>
@endsection
