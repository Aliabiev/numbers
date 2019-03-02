<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   	<link rel="stylesheet" type="text/css" href="style.css">
<title>Калькулятор</title>	
</head>
<body>
<div class="header"><h2>Конвертер римских и арабских чисел </h2> 
</div>
<br><br><br>
<div class="row">
    
    <div class="col-sm-4">
    <form action='' id='forma' method="POST">
    <h4>Введите римское или <br>арабское число от 1 до 3999</h4>
    <input type="textarea" name="numA"><br>
    </div>

    <div class="col-md-4">
    <br><br><br>
    <button> <a class="btn"><i class="fas fa-angle-double-right fa-3x"></i></a></button>
    </div>
    </form>

    <div class="col-md-4">
    <h4>Результат конвертации:</h4><br>
    <input type="text" name="numB" id="result">
    </div>

</div>

<script type="text/javascript">
	let forma = document.getElementById('forma');
	let result = document.getElementById('result');
    forma.addEventListener('submit', function(e)
    {
    	e.preventDefault();
    	let req = new XMLHttpRequest();
    	req.addEventListener('readystatechange', function()
        {
            if(req.readyState == 4)
            {
               if(req.status == 200)
               {
         	      let response = req.responseText;
         	      console.log(response);
                  result.value = response;
               }
            };
    	})
      req.open("POST", "result.php", true);
      let form_data = new FormData(forma);
      req.send(form_data);
    })
</script>





