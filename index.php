<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NONA Artesanatos</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/footer.css">
        <!--link do fontawesome-->
        <script src="https://kit.fontawesome.com/62e5760e2b.js" crossorigin="anonymous"></script>
        <!-- link boxicons -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <!-- link css do slider de produto -->
    </head>
    <body>

        <header>
            <div class="container">
                <div class="container-logo">
                    <div class="logo"> <!-- essa div conterá a logo quando estiver pronta -->
                        
                    </div>
                </div>
                <div class="header-content">
                    <div class="header1">
                        <div class="buscar">
                            <input type="text" name="buscar" id="buscar" placeholder="Buscar...">
                        </div>
                        <div class="botoes-menu">
                            <!-- <nav class="nav-links">
                                <ul class="links">
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-heart'></i> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="./paginas-html/pagina-produto.php">
                                            <i class='bx bxs-user'></i> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-cart-alt'></i> 
                                        </a>
                                    </li>
                                </ul>
                            </nav> -->
                            <a href="./paginas-html/pagina-produto.php">link produtos</a>
                        </div>
                    </div>
                    <div class="header2">
                        <ul class="nav-links">
                            <li>
                                <a href="#">Produtos</a>
                            </li>
                            <li>
                                <a href="#">Materiais</a>
                            </li>
                            <li>
                                <a href="#">Marcas</a>
                            </li>
                            <li>
                                <a href="#">Sobre</a>
                            </li>
                            <li>
                                <a href="#">Ajuda</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <section class="slide-imagens">
            <div class="slide">
                <div class="slides">
                    <!-- botões de passar e voltar -->
                    <div id="voltar" class="btn">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div id="next" class="btn">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                    <!-- fim botões de passar e voltar -->

                    <div id="atual" class="image">
                        <img src="./imagens/fundo-artesanato.jpg">
                    </div>

                    <div class="image">
                        <img src="./imagens/1.jpg">
                    </div>

                    <div class="image">
                        <img src="./imagens/2.jpg">
                    </div>

                    <div class="image">
                        <img src="./imagens/3.jpg">
                    </div>
                </div>

                <div class="balls">
                </div>
            </div>
        </section>

        <section>
            <a href="./paginas-html/pagina-cadastro.php">link pagina de cadastro de cliente</a>
        </section>

        <script>
            // SCRIPT DO SLIDE DE IMAGENS

			// essas variáveis pegam os elementos do documento e transformam em variáveis para serem manipulados
			var balls = document.querySelector('.balls')
			var quant = document.querySelectorAll('.slides .image')
			var atual = 0
			var imagem = document.getElementById('atual')
			var next = document.getElementById('next')
			var voltar = document.getElementById('voltar')
			var rolar = true

			// cria uma bolinha de marcação de acordo com a quantidade de slides
			for(let i=0; i< quant.length; i++){
				var div = document.createElement('div')
				div.id = i
				balls.appendChild(div)
			}
			document.getElementById('0').classList.add('imgAtual')

			var pos = document.querySelectorAll('.balls div')

			for(let i=0; i< pos.length; i++) {
				pos[i].addEventListener('click', ()=>{
					atual = pos[i].id
					rolar = false
					slide()
				})
			}

			// botão de voltar
			voltar.addEventListener('click', ()=>{
				atual--
				rolar = false
				slide()
			})
			// botão de passar
			next.addEventListener('click', ()=>{
				atual++
				rolar = false
				slide()
			})

			// essa função é responsável por realizar a rolagem do slide
			function slide(){
				if(atual >= quant.length){
					atual = 0
				}
				else if(atual < 0){
					atual = quant.length-1
				}
				document.querySelector('.imgAtual').classList.remove('imgAtual')
				imagem.style.marginLeft = -1280*atual+'px'
				document.getElementById(atual).classList.add('imgAtual')
			}
			// intervalo de 4s para passar o slide, e se o slide for passar antes disso ele reincia
			setInterval(()=>{
				if(rolar){
				atual++
				slide()
				}
				else{
					rolar = true
				}
			},4000)
		</script>
        
    </body>

    <!-- swiper js para slider de produtos -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- documento javascript do slider de produtos -->
    <script src="js/script.js"></script>
</html>