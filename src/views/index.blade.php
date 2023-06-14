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
            <div class="card m-5">
                <div class="card-header text-center font-weight-bold">
                    <h1>Get Weather Info</h1>
                </div>

                <div class="card-body">
                    @if(isset($error))
                    <div class="row p-3">
                        <div class="col">
                            <h3 class="text-center text-danger">{{ $error }}</h3>
                        </div>
                    </div>
                    @endif
                    @if(isset($temp))
                    <div class="row p-3">
                        <div class="col">
                            <h3 class="text-center text-success">Today {{ $city }}'s temperature is {{ $temp }}&deg;C</h3>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col">
                            <form name="weather-info" id="weather-info" method="post" action="{{url('weather-info')}}">
                                @csrf
                                <div class="row form-group">
                                    <div class="col">
                                        <input type="text" id="city" name="city" class="form-control" placeholder="Enter City, State or Country" required="">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary">Send Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>