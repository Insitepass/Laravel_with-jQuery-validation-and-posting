<!DOCTYPE html>
<html>
<head>
    <title>Add New User</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <style>
.error{
color: #FF0000; 
}
</style>
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Add New User
    </div>
    <div class="card-body">
      <form name="add-new-user-form" id="add-new-user-form" method="post" action="{{url('store-form')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="true" value="{{old('name')}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" id="email" name="email" class="form-control" required="true" value="{{old('email')}}" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
  {{$error}}
</div>
@endforeach
@endif
<script>
  if ($("#add-new-user-form").length > 0) {
$("#add-new-user-form").validate({
  rules: {
name: {
required: true,
},
email: {
required: true,
},
},
messages: {
name: {
required: "Please enter Name",
},
email: {
required: "Please enter Email",
},
},
})
} 
</script>  
</body>
</html>