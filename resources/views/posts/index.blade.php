{{-- <div>
@foreach ($posts as $post)
    <p> <a href="{{route('posts.show', $post->id)}}"> {{$post->title}} - {{$post->body}} </a> </p>
@endforeach
</div> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<table class="table">
  <thead>
    
        
   
        
   
    <tr>
    <th scope="col">id</th>
    <th scope="col">Title</th>
    <th scope="col">Decs</th>
    </tr>
  </thead>
  @foreach ($posts as $post)
  <tbody>
    
  <td > <p> {{$post->id}} </p> </td>
  <td>  <p> {{$post->title}} </p> </td>
  <td>  <p> {{$post->body}} </p> </td>
  <td> <form action="{{route('posts.edit',$post->id)}}" method="get">
    <button>Edit Task</button>
    </form>
    <form action="{{route('posts.destroy',$post->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Delete Task</button>
        </form></td>
  @endforeach

  </tbody>
</table>
 
<a href="{{route('home')}}"> Return home</a>
<a href="{{route('posts.show',$post->id)}}"> Return Deletes</a>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>