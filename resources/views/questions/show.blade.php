<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show Question</title>
</head>
<body>
<div class="container">
  <h1> {{ $question->title }}</h1>
    <p class="lead">
    {{$question->description}}
    </p>
    <hr />

</div>
</body>
</html>