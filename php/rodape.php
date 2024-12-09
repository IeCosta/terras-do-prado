		<footer>

		<div class="rodape">
			Ao visitar a nossa página, está a concordar com o uso de cookies conforme descrito nos nossos
			<a href="./termos.php">Termos de Serviço, Política de Cookies e Outros.</a>
			<br>
			

			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="mailto:terrasdoprado@sapo.pt" target="_blank">
				&copy; 2023 Terras do Prado SA - Todos os direitos reservados.
			</a>
			&nbsp;&nbsp;
			<a href="https://www.livroreclamacoes.pt/Inicio/" target="_blank">
				Livro de Reclamações
			</a>
			<br>
			<a href="#">Desenvolvido por ALIVIC - Web Solutions Development.</a>
		</div>

		</footer>


		<div class="botao-topo sticky-bottom text-center">
			<a href="#">
				<img src="../img/topo.png" alt="">
			</a>
		</div>

	</body>

</html>

<script>
	const botaoTopo = document.querySelector(".botao-topo");
	const logotipoNavbar = document.querySelector(".navbar-brand");

	window.addEventListener("scroll", function(event){
	if (window.scrollY >= 100) {
	botaoTopo.classList.add("botao-topo-mostrar");
	botaoTopo.classList.remove("botao-topo-esconder");
	logotipoNavbar.classList.add("navbar-brand-mostrar");
	logotipoNavbar.classList.remove("navbar-brand-esconder");
	} else {
	botaoTopo.classList.add("botao-topo-esconder");
	logotipoNavbar.classList.add("navbar-brand-esconder");
	}
	});


//////// colocar animação nas imagens pela posição do scroll ///////////////////////
	const animacao1 = document.querySelector(".imagem-animacao1");
	const animacao2 = document.querySelector(".imagem-animacao2");
	const animacao3 = document.querySelector(".imagem-animacao3");
	const animacao4 = document.querySelector(".imagem-animacao4");
	const animacao_cartao1 = document.querySelector(".cartao-animacao1");
	const animacao_cartao2 = document.querySelector(".cartao-animacao2");
	const animacao_cartao3 = document.querySelector(".cartao-animacao3");
	const animacao_cartao4 = document.querySelector(".cartao-animacao4");

	let windowHeight = window.innerHeight;

	const pos_elemento1 = windowHeight;
	//const pos_elemento1 = 650;
	const altura_seccao = 650;

	window.addEventListener("scroll", function(event){
		if ((window.scrollY >= pos_elemento1) && (window.scrollY <= pos_elemento1 + altura_seccao)) {
			animacao1.classList.add("slide-right");
			animacao1.classList.remove("slide-left");
			animacao_cartao1.classList.add("scale-up-center");
			animacao_cartao1.classList.remove("scale-down-center");
		} else {
			animacao1.classList.add("slide-left");
			animacao_cartao1.classList.add("scale-down-center");
		}

		if ((window.scrollY >= pos_elemento1 + altura_seccao) && (window.scrollY <= pos_elemento1 + 2*altura_seccao)) {
			animacao2.classList.add("slide-right");
			animacao2.classList.remove("slide-left");
			animacao_cartao2.classList.add("scale-up-center");
			animacao_cartao2.classList.remove("scale-down-center");
		} else {
			animacao2.classList.add("slide-left");
			animacao_cartao2.classList.add("scale-down-center");
		}

		if ((window.scrollY >= pos_elemento1 + 2*altura_seccao) && (window.scrollY <= pos_elemento1 + 3*altura_seccao)) {
			animacao3.classList.add("slide-right");
			animacao3.classList.remove("slide-left");
			animacao_cartao3.classList.add("scale-up-center");
			animacao_cartao3.classList.remove("scale-down-center");
		} else {
			animacao3.classList.add("slide-left");
			animacao_cartao3.classList.add("scale-down-center");
		}

		if ((window.scrollY >= pos_elemento1 + 3*altura_seccao) && (window.scrollY <= pos_elemento1 + 4*altura_seccao)) {
			animacao4.classList.add("slide-right");
			animacao4.classList.remove("slide-left");
			animacao_cartao4.classList.add("scale-up-center");
			animacao_cartao4.classList.remove("scale-down-center");
		} else {
			animacao4.classList.add("slide-left");
			animacao_cartao4.classList.add("scale-down-center");
		}
	});




//////// outra forma apenas pela posição da imagem na janela ///////////////////////

// 	const images = document.querySelectorAll(".imagem-animacao"); //armazena todos os elementos da mesma class

// 	let windowHeight = window.innerHeight;//armazena a altura da janela

// //Como o eixo Y da página começa no topo, essa posição é igual a 0. A base da página será igual a altura que foi atribuída a variável windowHeight.
// // Se bounding.bottom, a base da imagem, for maior que windowHeight, a imagem não está dentro do viewport, mas abaixo da área visível, total ou parcialmente.
// // Se bounding.top, o topo da imagem, for menor que 0, a imagem não está dentro do viewport, mas acima da área visível, total ou parcialmente.
// // A partir daí, aplicamos as classes correspondentes. E caso nenhuma das lógicas seja verdadeira, removemos as classes da imagem, para que ela tenha sua aparência padrão, estando visível.
// 	function animateImages() {
// 		images.forEach((image) => {
// 			let bounding = image.getBoundingClientRect();
// 			console.log(bounding);
// 			if (bounding.bottom > windowHeight) {
// 			image.classList.add("slide-left");
// 			} else if (bounding.top < 0) {
// 			image.classList.add("slide-right");
// 			} else {
// 			image.classList.remove("slide-right");
// 			image.classList.remove("slide-left");
// 			}
// 		});
// 	}

// // aplicado durante a rolagem da página, adicionamos um listener que vai capturar o scroll e executar a função animateImages().
// 	document.addEventListener("scroll", function () {
// 		animateImages();
// 		document.removeEventListener("scroll", this);
// 	});

// // Além disso, incluímos um listener que vai capturar o redimensionamento da janela, atribuindo a nova altura a variável windowHeight.

// 	window.addEventListener("resize", function () {
// 		windowHeight = window.innerHeight;
// 		window.removeEventListener("resize", this);
// 	});

// // para que a aplicação já adicione as classes as imagens que não estão visíveis para o usuário, executamos a animateImages(), assim que a aplicação é iniciada
// 	animateImages();




</script>