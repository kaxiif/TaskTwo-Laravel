<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>






@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <h2>Employees and Salary</h2>

        <table>
        <tr>
         <th>Employee</th>
         <th>Salary</th>
         </tr>
         @foreach ($users as $user)

        @if($user->user_type!='admin')

            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->salary}}</td>
         
               </tr>

         @endif
        

    
    
         
          @endforeach
        </table>        
        
    </div>
</div>
@endsection

</body>
</html>