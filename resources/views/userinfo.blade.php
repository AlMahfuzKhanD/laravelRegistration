@extends('master')

@section('content')


<form action="">
<div class="form-group form-control">
  <div class="row">
    <div class="col-sm-6"><input type="text" id="search" name="search" class="form-control" placeholder="Search" ></div>
    <div class="col-sm-6">
      <select  name="status" id="status" class="form-control" >

        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>

    </select>
    </div>
  </div>

    

    {{-- onchange="showUser(this.value)" --}}
    

    {{-- <div id="txtHint"><b>Person info will be listed here...</b></div> --}}

{{-- <button class="btn btn-primary" onclick="loadDoc()">Click Here</button> --}}
</div> 

</form>

<table class="table" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
      {{-- @foreach ($users as $item)
    <tr>
      
      <td>{{$item['id']}}</td>
      <td>{{$item['firstName']}}</td>
      <td>{{$item['lastName']}}</td>
      <td>{{$item['status']}}</td>
      
     
    </tr> 
      @endforeach
     --}}
    
  </tbody>
</table>

  @endsection