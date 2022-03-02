

<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Finalizar Compra</title>
	    <link rel="stylesheet" href="css/finalizarCompras.css">
	    <meta name="viewport" content="width=device-width, initial-scale=1" />
	    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
        rel="stylesheet">
	</head>
	<body>
	
		<header>
		
		     <div class="container-nome-usuario">Bem vindo(a) <label>

			</label></div>
		
			<div id="tiulo-header-2"><strong style="color: #fff;">Nhantumbo Computer Solutions</strong></div>

			<div class="container-conta-desejos">

				<ul>

					<a href="minha-conta.php" class="material-icons" id="icone-minha-conta">account_circle</a>

					<a href="minha-conta.php" id="minha-conta">Minha conta</a>

					<a href="lista-desejo.php" class="material-icons" id="icone-lista-desejo">favorite_border</a>

					<a href="lista-desejo.php" id="lista-desejo">A minha lista de desejos</a>

				</ul>

			</div>	
		
		</header>


		<div class="fundo-modal-menu-mobile"></div>
		
			<div class="modal-menu-mobile">
			
				<ul>
			
					<div class="li">
				
						<a href="index.php"><strong>INICIO</strong></a>
					
					</div>
					
					<div class="li">
					
						<a href="sobre-nos.php"><strong>SOBRE NÓS</strong></a>
					
					</div>
					
					<div class="li">
					
						<a href="login.php"><strong>CADASTRO & LOGIN</strong></a>
						
					
					</div>
					
					<div class="li">
					
						<a href="#"><strong>CARREGADORES DE LAPTOPS</strong></a>
						
					</div>
					
					<div class="li">
					
						<a href="#"><strong>TECLADOS DE LAPTOPS</strong></a>
					
					</div>
					
					<div class="li">
					
						<a href="#"><strong>MOUSES DE LAPTOPS</strong></a>
						
					</div>
					
					<div class="li">
					
						<a href="#"><strong>LCD'S DE LAPTOPS</strong></a>
						
					</div>
					 
					<div class="li">
					
						<a href="#"><strong>BATERIAS DE LAPTOPS</strong></a>
						
					</div>
					
					<div class="li">
					
						<a href="#"><strong>DISCOS RÍGIDOS</strong></a>
						
					</div>
					
					<div class="li">
					
						<a href="#"><strong>ROUTER'S WIFI</strong></a>
						
					</div>
					
					<div class="li">
					
						<a href="#"><strong>PROCESSADORES</strong></a>
						
					</div>
					
					<div class="li">
					
						<a href="#"><strong>CONECTORES RJ45</strong></a>
						
					</div>
					
					<div class="li">
					
						<a href="#"><strong>MASSAS TÉRMICAS</strong></a>
						
					</div>
					
					<div class="li">
					
						<a href="#"><strong>MEMÓRIAS RAM</strong></a>
						
					</div>
					
				</ul> <!----.modal-menu-mobile ul------>
			
			</div> <!-----.modal-menu-mobile---->





		<div style="transform: translateY(45px);">
	
	    <img id="logo-principal" src="img/logo-ncs.jpg">

  
	
		<nav>
		
			<ul>
			
				<a href="index.php">INICIO</a>
				
				<a href="sobre-nos.php">SOBRE NÓS</a>
				
				<a href="login.php" style="position:absolute; float:right;">CADASTRO & LOGIN</a>
			
			
			</ul>
		
		</nav>
		
		<div class="container-container-carrinho-2" onmouseover="openModalCarrinho()" onmouseout="closeModalCarrinho()">
		
			<a href="carrinho-compras.php" style="text-decoration:none"><div class="container-carrinho-2"><div class="material-icons" id="carrinho-icone-2">shopping_cart</div></div></a>
		    
			<a href="carrinho-compras.php" style="text-decoration:none"><div id="titulo-carrinho-2"><strong>CARRINHO DE COMPRAS</strong></div></a>
		
			<a href="carrinho-compras.php" style="text-decoration:none">
		
			<div class="container-item-carrinho">
		
				<ul>
				
					<li class="quantidade-item-carrinho-2"><strong>0 item</strong></li>
					
					<li style="margin:-2px 10px; color:#074ab5"><strong>-</strong></li>
					
					<li class="total-carrinho-2"><strong>0,00 MZN</strong></li>

					<div class="hidden-preco-total" style="display:none"></div> 

					<div class="hidden-preco-sub-total" style="display:none"></div>
			
				</ul>
		
			</div>
			
			</a>
		
		</div> <!-----.container-container-carrinho-2---------->

		<!--<a href="carrinho-compras.php"><div class="quantidade-item-carrinho-1">0</div></a>--->
	
		<div class="barra-principal">
		
		  <div class="container-menu" onclick="openMenuMobile()">
		  
			<div class="material-icons" id="menu-icone">&#9776;</div>
		  
		  </div> <!------.container-menu-mobile---->
		 
		  
		  <div class="container-menu-tablet" onmousemove="openMenuTablet()" onmouseout="closeMenuTablet()">
		  
			<div class="material-icons" id="menu-icone-tablet">&#9776;</div>
		  
		    <div id="titulo-menu-tablet"><strong>Itens da Loja</strong></div>
		  
		  </div> <!------.container-menu-tablet---->
		  
		  <div class="container-menu-pc" onmousemove="openMenuPc()" onmouseout="closeMenuPc()">
		  
			<div class="material-icons" id="menu-icone-pc">&#9776;</div>
		  
		    <div id="titulo-menu-pc"><strong>Itens da Loja</strong></div>
		  
		  </div> <!------.container-menu-pc---->
		  
		  <div class="container-categorias" style="display:none;">
		  
			<div id="titulo-categorias">Categorias</div>
			
			<div class="material-icons" id="arrow-categorias">arrow_drop_down</div>
		  
		  </div> <!----.container-categorias---->
		  
		  <div class="container-pesquisar">
		  
			<input type="text" id="campo-pesquisar" placeholder="Pesquisar..." style="background:#fff; border:1px solid #fff">
		  
		    <div class="container-lupa-1" style="background: #184e6e;"><div class="material-icons" id="lupa-icone">search</div></div>
		  
		    <div class="container-lupa-2" style="#074ab5; background: #184e6e;"><label id="pesquisar-icone">Pesquisar</label></div>
		   
			<a href="carrinho-compras.php" style="text-decoration:none">
			  
				<div class="container-carrinho-1" onmouseover="openModalCarrinho()" onmouseout="closeModalCarrinho()" style="background: #184e6e;"><div class="material-icons" id="carrinho-icone-1">shopping_cart</div></div>

			</a>
		    
		  </div> <!----.container-pesquisar--->
		
		</div> <!-----.barra-principal---->
		
		<div class="modal-carrinho" onmouseover="openModalCarrinho()" onmouseout="closeModalCarrinho()">
	
			<h2 style="text-align:center; text-decoration:underline">CARRINHO</h2>
			
			<div id="titulo-carrinho-vazio">Não tem nenhum item no seu carrinho de compras.</div> 
			
			<div class="ul">
			
				
			
			</div> <!----.modal-carrinho ul----->
		
		</div> <!----.modal-carrinho----->
		
		<div class="mini-modal-carrinho" onmouseover="openModalCarrinho()" onmouseout="closeModalCarrinho()">
		
			<div class="container-total-btn-mini-modal-carrinho">
		
				<div id="mini-modal-carrinho-total"><strong>Total: <span id="carrinho-total" style="font-size:17px; color:#fff">0,00 MT</span></strong></div>
				
				<a href="finalizarCompras.php" style="text-decoration:none">
					
					<div id="btn-ir-para-carrinho">Finalizar compra <div class="material-icons" style="position:absolute; margin-left:10px; color:#fff; font-size:20px">shopping_cart</div></div>
				
				</a>
			
			</div>
			
		</div> <!---.mini-modal-carrinho---->
			
			
			<div class="modal-menu-tablet" onmousemove="openMenuTablet()" onmouseout="closeMenuTablet()">
			
				<ul>
			
					<a href="#"> <div class="material-icons" id="icone-menu-tablet">electrical_services</div> CARREGADORES DE LAPTOPS <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:18px;">arrow_right</div> </a>
					
				    <a href="#" style="transform:translateY(-5px);"> <div class="material-icons" id="icone-menu-tablet" style="transform:translateY(8px)">keyboard</div> TECLADOS DE LAPTOPS <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:52px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-10px);"> <div class="material-icons" id="icone-menu-tablet" style="transform:translateY(8px)">mouse</div> MOUSES DE LAPTOPS <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:72px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-15px);"> <div class="material-icons" id="icone-menu-tablet" style="transform:translateY(8px)">laptop_mac</div> LCD'S DE LAPTOPS <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:82px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-20px);"> <div class="material-icons" id="icone-menu-tablet" style="transform:translateY(8px)">battery_charging_full</div> BATERIAS DE LAPTOPS <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:58px;">arrow_right</div> </a>
				
					<a href="#" style="transform:translateY(-25px);"> <div class="material-icons" id="icone-menu-tablet" style="transform:translateY(8px)">save</div> DISCOS RÍGIDOS <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:95px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-30px);"> <div class="material-icons" id="icone-menu-tablet">router</div>  ROUTER'S WIFI <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:105px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-35px);"> <div class="material-icons" id="icone-menu-tablet" style="transform:translateY(8px)">memory</div> PROCESSADORES <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:90px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-40px);"> <div class="material-icons" id="icone-menu-tablet" style="transform:translateY(8px)">dock</div> CONECTORES RJ45 <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:85px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-45px);"> <div class="material-icons" id="icone-menu-tablet" style="transform:translateY(8px)">vaccines</div> MASSAS TÉRMICAS <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:80px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-45px);"> <div class="material-icons" id="icone-menu-tablet" style="transform:translateY(8px)">storage</div> MEMÓRIAS RAM <div class="material-icons" id="arrow-li-menu-tablet-right" style="position:relative; left:104px;">arrow_right</div> </a>
					
				</ul>
			
			</div> <!-----.modal-menu-tablet---->
			
			<div class="modal-menu-pc" onmousemove="openMenuPc()" onmouseout="closeMenuPc()">
			
				<ul>
			
					<a href="#"> <div class="material-icons" id="icone-menu-pc">electrical_services</div> CARREGADORES DE LAPTOPS <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:18px;">arrow_right</div> </a>
					
				    <a href="#" style="transform:translateY(-5px);"> <div class="material-icons" id="icone-menu-pc" style="transform:translateY(8px)">keyboard</div> TECLADOS DE LAPTOPS <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:52px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-10px);"> <div class="material-icons" id="icone-menu-pc" style="transform:translateY(8px)">mouse</div> MOUSES DE LAPTOPS <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:72px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-15px);"> <div class="material-icons" id="icone-menu-pc" style="transform:translateY(8px)">laptop_mac</div> LCD'S DE LAPTOPS <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:82px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-20px);"> <div class="material-icons" id="icone-menu-pc" style="transform:translateY(8px)">battery_charging_full</div> BATERIAS DE LAPTOPS <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:58px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-25px);"> <div class="material-icons" id="icone-menu-pc" style="transform:translateY(8px)">save</div> DISCOS RÍGIDOS <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:95px;">arrow_right</div> </a>
						
					<a href="#" style="transform:translateY(-30px);"> <div class="material-icons" id="icone-menu-pc">router</div>  ROUTER'S WIFI <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:105px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-35px);"> <div class="material-icons" id="icone-menu-pc" style="transform:translateY(8px)">memory</div> PROCESSADORES <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:90px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-40px);"> <div class="material-icons" id="icone-menu-pc" style="transform:translateY(8px)">dock</div> CONECTORES RJ45 <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:85px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-45px);"> <div class="material-icons" id="icone-menu-pc" style="transform:translateY(8px)">vaccines</div> MASSAS TÉRMICAS <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:80px;">arrow_right</div> </a>
					
					<a href="#" style="transform:translateY(-45px);"> <div class="material-icons" id="icone-menu-pc" style="transform:translateY(8px)">storage</div> MEMÓRIA RAM <div class="material-icons" id="arrow-li-menu-pc-right" style="position:relative; left:104px;">arrow_right</div> </a>
					
				</ul>
			
			</div> <!-----.modal-menu-pc---->
			
			<div class="modal-categorias">
			
				<ul>
				
				    <li class="li-categorias"><div id="lista-categorias">Alimentos</div></li>
					
					<li class="li-categorias"><div id="lista-categorias">Cereais & Farinhas</div></li>
					
					<li class="li-categorias"><div id="lista-categorias">Arroz</div></li>
					
					<li class="li-categorias"><div id="lista-categorias">Farrinha</div></li>
					
					<li class="li-categorias"><div id="lista-categorias">Esparguete & Macarrão</div></li>
					
					<li class="li-categorias"><div id="lista-categorias">Amendoim</div></li>
					
					<li class="li-categorias"><div id="lista-categorias">Fermento</div></li>
				
				</ul>
			
			</div> <!---.modal-categorias--->
			
			<img id="ft" src="img/banner-diagnostico-computador-mesa-laptop.jpg">
			
			<img id="ft-2" style="display:none" src="img/banner-diagnostico-impressora-rede-internet.jpg">
			
				
				<div class="container-total">
					
					<strong>Total:</strong>
					
					<strong id="total">0,00 MZN</strong>
					
					
					</div> <!---.container-total---->
			
			</div> <!---.container-meu-carrinho----->

			<div class="hidden-preco" style="display:none"></div>

			<div class="hidden-preco-total-meu-carrinho" style="display:none"></div> <!---------A classe tem que ser hidden-preco-meu-carrinho--->

			<div class="hidden-preco-sub-total-meu-carrinho" style="display:none"></div>

			<div class="hidden-preco-total-final-meu-carrinho" style="display:none"></div>


			<div class="container-area-pagamento">
				

				<div id="ppplus">
				
				</div>



			</div> <!---.container-area-pagamento---->	
			
			<footer style="background-color:#e3e3e3;">
				
					<div class="container-newsletter">
					
						<div id="titulo-newsletter"><strong><i>SUBSCREVE À NEWSLETTER</i></strong></div>
					
						<form method="POST" action="newsletter.php">

						<input type="email" id="campo-newsletter" placeholder="Digite o seu email..." required>
					
						<button id="btn-newsletter">SUBSCREVER</button>

					</form>
					
					</div> <!--.container-newsletter------>
					
					<div class="container-1-footer">
					
						<div id="titulo-container-1-footer"><strong>Contactos</strong></div>
					
						<ul>
						
							<div class="material-icons" style="margin-left:-42px; transform:translateY(20px); color:#353738">store</div>
						
							<a href>Rua dos Desportistas, Nº 649, Maputo, Moçambique</a>
						
							<div class="material-icons" style="margin-left:-40px; transform:translateY(18px); color:#353738; font-size:20px;">email</div>
						
							<a href>suporte@ncs.co.mz</a>
							
							<div class="material-icons" style="margin-left:-40px; transform:translateY(17px); color:#353738; font-size:20px;">smartphone</div>
						
							<a href>+258 86 628 5000</a>
							
							<i class="fa fa-facebook" style="margin-left:-35px; transform:translateY(16px); color:#353738; font-size:18px;"></i>
							
							<a href>facebook.com/ncs.co.mz</a>
							
							<i class="fa fa-instagram" style="margin-left:-37px; transform:translateY(17px); color:#353738; font-size:19px;"></i>
							
							<a href>instagram.com/ncs.co.mz</a>
						
						</ul>
					
					</div> <!---.container-1-footer---->
				
					<div class="container-2-footer">
					
						<div id="titulo-container-2-footer"><strong>INFORMAÇÃO</strong></div>
					
						<div class="ul">
						
							<a href>Sobre a ncs</a>
							
							<a href>Zona de Entregas</a>
							
							<a href>Política de Entregas</a>
							
							<a href>Política de Devoluções</a>
							
							<a href>Política de Privacidade</a>
							
							<a href>Política de Cookies</a>
							
							<a href>Perguntas Frequentes</a>
						
						</div>
						
					</div> <!---.container-2-footer----->
				
					<div class="container-3-footer">
					
						<div id="titulo-container-3-footer"><strong>MÉTODOS DE PAGAMENTO</strong></div>
					
						<div class="ul">
						
							<img id="" src="img/m-pesa-logo.png">
							
							<img id="" src="img/visa-logo.png">
							
							<img id="" src="img/mastercard-logo.png">
						
						</div>
				
					</div> <!---.container-3-footer----->
				
					<div id="direitos-reservados">NCS © 2021. Todos direitos reservados. Powered by Nhantumbo Computer Solutions</div>
				
				</footer>

			</div>



		
		<script src="https://www.paypalobjects.com/webstatic/ppplusdcc/ppplusdcc.min.js" type="text/javascript"></script>
	    <script src="https://kit.fontawesome.com/8fc5d5da31.js" crossorigin="anonymous"></script> 
		<script src="js/finalizarCompras.js"></script>
	</body>
</html>