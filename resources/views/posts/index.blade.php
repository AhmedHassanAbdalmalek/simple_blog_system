 @extends('layouts.app');
<!-- @section('content')  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
    <title>Document</title>
</head>
<body>
<div class="container "style="margin-top: 100px !important;">
    <!-- tables  -->
    <div class="container">
        <button type="button"class="btn btn-success">Create Posts</button>
        
          <table class="table">
  <thead>
    
  </thead>
  <tbody>
    <h1>Posts </h1>
    <tr class="bg-dark text-light ">
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">posted by</th>
      <th scope="col">created at</th>
      <th scope="col">action</th>
    </tr>
   @foreach($posts as $post)
        <tr><td>{{$post['ID']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['posted_by']}}</td>
        <td>{{$post['created_at']}} </td>
         <td><a href="#" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a> 
         <a href="#" class="link-dark"><i class="fa-solid fa-trash"></i></a></td>
        </tr>
     
       
  
   
   
   
    </tr>
    @endforeach
  </tbody>
</table>
   <!-- end of tables -->
      
</body>
</html>