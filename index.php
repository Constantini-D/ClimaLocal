<?php 
	require_once 'app/modules/hg-api.php';
	$hg = new HG_API(HG_KEY);
	$clima = $hg->meteorologia();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Clima</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=2, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-3 my-3 border">
        <div class="row">
            <div class="col-12"  align="center">
            	<h1> Clima</h1>
            	<?php if ($hg->is_error() == false): ?>
					<p>Cidade: <span class="badge badge-pill badge-primary"><?php echo ($clima['city']); ?></span></p>
				<?php else: ?>
					<p>Cidade: <span class="badge badge-pill badge-danger">Serviço indisponível no momento!</span></p>
				<?php endif; ?>
            </div>
        </div>

        <br>
        <hr border-color="#fff" box-sizing="border-box"
  width="100%" >
        <br>
         <table border="4px" class="table table-striped">
		  <thead>
			  <tr>
				<td colspan="5" align="center">Informações do clima</td>
			  </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Temperatura</td>
		      <td><span class="badge badge-pill badge-primary"><?php echo($clima['temp']); ?></span></td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Periodo</td>
		      <td><span class="badge badge-pill badge-primary"><?php echo($clima['currently']); ?></span></td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Umidade</td>
		      <td><span class="badge badge-pill badge-primary"><?php echo($clima['humidity']); ?></span></td>
		    </tr>
			  <th scope="row">4</th>
		      <td>Velocidade do vento</td>
		      <td><span class="badge badge-pill badge-primary"><?php echo($clima['wind_speedy']); ?></span></td>
		    </tr></tr>
			  <th scope="row">5</th>
		      <td>Velocidade do vento</td>
		      <td><span class="badge badge-pill badge-primary"><?php echo($clima['description']); ?></span></td>
		    </tr>
		
		  </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
