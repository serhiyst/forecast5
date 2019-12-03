<!DOCTYPE html>
<html>
  <head>
    <title>Forecast</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>
      <script src="{{ asset('js/ajax.js') }}"></script>
  </head> 
  <body>
   	<div class="container">
   	  <div class="col-md-4 mb-3">
        <input type="text" class="form-control" id="search" name="search" placeholder="What is your city?">
        <button class="btn btn-primary" id="123">Search</button> 
      </div>
      <div class ="table" id="forecast">
      </div>
    </div>
  </body>   
</html>