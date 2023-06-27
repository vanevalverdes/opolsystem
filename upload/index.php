<!doctype html>
<html lang="en">
  <head>
    <title>Create account on database</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body>

<div class="container">

        <form action="/upload/receive.php" method="POST" enctype="multipart/form-data" class="mt-5">
            <table width="350" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000000">
                <tr>
                    <td height="85" align="center" valign="middle" bgcolor="#FFFFFF">
                        <div align="center">
                            <select name="desk" required class="form-control">
                                <option value="">Seleccione Mesa</option>
                                <option value="1">Mesa 1</option>
                                <option value="2">Mesa 2</option>
                                <option value="3">Mesa 3</option>
                            </select>
                            <br>
                            <input name="imagen" type="file" maxlength="150" class="form-control">
                            <br><br>                                     
                            <input type="submit" value="Agregar" name="enviar" style="cursor: pointer" class="btn btn-success">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
</div>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>