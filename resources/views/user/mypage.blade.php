<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>mypage</h1>
  <h2>ようこそ、{{ $current_user->name }}さん。</h2>
  {{-- <h2>あなたは{{ Auth::user() }}</h2> --}}
</body>
</html>
