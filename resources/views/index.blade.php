<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    p{
      margin: 0;
    }
    input{
      width: 150px;
      margin: 1px 0;
    }
    li{
      color: red ;
      font-weight: bold;
    }
  </style>
  <title>Lesson 9</title>
</head>

<body>
  <form action="/" method="POST">
    @csrf
    <p>氏名</p>
    <input type="text" name="name" maxlength="20">
    <p>メールアドレス</p>
    <input type="email" name="email" maxlength="255"><br>
    <button type="submit">送信する</button>

    @if (count($errors) > 0)
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif
    
   </form>

</body>

</html>