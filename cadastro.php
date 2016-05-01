<!DOCTYPE HTML>
<html lang="pt-BR">
	<head>
		<title>Concursando Game Quiz</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css"/>
	</head>
	<body>
		<!--HEADER-->	
		<div class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container">
				
				<div class="navbar-header">
				
					<a href ="index.php" class = "navbar-brand">Concursando</a>
					<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
						<span class = "icon-bar"></span>
					</button>
					
				</div>
				<!--MENU-->	
				<div class = "collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href = "profile.php" >Perfil</a></li>
						<li><a href = "#" >Ranking</a></li>
						<li><a href = "#" >Sobre</a></li>
						<li class="dropdown">
							<a href = "#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">
									<label class="sr-only " for="exampleInputEmail3">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
								</a></li>
								<li><a href="#">
									<label class="sr-only" for="exampleInputPassword3">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
								</a></li>
								<li class="navbar-default">
										<center><a href="#" class="navbar-btn btn-default btn-sm">Cadastrar</a>
										<button type="submit" class="btn btn-primary btn-sm">Entrar</button></center>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<!--FIM MENU-->
			</div>
		</div>
		<!--FIM HEADER-->
		
		<!--FORMULARIO DE CADASTRO-->	
		<div class = "container">
			<div class = "jumbotron">
				<center><h2>Cadastro</h2></center><br>
			</div>
		</div>
		<div class = "container">
			<div class = "row">
				
				<div class="col-md-6">
					<div class = "form-inline">
						<div class="form-group">
							<label for="exampleInputName2">Nome:</label>
							<input type="text" class="form-control" id="exampleInputName2" placeholder="Nome Completo">
							
							<label for="exampleInputEmail2">E-mail:</label>
							<input type="email" class="form-control" id="exampleInputEmail2" placeholder="hygor.azevedo@example.com">
						</div>
					</div><br>
					
					<div class= "form-inline">
						<label for="exampleInputName2">Sexo:</label>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Masculino
						</label>
						<label class="radio-inline">
							<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Femininos
						</label>
					</div><br>
					<label for="exampleInputName2">Data de nascimento:</label>
					<div class = "container">
						<div class = "row">
						
							<div class="col-md-1">
							
								<select class="form-control">
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>16</option>
								<option>17</option>
								<option>18</option>
								<option>19</option>
								<option>20</option>
								<option>21</option>
								<option>22</option>
								<option>23</option>
								<option>24</option>
								<option>25</option>
								<option>26</option>
								<option>27</option>
								<option>28</option>
								<option>29</option>
								<option>30</option>
								<option>31</option>
								</select>
								
							</div>
							<div class="col-md-1">
							
								<select class="form-control">
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
								</select>
								
							</div>
							<div class="col-md-1">
							
								<select class="form-control">
								<option>2016</option>
								<option>2015</option>
								<option>2014</option>
								<option>2013</option>
								<option>2012</option>
								<option>2011</option>
								<option>2010</option>
								<option>2009</option>
								<option>2008</option>
								<option>2007</option>
								<option>2006</option>
								<option>2005</option>
								<option>2004</option>
								<option>2003</option>
								<option>2002</option>
								<option>2001</option>
								<option>2000</option>
								</select>

							</div>
						</div>
					</div><br>
					<div class = "form-inline">
						<div class="form-group">
							<label for="exampleInputName2">Apelido:</label>
								<input type="text" class="form-control" id="exampleInputName2" placeholder="Nome ficticio">
							<label for="exampleInputName2">Password:</label>
								<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
						</div>
					</div><br>
					
				</div>
				<div class="col-md-6">
					<h3>Subtitulo 1</h3>
					<p>Manual positioning of feedback icons is required for inputs without a label and for 
					input groups with an add-on on the right. You are strongly encouraged to provide labels 
					for all inputs for accessibility reasons. If you wish to prevent labels from being displayed,
					hide them with the .sr-only class. If you must do without labels, adjust the top value
					of the feedback icon. For input groups, adjust the right value to an appropriate pixel
					value depending on the width of your addon.</p>
				</div>
			</div>
		</div>
		<!--FIM FORMULARIO-->
				
		<div class = "navbar navbar-default navbar-fixed-bottom">
		
			<div class = "container">
				 <p class = "navbar-text pull-left">Site criado por Hygor Azevedo</p>
				 <a href="https://www.facebook.com/hygor.delimaazevedo" class="navbar-btn btn-danger btn pull-right">Curta a pagina</a>
			</div>
			
		
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>