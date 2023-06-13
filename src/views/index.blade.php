<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Weather Info</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    <h1>Get Weather Info</h1>
                </div>
                
                <div class="card-body">
                    @if(isset($temp))
                    <h3 class="text-center">Temperature: {{ $temp }}&deg;C</h3>
                    @endif
                    
                    <form name="weather-info" id="weather-info" method="post" action="{{url('weather-info')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">City</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="Enter city" required="">
                        </div>
                        <button type="submit" class="btn btn-primary">Send Request</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>