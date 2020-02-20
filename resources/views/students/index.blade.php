@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Register Students</h1>
            <table  class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Birthdate</th>
                        <th>Address</th>
                        <th>Contact Number</th>
                        <th>Course</th>
                    </tr>
                </thead>     
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nikko Boloron</td>
                        <td>Male</td>
                        <td>April 25,1996</td>  
                        <td>P6,Biking 1,Dauis,Bohol</td>
                        <td>09123962831</td>
                        <td>BSIT</td>
                    </tr>    
                </tbody>   
        </div>
    </div>
</div>
@endsection


