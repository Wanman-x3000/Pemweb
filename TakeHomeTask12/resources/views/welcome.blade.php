<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Info Cuaca</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body style="background-color: navy;">
  
        <input type="text" id="city">
        <button id="GetWeatherInfo">Cari</button>
        
        <div id="show" style="color: wheat;"></div>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#GetWeatherInfo").click(function(){
                    var city=$("#city").val();
                //your API key
                var key='bea64792551047ca67bb92297d8c3846'; 
    
                $.ajax({
                    url:'http://api.openweathermap.org/data/2.5/weather',
                    dataType:'json',
                    type:'GET',
                    data:{q:city ,appid:key},
    
                    success:function(data){
                        var content = '';                    
                        $.each(data.weather, function (index, val) {
                            var temperatur = Math.round(data.main.temp);
                            var celcius = temperatur - 273;
                            var humidity = data.main.humidity;
                            var kondisi = data.weather[0].main;
                            var description = data.weather[0].description;
                            var icon = data.weather[0].icon+'.png';
                            content += '<p><b> Temperature : ' + celcius + '&deg; C</b></p>';
                            content += '<p><b> Humidity : ' + humidity + '</b></p>';
                            content += '<p><b> Weather : ' + kondisi + '[' + description + ']' + '</b></p>';
                            content += '<p><img src=http://openweathermap.org/img/wn/' + icon + '>' + '</p>';
                        });
                        $("#show").html(content);
                    }
                });
            });
            });
    
        </script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
    </body>  
</html>
