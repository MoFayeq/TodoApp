<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>

      body{
        display: flex;
        justify-content: center;
        align-items: center;
      }
        .container{
          margin: auto;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        }
        .container h1{
          font-size: 35px;
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          text-align: center;
          color: #009879;
        }
        .container img{
          width: 400px;
          height: 400px;
        }
        .container .buttons{
          width: 100%;
          display: flex;
          /* justify-content: space-between; */
        }
        .buttons button{
          background-color: #009879;
          color: white;
          padding: 15px 35px;
          border-radius: 12px;
          border: none;
          cursor: pointer;
          margin-left:35px ;
          font-size: 16px;
        }
    </style>
</head>
<body>
   <div class="container">
    <h1>Welcome <br>To Our App</h1>
    <img src="3961975.jpg" alt="">
    <div class="buttons">
      <form action="{{route('posts.create')}}" method="get">
      <button >Make Task</button>
      </form>
      {{-- <a href="{{route('create')}}">make post</a> --}}

      {{-- <a href="{{route('posts.index')}}"> list posts </a> --}}
      <form action="{{route('posts.index')}}" method="get">
      <button>Show Task</button>
      </form>
    </div>
   </div>
</body>
</html>