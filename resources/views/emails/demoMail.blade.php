<!DOCTYPE html>
<html>
<head>
    <title>Geeklickservices.com</title>
</head>
<body>
    <h1>{{ $mailData['title'] }}</h1>
    <h3>{{ $mailData['body'] }}</h3>
  
    
    @php
    $year = date("Y");
    @endphp
    <h5><a href='https://geeklickservices.com'>Geeklick Services</a> &copy; {{ $year }}All Rights Reserved</h5>
</body>
</html>