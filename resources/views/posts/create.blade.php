<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <style>
         body{
         width: 90%;
         height: 80vh;
        display: flex;
        justify-content: center;
        align-items: center;
        /* position: relative; */
      }
      ::selection{
        background-color: #009879;
        color: white;
      }
        .container{
         width: 600px;
         height: 600px;
         display: flex;
         justify-content: center;
         align-items: center;
        flex-direction: column;
        }
        .container h1{
            font-size: 35px;
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          text-align: center;
          color: #009879;
        }
        .container form{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 25px;
        }
        .container form input{
                width: 350px;
                padding: 15px 30px;
                margin-bottom: 35px;
                font-size: 18px;
                box-shadow:0px 2px 5px 0px rgba(0, 0, 0, 0.16);
                border: none;
        }
        .container form input:focus{
            border: none;
            outline: none;
        }
        .container form input:last-child{
            background-color:#009879 ;
            color: white;
            width: 150px;
            padding: 15px 30px;
            border-radius: 12px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Let's Create Tasks</h1>
        <form action="{{route('posts.store')}}" method="post">
        @csrf
            <input type="text" name="title" placeholder="Title Of The Task" value="{{old('title')}}">
            {{ $errors->first('title') }}
            <input type="text" name="body"  placeholder=" The Task" value="{{old('body')}}">
            {{ $errors->first('body') }}
            <input type="submit" value="Done">
        </form>
    </div>
    
</body>
</html>