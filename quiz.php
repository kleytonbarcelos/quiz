<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Slides</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<style>
		body{
			margin: 0 !important;
			border: 0 !important;
			padding: 0 !important;
			background-color: #fafafa;
			text-align: center;
		}
		.container{
			margin-top: 100px;
			max-width: 900px;
		}
		h1{
			color: #fb90a0;
		}
		h4{
			margin-top: 10px;
		}
		.slide{
			background-color: #000;
			box-shadow: 0 0 40px 0 #000;
			color: #fff;
			display: none;
			padding: 30px;
			border: 2px solid #ccc;
			border-radius: 30px;
			text-align: center;
		}
		.concordo{
			min-width: 300px;
			background-color: #00da0b !important;
			color: #000 !important;
			border-radius: 15px;
			padding: 10px;
			font-size: 28px;
			font-weight: bold;
			margin: 30px 20px 0 20px;
			cursor: pointer;
		}
		.resposta{
			min-width: 300px;
			background-color: #F83E5A !important;
			color: #000 !important;
			border-radius: 15px;
			padding: 10px;
			font-size: 28px;
			font-weight: bold;
			margin: 30px 20px 0 20px;
			cursor: pointer;
		}
		.header{
			background-color: #000;
			margin: 0;
			color: #fff;
			padding: 10px;
		}
		footer{
			margin-top: 50px;
			text-align: center !important;
			font-size: 12px;
		}
		small{
			font-size: 9px;
		}		
		footer a{
			text-decoration: none;
			text-transform: uppercase;
			font-weight: bold;
		}
		.group{
			display: flex;
			flex-direction: row;
			justify-content: center;
		}
		@media only screen and (max-width: 600px) {
			.container{
				margin-top: 10px;
			}
			.concordo{
				min-width: auto;
			}
			.resposta{
				min-width: auto;
			}
			button{
				margin-top: 10px;
				width: 200px;
			}
			.group{
				display: flex;
				flex-direction: column;
				justify-content: center;
			}
		}
	</style>
</head>
<body>
	<!--<div class="header">
		<h4>Esse método servirá para você?</h4>
		<p>Responda o teste abaixo e descubra.</p>
	</div>-->
	<div class="container">
		<div class="slide">
			<h1>Pergunta 1</h1>
			<h4>Você realmente quer descobrir esse segredo?</h4>
			<div class="group">
				<div class="resposta" onclick="next()">SIM</div>
				<div class="resposta" onclick="next()">NÃO</div>
			</div>
		</div>
		<div class="slide hide">
			<h1>Pergunta 2</h1>
			<h4>Você promete não revelar para ninguém?</h4>
			<div class="group">
				<div class="resposta" onclick="next()">SIM</div>
				<div class="resposta" onclick="next()">NÃO</div>
			</div>
		</div>
		<div class="slide hide">
			<h1>Pergunta 3</h1>
			<h4>O vídeo a seguir tem um limite para pouquíssimas pessoas verem ao mesmo tempo... Você pretende ver até o fim?</h4>
			<div class="group">
				<div class="resposta" onclick="next()">SIM</div>
				<div class="resposta" onclick="next()">NÃO</div>
			</div>
		</div>
		<div class="slide hide">
			<div>Parabéns! Antes que você assista a apresentação nós simplesmente pedimos que cada pessoa aceite nossos 3 termos de uso.</div>
			<ul style="list-style-type: decimal;text-align: left;margin-top: 40px;font-size: 12px;">
				<li>Não use esse método para brincar com os sentimentos de homens. Apenas use o método com homens solteiros, e que você deseja muito ter um relacionamento.</li>
				<li>Essa apresentação irá ficar disponível por tempo limitado, e nosso servidor permite apenas 100 pessoas por vez. Se você não deseja usar a sua vaga , por favor feche o navegador AGORA mesmo. Assim outra mulher na lista de espera pode aproveitar esta oportunidade.</li>
				<li>Se você concorda com todos termos acima, clique no botão "Eu concordo" para poder assistir a esta apresentação privada.</li>
			</ul>
			<div class="concordo"> Eu concordo &raquo;</div>
		</div>
		<footer>
			<div><a target="_blank" href="./quiz/privacidade.html">Política de Privacidade</a>&nbsp;&nbsp;<a target="_blank" href="./quiz/termos.html">Termos de uso</a></div>
			<br />
			<small>Este site não faz parte do Facebook ou a qualquer entidade do Facebook. Depois que você sair do Facebook, a responsabilidade não é deles e sim do nosso site. Realizamos todos os esforços para indicar claramente e mostrar todas as provas do produto e usamos resultados reais. Nós não vendemos o seu e-mail ou qualquer informação para terceiros. Jamais realizamos nenhum tipo de spam. Se você tiver alguma dúvida, sinta-se à vontade para usar o link de contato e falar conosco em horário comercial de Segunda a Sextas das 09h00 ás 18h00. Lemos e respondemos todas as mensagens por ordem de chegada.</small>
			<br /><br />
			<div>Todos os direitos reservados. &copy; 2022</div>
		</footer>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="./quiz/script.min.js"></script>
</html>