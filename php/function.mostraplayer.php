<?php

	header('Content-type:html/text; charset:utf-8');

	

	function mostrarPlayer($id_li){


		switch ($id_li) {
			case '1':
				echo "<a href='testplayercomLadoCruz.html' target='player'><img src='_audios/O Outro Lado da Cruz/ladocruzMin.jpg' ></a>";
				break;

			case '2':
				echo "<a href='dormindoForaPlayer.html' target='player'><img src='_audios/Dormindo Fora/dormindoFMin.jpg' ></a>";
				break;

			case '3':
				echo "<a href='VitoriaPeloSangue.html' target='player'><img src='_audios/Vitória pelo Sangue/vitoriaPS-capaMin.jpg' ></a>";
				break;

			case '4':
				echo "<a href='emConstrucao.html' target='player'><img src='_audios/Em Construção/EMCONT-capaMin.png' ></a>";
				break;
			
			case '5':
				echo "<a href='AFamiliaQueDeusProjetou.html' target='player'><img src='_audios/A Familia que Deus Projetou/AFamQDProj-capaMin.jpg' ></a>";
				break;

			case '6':
				echo "<a href='SomenteUmaGotadoSanguedeJesus.html' target='player'><img src='_audios/Somente Uma Gota do Sangue de Jesus/SOMUGSJ-capa.jpg' class='ico'></a>";
				break;
			default:
				echo "Você ainda não possui livros em sua coleção! ";
				echo "Entre em contato com o Administrador do Sistema. ";
				break;
		}
	}

	mostrarPlayer($id_li);
?>