<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Email</title>
</head>
<body>
    <h1>Contact Us Form Submission</h1>
    <p>Name: {{ $data['name'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
    <p>Message:</p>
    <p>{{ $data['message'] }}</p>
</body>
</html>
