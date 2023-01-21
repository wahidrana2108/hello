<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Tint</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <form action="">
      <input type="text" name="" id="password" require>
      <div id="error"></div>
      <input type="button" name="submit" id="submit" value="submit">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      let x = document.getElementById('password');
      let error = document.getElementById('error');
      let submit = document.getElementById('submit');

      x.addEventListener('keyup', function(e) {
        console.log(e.which);
        
        if(e.which>=65 && e.which<=122){
          var len = x.value.length;
          if(len == 6){
            error.innerHTML ='Ok';
            submit.removeAttribute('disabled');
          }
          else{
            error.innerHTML ='minimum value must be 6 digits';
            submit.setAttribute('disabled','true');
          }
          
        }
        else{
          error.innerHTML ='Invalid';
        }
      });

    </script>
  </body>
</html>