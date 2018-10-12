@extends('layouts.app')

@section('content')
<div class="container">
	<div class="exportdata" style="margin-bottom:10px;">
		<a href="{{ url('/admin/export_template1') }}"><button class="btn btn-success">Download Template 1</button></a>
		<a href="{{ url('/admin/export_template2') }}"><button class="btn btn-success">Download Template 2</button></a>
	</div>
    <table class="table table-striped">
        <thead>
            <tr>
              <td>User ID</td>
              <td>First Name</td>
              <td>Last Name</td>
              <td>Username</td>
              <td>Email</td>
              <td>City</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->city}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection