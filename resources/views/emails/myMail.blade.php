<!DOCTYPE html>
<html>
<head>
    <title>Nouveau Message</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    @foreach($details['body'] as $value)
    <p>{{ $value }}</p>
    @endforeach
</body>
</html>
