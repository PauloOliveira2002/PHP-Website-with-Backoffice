<div id="content">
<div class="container">
<h1 class="text-center">Code</h1>
<br>
<h3>Almost Black-Jack MiniGame</h3>
<textarea disabled cols="30" rows="20" class="w-100">package projectofinal;

import java.util.Scanner;
import java.util.Random;

public class projfinal {

	public static void main(String[] args) {

		
		int creditos=100 , aposta , ganhos , cartas , cartad1 , cartad2 , cartaj1 , cartaj2 , cartaj3;
		int totalj , totald , maiscarta , nvitorias=0 , nderrotas=0 , totalganhos=0 , totalperdidos=0 ;
		String sair = " ";
		String historico = " ";
		String lang=" ";
		
		Scanner scan = new Scanner (System.in);
		Random random = new Random ();
		
		
		// SELECIONAR LINGUAGEM
		delay();
		System.out.println("[PT] Olá! Por favor selecione a linguagem. Escreva ENG ou PT");
		delay();
		System.out.println("[ENG] Hi! Please select language. Write ENG or PT");
		lang=scan.next();
		
		
		// PORTUGUES
		if (lang.equals("PT"))
		{
			cScreen();
			
			//INICIANDO
			welcome(); System.out.print("I");
			welcome(); System.out.print("N");
			welcome(); System.out.print("I");
			welcome(); System.out.print("C");
			welcome(); System.out.print("I");
			welcome(); System.out.print("A");
			welcome(); System.out.print("N");
			welcome(); System.out.print("D");
			welcome(); System.out.print("O");
			delay(); System.out.print(".");
			delay(); System.out.print(".");
			delay(); System.out.println(".");
			
			//BEM VINDO
			welcome(); System.out.print("B");
			welcome(); System.out.print("E");
			welcome(); System.out.print("M");
			welcome(); System.out.print(" ");
			welcome(); System.out.print("V");
			welcome(); System.out.print("I");
			welcome(); System.out.print("N");
			welcome(); System.out.print("D");
			welcome(); System.out.print("O");
			welcome(); System.out.print(" ");
			welcome(); System.out.print("A");
			welcome(); System.out.print("O");
			welcome(); System.out.print(" ");
			delay(); System.out.print("ALMOST ");
			delay(); System.out.print("BLACK ");
			delay(); System.out.println("JACK!");
			delay(); System.out.println("");
			
			// REGRAS DO JOGO
			regras();
	
	
			// JOGO - nao = JOGAR | sair = ACABAR O JOGO
			while (!sair.equals("sair") && creditos>0) 
				{
				
				//CASO O JOGADOR TENHA CREDITOS O JOGO COMEÇA
				if(creditos>0)
				{
					//APOSTA
					System.out.println("");
					System.out.println("Créditos: "+creditos+"€");
					delay();
					System.out.println("Qual o valor da sua aposta?");
					aposta=scan.nextInt();
				
					//APOSTA INVALIDA
					if (aposta <= 0)
					{
						System.out.println("");
						delay();
						System.out.println("A aposta é invalida, deverá inrodzir um valor igual ou superior a 1€.");
					}
					
					// JOGO
					else if (aposta>=1 && aposta<=creditos)
					{
						creditos=creditos-aposta;
						
						cScreen();
						
						//1ª CARTA DO DEALER
						System.out.println("");
						System.out.println("");
						System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
						delay();
						System.out.println("Cartas do dealer:");
						delay();
						cartas=random.nextInt(6)+6; //PARA SAIR CARTAS MAIS ALTAS SEMPRE (PARA A CASA TER ALGUMA VANTAGEM)
						System.out.println("["+cartas+"][?]");
						cartad1=cartas;
						
						//CARTAS DO JOGADOR
						System.out.println("");
						delay();
						System.out.println("Suas cartas:");
						delay();
						cartas=random.nextInt(11)+1;
						System.out.print("["+cartas+"]");
						cartaj1=cartas;
						cartas=random.nextInt(11)+1;
						System.out.println("["+cartas+"]");
						cartaj2=cartas;
						System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
						delay();
						
						//TOTAL DE PONTOS DO JOGADOR
						totalj=cartaj1+cartaj2;
						
						//CASO OBTENHA 11+11 AO COMEÇAR
						if (totalj>21)
						{
							System.out.println("Você perdeu! com um total de "+totalj+" pontos. Mais sorte para a proxima!");
							delay();
							System.out.println("Deseja sair?");
							System.out.println("sair --> para sair | nao --> para continuar a jogar");
							sair=scan.next();
							
							nderrotas++;
							totalperdidos=totalperdidos+aposta;
							
							cScreen();
						}
						
						if (totalj<=21)
						{
							System.out.println("Total de pontos atuais: "+totalj);
							delay();
							System.out.println("Deseja mais uma carta? se SIM, digitar 1 . Se NÃO, digitar 2 .");
							maiscarta=scan.nextInt();
							delay();
			
							// CASO O JOGADOR QUEIRA +1 CARTA
							if (maiscarta==1)
							{
								System.out.println("");
								System.out.println("");
								System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
								delay();
								System.out.println("Cartas do dealer:");
								delay();
								System.out.println("["+cartad1+"][?]");
								System.out.println("");
								delay();
								System.out.println("Suas cartas:");
								delay();
								cartas=random.nextInt(11)+1;
								System.out.println("["+cartaj1+"]["+cartaj2+"]["+cartas+"]");
								cartaj3=cartas;
								System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
								delay();
								
								totalj=totalj+cartaj3;
								
								// CASO O JOGADOR PERCA COM A 3ª CARTA
								if (totalj>21)
								{
									System.out.println("Você perdeu! com um total de "+totalj+" pontos. Mais sorte para a proxima!");
									delay();
									System.out.println("Deseja sair?");
									System.out.println("sair --> para sair | nao --> para continuar a jogar");
									sair=scan.next();
									
									nderrotas++;
									totalperdidos=totalperdidos+aposta;
									
									cScreen();
								}
								
								//CASO O JOGO CONTINUE COM A 3 CARTA
								if (totalj<=21)
								{
									System.out.println("Total de pontos atuais: "+totalj);
									delay();
									System.out.println("Clique ENTER para revelar a carta do dealer");
									
									enter();
									
									System.out.println("");
									System.out.println("");
									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									delay();
									cartas=random.nextInt(6)+6; //PARA SAIR CARTAS MAIS ALTAS SEMPRE (PARA A CASA TER ALGUMA VANTAGEM)
									System.out.println("Cartas do dealer:");
									delay();
									System.out.println("["+cartad1+"]["+cartas+"]");
									System.out.println("");
									delay();
									System.out.println("Suas cartas:");
									delay();
									System.out.println("["+cartaj1+"]["+cartaj2+"]["+cartaj3+"]");
									cartad2=cartas;
									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									delay();
									
									totald =cartad1+cartad2;
									
									System.out.println("Total dos seus pontos: "+totalj+" | Total dos pontos do Dealer: "+totald);
									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									delay();
									
									//VITORIA
									if (totalj>=totald || totald>21)
									{
										ganhos= aposta*2;
										creditos= creditos+ganhos;
										totalganhos= totalganhos + aposta;
										
										System.out.println("");
										System.out.println("Parabéns! Ganhou um total de: "+ganhos+"€ !");
										delay();
										System.out.println("Deseja sair?");
										System.out.println("sair --> para sair | nao --> para continuar a jogar");
										sair=scan.next();
										
										nvitorias++;
										
										cScreen();
									}
									
									//DERROTA
									else if (totalj<totald)
									{
										System.out.println("");
										delay();
										System.out.println("Você perdeu! Mais sorte para a próxima!");
										delay();
										System.out.println("Deseja sair?");
										System.out.println("sair --> para sair | nao --> para continuar a jogar");
										sair=scan.next();
										
										nderrotas++;
										totalperdidos=totalperdidos+aposta;
										
										cScreen();
									}
								}
							}	
							
							//CASO O JOGADOR NAO QUEIRA +1 CARTA
							else if (maiscarta==2)
							{
								System.out.println("");
								System.out.println("Clique ENTER para revelar a carta do dealer");
								
								enter();
								
								System.out.println("");
								System.out.println("");
								System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
								delay();
								cartas=random.nextInt(6)+6; //PARA SAIR CARTAS MAIS ALTAS SEMPRE (PARA A CASA TER ALGUMA VANTAGEM)
								System.out.println("Cartas do dealer:");
								delay();
								System.out.println("["+cartad1+"]["+cartas+"]");
								System.out.println("");
								delay();
								System.out.println("Suas cartas:");
								delay();
								System.out.println("["+cartaj1+"]["+cartaj2+"]");
								cartad2=cartas;
								System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
								delay();
								
								totald =cartad1+cartad2;
								
								System.out.println("Total dos seus pontos: "+totalj+" | Total dos pontos do Dealer: "+totald);
								delay();
								
								//VITORIA
								if (totalj>=totald || totald>21)
								{
									ganhos= aposta*2;
									creditos= creditos+ganhos;
									totalganhos= totalganhos + aposta;
									
									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									System.out.println("");
									delay();
									System.out.println("Parabéns! Ganhou um total de: "+ganhos+"€ !");
									delay();
									System.out.println("Deseja sair?");
									System.out.println("sair --> para sair | nao --> para continuar a jogar");
									sair=scan.next();
									
									nvitorias++;
									
									cScreen();
								}
								
								//DERROTA
								else if (totalj<totald)
								{
									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									delay();
									System.out.println("Você perdeu! Mais sorte para a próxima!");
									delay();
									System.out.println("Deseja sair?");
									System.out.println("sair --> para sair | nao --> para continuar a jogar");
									sair=scan.next();
									
									nderrotas++;
									totalperdidos=totalperdidos+aposta;
									
									cScreen();
								}
							}		
						}
					}
				}	
			}
			
			if (creditos == 0)
			{
				delay();
				System.out.println("Acabaram os créditos...");
			}
			
			delay();
			System.out.println("Até uma próxima! sai daqui com um total de "+creditos+"€ !");
			delay();
			System.out.println("Esperamos que tenha gostado, digite <historico> para obter um resumo das suas partidas jogadas!");
			historico=scan.next();
			
			//CASO O JOGADOR QUEIRA O HISTORICO
			if (historico.equals("historico"))
			{
				System.out.println();
				delay();
				System.out.println("Total de Jogos Realizados: "+(nderrotas+nvitorias)+";");
				delay();
				System.out.println("Total de Vitórias: "+nvitorias+";");
				delay();
				System.out.println("Total de Derrotas: "+nderrotas+";");
				delay();
				System.out.println("Total de Dinheiro ganho: "+totalganhos+"€;");
				delay();
				System.out.println("Total de Dinheiro perdido: "+totalperdidos+"€;");
				delay();
				System.out.println("Total: "+(totalganhos-totalperdidos)+"€;");
			}
		}
		
		// ENGLISH
		if (lang.equals("ENG"))
		{
			cScreen();

			// INICIALIZING
			welcome(); System.out.print("S");
			welcome(); System.out.print("T");
			welcome(); System.out.print("A");
			welcome(); System.out.print("R");
			welcome(); System.out.print("T");
			welcome(); System.out.print("I");
			welcome(); System.out.print("N");
			welcome(); System.out.print("G");
			delay(); System.out.print(".");
			delay(); System.out.print(".");
			delay(); System.out.println(".");

			// WELCOME
			welcome(); System.out.print("W");
			welcome(); System.out.print("E");
			welcome(); System.out.print("L");
			welcome(); System.out.print("C");
			welcome(); System.out.print("O");
			welcome(); System.out.print("M");
			welcome(); System.out.print("E");
			welcome(); System.out.print(" ");
			welcome(); System.out.print("T");
			welcome(); System.out.print("O");
			welcome(); System.out.print(" ");
			delay(); System.out.print("ALMOST ");
			delay(); System.out.print("BLACK ");
			delay(); System.out.println("JACK!");
			delay();System.out.println("");

			// GAME RULES
			rules();

			// GAME- no = PLAY | leave = END THE GAME
			while (!sair.equals("leave") && creditos > 0) {

				// IF THE PLAYER HAS CREDITS THE GAME BEGINS
				if (creditos > 0) {
					// BET
					System.out.println("");
					System.out.println("Credits: " + creditos + "€");
					delay();
					System.out.println("What is the value of your bet?");
					aposta = scan.nextInt();

					// INVALID BET
					if (aposta <= 0) {
						System.out.println("");
						System.out.println("The bet is invalid, you must enter an amount equal to or greater than €1.");
					}

					// GAME
					else if (aposta >= 1 && aposta <= creditos) {
						creditos = creditos - aposta;

						cScreen();

						// 1ª DEALER CARD
						System.out.println("");
						System.out.println("");
						System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
						delay();
						System.out.println("Dealer cards:");
						delay();
						cartas = random.nextInt(6) + 6; // TO GET HIGHEST CARDS ALWAYS (FOR THE HOUSE TO HAVE SOME
														// ADVANTAGE)
						System.out.println("[" + cartas + "][?]");
						cartad1 = cartas;

						// PLAYER CARDS
						delay();
						System.out.println("");
						System.out.println("Your cards:");
						delay();
						cartas = random.nextInt(11) + 1;
						System.out.print("[" + cartas + "]");
						cartaj1 = cartas;
						cartas = random.nextInt(11) + 1;
						System.out.println("[" + cartas + "]");
						cartaj2 = cartas;
						System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
						delay();

						// PLAYER TOTAL POINTS
						totalj = cartaj1 + cartaj2;

						// IF HE GETS 11+11 AT BEGINING
						if (totalj > 21) {
							System.out
									.println("You lost! with a total of " + totalj + " points. Better luck next time!");
							delay();
							System.out.println("Do you want to leave?");
							System.out.println("leave --> to leave | no --> to keep playing");
							sair = scan.next();

							nderrotas++;
							totalperdidos = totalperdidos + aposta;
							
							cScreen();
						}

						if (totalj <= 21) {
							System.out.println("Total points: " + totalj);
							delay();
							System.out.println("Do you want one more card? if YES, enter 1 . If NO, enter 2 .");
							maiscarta = scan.nextInt();

							// IF THE PLAYER WANTS +1 CARD
							if (maiscarta == 1) {
								System.out.println("");
								System.out.println("");
								System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
								delay();
								System.out.println("Dealer cards:");
								delay();
								System.out.println("[" + cartad1 + "][?]");
								System.out.println("");
								delay();
								System.out.println("Your cards:");
								delay();
								cartas = random.nextInt(11) + 1;
								System.out.println("[" + cartaj1 + "][" + cartaj2 + "][" + cartas + "]");
								cartaj3 = cartas;
								System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
								delay();

								totalj = totalj + cartaj3;

								// IF THE PLAYER LOST WITH 3º CARD
								if (totalj > 21) {
									System.out.println(
											"You lost! with a total of " + totalj + " points. Better luck next time!");
									delay();
									System.out.println("Do you want to leave?");
									System.out.println("leave --> to leave | no --> to keep playing");
									sair = scan.next();

									nderrotas++;
									totalperdidos = totalperdidos + aposta;
									
									cScreen();
								}

								// IF THE PLAYER CONTINUES WITH 3º CARD
								if (totalj <= 21) {
									System.out.println("Total points: " + totalj);
									delay();
									System.out.println("Click ENTER to reveal the dealer's card.");

									enter();

									System.out.println("");
									System.out.println("");
									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									delay();
									cartas = random.nextInt(6) + 6; // TO GET HIGHEST CARDS ALWAYS (FOR THE HOUSE TO
																	// HAVE SOME ADVANTAGE)
									System.out.println("Dealer cards:");
									delay();
									System.out.println("[" + cartad1 + "][" + cartas + "]");
									System.out.println("");
									delay();
									System.out.println("Your cards:");
									delay();
									System.out.println("[" + cartaj1 + "][" + cartaj2 + "][" + cartaj3 + "]");
									cartad2 = cartas;
									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									delay();

									totald = cartad1 + cartad2;

									System.out.println("Total points: " + totalj + " | Dealer total points: " + totald);
									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									delay();

									// VICTORY
									if (totalj >= totald || totald > 21) {
										ganhos = aposta * 2;
										creditos = creditos + ganhos;
										totalganhos= totalganhos + aposta;

										System.out.println("");
										System.out.println("Congratulations! You won a total of: " + ganhos + "€ !");
										delay();
										System.out.println("Do you want to leave?");
										System.out.println("leave --> to leave | no --> to keep playing");
										sair = scan.next();

										nvitorias++;
										
										cScreen();
									}

									// LOST
									else if (totalj < totald) {
										System.out.println("");
										System.out.println("You lost! Better luck next time!");
										delay();
										System.out.println("Do you want to leave?");
										System.out.println("leave --> to leave | no --> to keep playing");
										sair = scan.next();

										nderrotas++;
										totalperdidos = totalperdidos + aposta;
										
										cScreen();
									}
								}
							}

							// IF THE PLAYER DOES NOT WANT +1 CARD
							else if (maiscarta == 2) {
								delay();
								System.out.println("");
								System.out.println("Click ENTER to reveal the dealer's card.");

								enter();

								System.out.println("");
								System.out.println("");
								System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
								delay();
								cartas = random.nextInt(6) + 6; // TO GET HIGHEST CARDS ALWAYS (FOR THE HOUSE TO HAVE SOME ADVANTAGE)
								System.out.println("Dealer cards:");
								delay();
								System.out.println("[" + cartad1 + "][" + cartas + "]");
								System.out.println("");
								delay();
								System.out.println("Your Cards:");
								delay();
								System.out.println("[" + cartaj1 + "][" + cartaj2 + "]");
								cartad2 = cartas;
								System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
								delay();

								totald = cartad1 + cartad2;

								System.out.println("Total points: " + totalj + " | Dealer total points: " + totald);
								delay();

								// VICTORY
								if (totalj >= totald || totald > 21) {
									ganhos = aposta * 2;
									creditos = creditos + ganhos;
									totalganhos= totalganhos + aposta;

									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									System.out.println("");
									delay();
									System.out.println("Congratulations! You won a total of: " + ganhos + "€ !");
									delay();
									System.out.println("Do you want to leave?");
									System.out.println("leave --> to leave | no --> to keep playing");
									sair = scan.next();

									nvitorias++;
									
									cScreen();
								}

								// LOST
								else if (totalj < totald) {
									System.out.println("-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.-.");
									System.out.println("");
									delay();
									System.out.println("You lost! Better luck next time!");
									delay();
									System.out.println("Do you want to leave?");
									System.out.println("leave --> to leave | no --> to keep playing");
									sair = scan.next();

									nderrotas++;
									totalperdidos = totalperdidos + aposta;
									
									cScreen();
								}
							}
						}
					}
				}
			}

			if (creditos == 0) {
				delay();
				System.out.println("The credits are over...");
			}

			delay();
			System.out.println("See you next time! You leave here with a total of " + creditos + "€ !");
			delay();
			System.out.println("We hope you enjoyed it, type <historic> to get a summary of your games played!");
			historico = scan.next();

			// IF THE PLAYER WANTS HISTORIC
			if (historico.equals("historic")) {
				System.out.println();
				delay();
				System.out.println("Total Games Played: " + (nderrotas + nvitorias) + ";");
				delay();
				System.out.println("Total Wins: " + nvitorias + ";");
				delay();
				System.out.println("Total losses: " + nderrotas + ";");
				delay();
				System.out.println("Total Money Earned: " + totalganhos + "€;");
				delay();
				System.out.println("Total Money Lost: " + totalperdidos + "€;");
				delay();
				System.out.println("Total: " + (totalganhos - totalperdidos) + "€;");
			}
		}
		
		scan.close();
		
	}
	
	//CLEAR SCREEN | LIMPAR ECRA
	static void cScreen() {
		for (int i = 0; i < 60; ++i) 
		{
            System.out.println();
        }
	}
	
	//ENTER
	static void enter() {
		try 
		{
			System.in.read();
		} catch (Exception e) {
		}
	}
	
	//SLOW DELAY | DELAY LENTO
	static void delay() {
		try {
            Thread.sleep(700);
        } catch (Exception e) {
            System.out.println("[PT] Erro no timer | [ENG] Timer error");
        }
	}
	
	//FAST DELAY | DELAY RAPIDO
	static void welcome() {
		try {
            Thread.sleep(250);
        } catch (Exception e) {
            System.out.println("Erro no timer");
        }
	}
	
	//RULES PT | REGRAS PT
	static void regras() {
		delay(); System.out.println("Regras gerais do jogo:");
		delay(); System.out.println("1- O Dealer terá 1 carta aberta de inicio e terá outra que só quando o Jogador terminar a jogada será revelada;");
		delay(); System.out.println("2- O Jogador recebe as suas 2 cartas, caso não esteja satisfeito poderá pedir +1 carta;");
		delay(); System.out.println("3- Caso o jogador ultrapase o valor de 21, automáticamente terá uma derrota e perderá o valor apostado;");
		delay(); System.out.println("4- Quando o jogador estiver satisfeito, dará por terminada a jogada, caso o seu valor seja maior que o do Dealer, ganhará o x2 do valor apostado;");
		delay(); System.out.println("5- O Jogador podrá abandonar o jogo quando quiser no fim de cada partida.");	
		delay();
	}
	
	//RULES ENG | REGRAS ENG
	static void rules() {
		delay(); System.out.println("General game rules:");
		delay(); System.out.println("1- The Dealer will have 1 open card at the beginning and will have another that only when the Player finishes the turn will be revealed;");
		delay(); System.out.println("2- The Player receives his 2 cards, if he is not satisfied he can ask for +1 card;");
		delay(); System.out.println("3- If the player exceeds the value of 21, he will automatically have a defeat and lose the amount bet;");
		delay(); System.out.println("4- When the player is satisfied, he will end the play, if its value is greater than the Dealer's, he will win x2 of the bet amount;");
		delay(); System.out.println("5- The Player can leave the game whenever he wants at the end of each game.");
		delay();
	}
}</textarea>
<hr>
<h3>Quiz MiniGame</h3>
<textarea disabled cols="30" rows="20" class="w-100">package AlgFinal;

import java.util.ArrayList;
import java.util.List;
import java.util.Random;
import java.util.Scanner;

public class TrabFinal {
	public static void main(String[] args) {
		TrabFinal TrabFinal = new TrabFinal();
			 
	int i, j, saldo=100, vAposta=0, ronda = 0, qtQueres = 0, vaGanho =0, vaPerdi=0, qtperg=0;
	int numCorrect=0, numCorrectH=0, numCorrectC=0, numCorrectM=0, numCorrectCG=0, numPerd=0, numPerdH=0, numPerdC=0, numPerdM=0, numPerdCG=0;
	int rnd1, rnd2;
	int bonus = 5;
	String sair= " ";
	String resp=" ";
	String resjogador ="";
	
	
//declarar strings para jogo
	String [][]HistoriaB = {{"Apenas um dos países abaixo fazia parte da URSS - União das Repúblicas Socialistas Soviéticas. Qual deles?\n a) Mongólia \n b) Turquia \n c) Lituania","c"},
							{"Que navegador descobriu, em 1498, o caminho marítimo para a Índia? \n a) D. Afonso Henriques \n b) Pedro Alvares Cabral \n c) Vasco da Gama","c"},
							{"Como se auto-intitulou o regime político derrubado a 25 de Abril de 1974? \n a) Salazarismo \n b) Ditadura \n c) Estado Novo","c"}};

	String [][]CienciasB = {{"Normalmente, quantos litros de sangue uma pessoa tem? \n a) Tem 7 litros\n b) Tem entre 2 a 4 litros \n c) Tem entre 4 a 6 litros","c"},
							{"Quanto tempo a luz do Sol demora para chegar à Terra? \n a) 12 horas \n b) um dia  \n c) 8 minutos","c"},
							{"Qual o maior animal terrestre? \n a) Elefante africano\n b) Dinossauro \n c) Baleia Azul","a"}};
			
	String [][]MusicaB = {{"Completa o titulo da música dos Radiohead: 'Fake Plastic...'\n a)Clouds \n b)Songs \n c)Trees","c"},
							{"Quantos membros compunham nos Backstreet Boys?? \n a) Seis \n b) Quatro \n c) Cinco","c"},
							{"Michael Jackson estreou o moonwalk durante qual música em 1983? \n a) Smooth Criminal \n b) Beat it \n c) Billie Jean","c"}};
	
	String[][]CulturaGeralB ={{"Quem pintou o quadro MonaLisa?\n a) Leonardo Da Vinci \n b) Salvador Dalí \n c) Vincent Van Gogh","a"},
								{"Qual fruta envenenada comeu a Branca de Neve? \n a) Maça \n b) Pêra \n c) Banana","a"},
								{"Qual é a capital da Argentina? \n a) Buenos Aires \n b) Sucre\n c) Santiago","a"}};
	
	String [][]HistoriaA = {{"Em que ano o homem pisou na lua?\n a) 1969 \n b) 1970 \n c) 1068","a"},
							{"Em que cidade aconteceu o acidente na Usina Nuclear de Chernobyl \n a) Pripyat \n b) Chernobyl \n c) Dytyatky","a"},
							{"Qual o país mais novo do mundo?\n a) Sudão do Sul \n b) Kosovo \n c) Timor Leste","a"}};

	String [][]CienciasA = {{"Qual é o planeta mais próximo do sol? \n a) Mercúrio \n b) Júpiter \n c)Neptuno","a"},
							{"Qual é a cor da língua da girafa? \n a) vermelha ou rosa \n b) roza ou azul escuro \n c) verde ou amarelo","b"},
							{"Qual é o único mamífero que voa? \n a) Morcego \n b) Cegonha\n c) Flamingo","a"}};

	String [][]MusicaA = {{"No ano 2016, qual é o nome do músico que ganhou o Prémio Nobel da Literatura?\n a) David Bowie \n b) Frank Ocean \n c) Bob Dylan","c"},
						{"Quantos anos tinha Britney Spears quando seu hit 'Baby One More Time' foi lançado em 1998? \n a) Dezoito \n b) Dezassete \n c) Dezanove","b"},
						{"Qual é o único país a ganhar 3 concursos Eurovision Song consecutivos (1992, 1993 e 1994)? \n a) Inglaterra \n b) Itália \n c) Irlanda","c"}};

	String[][]CulturaGeralA ={{" Em que país nasceu a pintora Frida Kahlo?\n a) Colombia \n b) México \n c) Chile","b"},
							{"Em que país nasceu o personagem de ficção Conde Drácula? \n a) Ucrânia \n b) Roménia \n c) Eslováquia","b"},
				{			"Qual é a arte chamada de sétima arte? \n a) Dança \n b) Fotografia\n c) Cinema","c"}};


	Scanner sc = new Scanner(System.in);
	Random rand = new Random();


//condiçao para o jogo rolar	
		
			System.out.println("Bem-vindo ao....");

		//vai buscar o espaçamento à classe espaco
			espaco a = new espaco();
			
			System.out.println("--QUIZZ TIME--");
		
			espaco b = new espaco();
			
			System.out.println("INSTRUÇÕES:");
			espaco c = new espaco();
			
			System.out.println("O jogo consiste em duas rondas, da mais fácil para a mais dificil");
			System.out.println("Na primeira ronda podes falhar 1 pergunta e o valor que ganhas/perdes é o valor da tua aposta + 5€");
			System.out.println("Na segunda ronda tens de acertar todas as perguntas para chegar ao fim e o valor que está em jogo é o dobro do que tu apostaste no inicio do jogo.");
			System.out.println("Em cada ronda tens de responder a três perguntas");
			System.out.println("Podes escolher entre quatro categorias: Ciências, História, Música ou Cultura Geral");
			System.out.println("Será apresentada uma pergunta, com três opções de escolha");
			System.out.println("BOA SORTE!!");
			
			while (saldo > 0 && resp!=("sair")) {
				saldo=100;
				ronda=0;
	
			//vai buscar o espaçamento maior à classe espaco subclasse start
			c.start();
			System.out.println("O teu saldo inicial é: " +saldo+ "€");
			
			espaco d = new espaco();
			
	
			System.out.println("Quanto quer apostar?");
			vAposta = sc.nextInt();
			
			// variavel auxiliar para calcular o valor que o utilizador vai ganhar/perder na ronda1
			vaGanho = (vAposta+bonus);
	
			//dar espaço entre a introdução e o Jogo
			breakC g = new breakC();
		
			//condição para começar a ronda
				if (vAposta <= saldo) {
					ronda++;
					saldo = saldo-vAposta;
					System.out.println("Vamos começar!");
					espaco e = new espaco();
					System.out.println("RONDA "+(ronda)+"!");
					espaco f = new espaco();
					System.out.println("Se acertares na resposta ganhas "+vaGanho+"€");
					espaco m = new espaco();
					
					// condição para garantir que a ronda tem 3 perguntas
					// e o utilizador só pode perder 2 vezes
						while(qtperg<=2 && numPerd<2) {
							
							//condiçao para garantir que o utilizador apenas insere opçao valida
							do {
								System.out.println("Qual Categoria escolhes? Escreve o número da tua opção:");
								espaco k = new espaco();
								System.out.println(" 1-História\n 2-Ciências\n 3-Música\n 4-Cultura Geral");
								qtQueres = sc.nextInt();
									
								}
								while (qtQueres>4 && qtQueres<1);

				
							if(qtQueres==1) {
								qtperg++;
									for(i=0;i<1;i++) {
										for(j=0;j<1;j++) {
											System.out.println("PERGUNTA NÚMERO "+qtperg);
											espaco l = new espaco();
											//apresentar a pergunta em modo random
											rnd1 = rand.nextInt(HistoriaB.length);
											System.out.println(HistoriaB[rnd1][0]); 
						
										}
									}
									
									System.out.println("Qual é a resposta correta?");
									espaco n = new espaco();
									resjogador = sc.next();
									rnd1=0;
									//condição para verificar se a resposta está correta
									if(resjogador.equals(HistoriaB[rnd1][1])) {
										espaco g1 = new espaco();
										System.out.println("Resposta Correta!!");
										saldo= saldo+vaGanho;
										espaco g2 = new espaco();
										System.out.println("Acabou de ganhar "+ vaGanho);
										System.out.println("O seu saldo atual é "+saldo+"€");
										espaco n4 = new espaco();
										numCorrect++;
										numCorrectH++;
												}
									
										else {
											System.out.println("Não acertaste!");
											saldo = (saldo-vaGanho);
											espaco g3 = new espaco();
											System.out.println("O teu saldo atual é: "+saldo+"€");
											espaco n4 = new espaco();
											numPerd++;
											numPerdC++;
												}
								
											}
				
							else if (qtQueres==2) {
								qtperg++;
									for(i=0;i<1;i++) {
										for(j=0;j<1;j++) {
											System.out.println("PERGUNTA NÚMERO "+qtperg);
											espaco l = new espaco();
											rnd1 = rand.nextInt(CienciasB.length);
											System.out.println(CienciasB[rnd1][0]); 
						
										}
										}
										System.out.println("Qual é a resposta correta?");
										espaco n = new espaco();
										resjogador = sc.next();
					
										rnd1=0;
											if(resjogador.equals(CienciasB[rnd1][1])) {
												espaco g4 = new espaco();
												System.out.println("Resposta Correta!!");
												saldo = saldo+vaGanho;
												espaco g5 = new espaco();
												System.out.println("Acabou de ganhar "+vaGanho);
												System.out.println("O seu saldo atual é "+saldo+"€");
												numCorrect++;
												numCorrectC++;
												espaco n4 = new espaco();
												}
											
												else {
													System.out.println("Não acertaste!");
													saldo= (saldo-vaGanho);
													espaco g5 = new espaco();
													numPerd++;
													numPerdC++;
													System.out.println("O teu saldo atual é: "+saldo+"€");
													espaco n4 = new espaco();
													}
				
													}
				
							else if(qtQueres==3) {
								qtperg++;
									for(i=0;i<1;i++) {
										for(j=0;j<1;j++) {
											System.out.println("PERGUNTA NÚMERO "+qtperg);
											espaco l = new espaco();
											rnd1 = rand.nextInt(MusicaB.length);
											System.out.println(MusicaB[rnd1][0]); 
						
													}
													}
									espaco n = new espaco();
										System.out.println("Qual é a resposta correta?");
											resjogador = sc.next();
					
											rnd1=0;
												if(resjogador.equals(MusicaB[rnd1][1])) {
													espaco f1 = new espaco();
													System.out.println("Resposta Correta!!");
													saldo = saldo+vaGanho;
													espaco g6 = new espaco();
													System.out.println("Acabou de ganhar "+vaGanho);
													System.out.println("O seu saldo atual é "+saldo+"€");
													espaco n4 = new espaco();
													numCorrect++;
													numCorrectM++;
						
													}
													else {
														System.out.println("Não acertaste!");
														saldo = (saldo-vaGanho);
														espaco g7 = new espaco();
														numPerd++;
														numPerdM++;
														System.out.println("O teu saldo atual é: "+saldo+"€");
														espaco n4 = new espaco();
													}
				
													}
				
							else if (qtQueres == 4) {
								qtperg++;
									for(i=0;i<1;i++) {
										for(j=0;j<1;j++) {
											System.out.println("PERGUNTA NÚMERO "+qtperg);
											espaco l = new espaco();
											rnd1 = rand.nextInt(CulturaGeralB.length);
											System.out.println(CulturaGeralB[rnd1][0]); 
										}
										}
									espaco n = new espaco();
									System.out.println("Qual é a resposta correta?");
										resjogador = sc.next();
					
										rnd1=0;
											if(resjogador.equals(CulturaGeralB[rnd1][1])) {
												espaco f2 = new espaco();
												System.out.println("Resposta Correta!!");
												espaco g8 = new espaco();
												saldo = saldo+vaGanho;
												System.out.println("Acabou de ganhar "+vaGanho);
												System.out.println("O seu saldo atual é "+saldo+"€");
												espaco n4 = new espaco();
												numCorrect++;
												numCorrectCG++;
												}
											
												else {
													System.out.println("Não acertaste!");
													saldo = (saldo-vaGanho);
													numPerd++;
													numPerdCG++;
													espaco g9 = new espaco();
													System.out.println("O teu saldo atual é: "+saldo+"€");
													espaco n4 = new espaco();
													}
								
													}
						
			
							
						}
							
									System.out.println("Deseja sair do jogo? Se sim, escreva 'sair', se não, escreva 'nao'");
										resp = sc.next();
										
										//condição para o jogador entrar na segunda ronda
										if (resp.equals("nao") && numPerd<2) {
											
											//reset nas perguntas
												qtperg=0;
												ronda++;
												espaco e1 = new espaco();
												System.out.println("RONDA "+(ronda)+"!");
												espaco f1 = new espaco();
												System.out.println("Se acertares na resposta ganhas "+(vAposta*2)+"€");
												espaco g1 = new espaco();
												
												//garantir que a ronda tem 3 perguntas
												while (qtperg<=2) {
													
													vaGanho = vAposta*2;
													//verificação para a introdução de valores corretos
													do {
														System.out.println("Qual Categoria escolhes? Escreve o número da tua opção:");
														espaco k = new espaco();
														System.out.println(" 1-História\n 2-Ciências\n 3-Música\n 4-Cultura Geral");
														qtQueres = sc.nextInt();
															
														}
														while (qtQueres>4 && qtQueres<1);
													//começar contagem das perguntas
													qtperg++;
								
													if(qtQueres==1) {
															for(i=0;i<1;i++) {
																for(j=0;j<1;j++) {
																	System.out.println("PERGUNTA NÚMERO "+qtperg);
																	espaco l = new espaco();
																	//código utilizado para a pergunta ser random
																	rnd1 = rand.nextInt(HistoriaA.length);
																	System.out.println(HistoriaA[rnd1][0]); 
																}
															}
															espaco n = new espaco();
															System.out.println("Qual é a resposta correta?");
																resjogador = sc.next();
										
																rnd1=0;
																//verificaçao da resposta correta
																	if(resjogador.equals(HistoriaA[rnd1][1])) {
																		espaco f2 = new espaco();
																		System.out.println("Resposta Correta!!");
																		saldo= saldo+vaGanho;
																		espaco f3 = new espaco();
																		System.out.println("Acabou de ganhar "+ vaGanho);
																		System.out.println("O seu saldo atual é "+saldo+"€");
																		espaco n4 = new espaco();
																		numCorrect++;
																		numCorrectH++;
																	}
																	//se a resposta for errada o jogo acaba
																	else {
																		numPerd++;
																		numPerdH++;
																		System.out.println("Não acertaste!");
																		espaco f4 = new espaco();
																		saldo = (saldo-vaGanho);
																		System.out.println("O jogo acabou por aqui :(");
																		System.out.println("Levas para casa "+saldo+"€");
																		// estatisticas do jogador
																		System.out.println("Conseguiste "+numCorrect+ " resposta(s) certa(s) e "+numPerd+" resposta(s) errada(s).");
																		espaco n2 = new espaco();
																		System.out.println("Das respostas certas, "+numCorrectH+" são de História, "+numCorrectC+" são de Ciências, "+numCorrectM+" são de Música e "+numCorrectCG+" são de Cultura Geral");
																		espaco n3 = new espaco();
																		if(numPerd>0) {
																			System.out.println("Das respostas erradas, "+numPerdH+" são de História, "+numPerdC+" são de Ciências, "+numPerdM+" são de Música e "+numPerdCG+" são de Cultura Geral");
																		}
																			espaco n4 = new espaco();
																		return;
																		}
																		}
									
														else if(qtQueres==2) {
																for(i=0;i<1;i++) {
																	for(j=0;j<1;j++) {
																		System.out.println("PERGUNTA NÚMERO "+qtperg);
																		espaco l = new espaco();
																		rnd2 = rand.nextInt(CienciasA.length);
																		System.out.println(CienciasA[rnd2][0]); 
																	}
																	}
																espaco n = new espaco();
																System.out.println("Qual é a resposta correta?");
																resjogador = sc.next();
										
																rnd2=0;
																if(resjogador.equals(CienciasA[rnd2][1])) {
																	espaco f6 = new espaco();
																	System.out.println("Resposta Correta!!");
																	espaco f5 = new espaco();
																	saldo = saldo+vaGanho;
																	System.out.println("Acabou de ganhar "+vaGanho);
																	System.out.println("O seu saldo atual é "+saldo+"€");
																	espaco n4 = new espaco();
																	numCorrect++;	
																	numCorrectC++;
																	}
																else {
																	numPerd++;
																	numPerdC++;
																	System.out.println("Não acertaste!");
																	espaco f4 = new espaco();
																	saldo = (saldo-vaGanho);
																	System.out.println("O jogo acabou por aqui :(");
																	espaco n2 = new espaco();
																	System.out.println("Levas para casa "+saldo+"€");
																	espaco n1 = new espaco();
																	System.out.println("Conseguiste "+numCorrect+ " resposta(s) certa(s) e "+numPerd+" resposta(s) errada(s).");
																	espaco n21 = new espaco();
																	System.out.println("Das respostas certas, "+numCorrectH+" são de História, "+numCorrectC+" são de Ciências, "+numCorrectM+" são de Música e "+numCorrectCG+" são de Cultura Geral");
																	espaco n3 = new espaco();
																	if(numPerd>0) {
																		System.out.println("Das respostas erradas, "+numPerdH+" são de História, "+numPerdC+" são de Ciências, "+numPerdM+" são de Música e "+numPerdCG+" são de Cultura Geral");
																		espaco n4 = new espaco();
																					}
																	return;
																	}
																	}
													
														else if(qtQueres==3) {
															for(i=0;i<1;i++) {
																for(j=0;j<1;j++) {
																	System.out.println("PERGUNTA NÚMERO "+qtperg);
																	espaco l = new espaco();
																	rnd2 = rand.nextInt(MusicaA.length);
																	System.out.println(MusicaA[rnd2][0]); 
																}
															}
															espaco n = new espaco();
																System.out.println("Qual é a resposta correta?");
																resjogador = sc.next();
										
																rnd2=0;
																if(resjogador.equals(MusicaA[rnd2][1])) {
																	espaco f9 = new espaco();
																	System.out.println("Resposta Correta!!");
																	espaco f8 = new espaco();
																	saldo = saldo+vaGanho;
																	System.out.println("Acabou de ganhar "+vaGanho);
																	System.out.println("O seu saldo atual é "+saldo+"€");
																	espaco n2 = new espaco();
																	numCorrect++;
																	numCorrectM++;
																	}
																	else {
																		numPerd++;
																		numPerdM++;
																		System.out.println("Não acertaste!");
																		espaco f4 = new espaco();
																		saldo = (saldo-vaGanho);
																		System.out.println("O jogo acabou por aqui :(");
																		System.out.println("Levas para casa "+saldo+"€");
																		espaco n4 = new espaco();
																		System.out.println("Conseguiste "+numCorrect+ " resposta(s) certa(s) e "+numPerd+" resposta(s) errada(s).");
																		espaco n2 = new espaco();
																		System.out.println("Das respostas certas, "+numCorrectH+" são de História, "+numCorrectC+" são de Ciências, "+numCorrectM+" são de Música e "+numCorrectCG+" são de Cultura Geral");
																		espaco n3 = new espaco();
																		if(numPerd>0) {
																			System.out.println("Das respostas erradas, "+numPerdH+" são de História, "+numPerdC+" são de Ciências, "+numPerdM+" são de Música e "+numPerdCG+" são de Cultura Geral");
																			espaco n41 = new espaco();
																						}
																		return;
																	}
																	}
									
														else if (qtQueres == 4) {
															for(i=0;i<1;i++) {
																for(j=0;j<1;j++) {
																	System.out.println("PERGUNTA NÚMERO "+qtperg);
																	espaco l = new espaco();
																	rnd1 = rand.nextInt(CulturaGeralA.length);
																	System.out.println(CulturaGeralA[rnd1][0]); 
																	}
															}
															espaco n = new espaco();
																System.out.println("Qual é a resposta correta?");
																resjogador = sc.next();
										
																rnd1=0;
																if(resjogador.equals(CulturaGeralA[rnd1][1])) {
																	System.out.println("Resposta Correta!!");
																	saldo = saldo+vaGanho;
																	System.out.println("Acabou de ganhar "+vaGanho);
																	System.out.println("O seu saldo atual é "+saldo+"€");
																	espaco n4 = new espaco();
																	numCorrect++;
																	numCorrectCG++;
																}
																else {
																	numPerd++;
																	numPerdCG++;
																	System.out.println("Não acertaste!");
																	espaco f4 = new espaco();
																	saldo = (saldo-vaGanho);
																	System.out.println("O jogo acabou por aqui :(");
																	System.out.println("Levas para casa "+saldo+"€");
																	espaco n4 = new espaco();
																	System.out.println("Conseguiste "+numCorrect+ " resposta(s) certa(s) e "+numPerd+" resposta(s) errada(s).");
																	espaco n2 = new espaco();
																	System.out.println("Das respostas certas, "+numCorrectH+" são de História, "+numCorrectC+" são de Ciências, "+numCorrectM+" são de Música e "+numCorrectCG+" são de Cultura Geral");
																	espaco n3 = new espaco();
																	if(numPerd>0) {
																	System.out.println("Das respostas erradas, "+numPerdH+" são de História, "+numPerdC+" são de Ciências, "+numPerdM+" são de Música e "+numPerdCG+" são de Cultura Geral");
																	espaco n41 = new espaco();
																					}
																	return;
																	}

																	}
								
						
												}
												// estatisticas de fim de jogo quando ganha
												breakC z = new breakC();
												System.out.println("PARABÉNS!!");
												espaco n = new espaco();
												System.out.println("Chegaste ao fim do jogo!");
												espaco n1 = new espaco();
												System.out.println("Conseguiste "+numCorrect+ " resposta(s) certa(s) e "+numPerd+" resposta(s) errada(s).");
												espaco n2 = new espaco();
												System.out.println("Das respostas certas, "+numCorrectH+" são de História, "+numCorrectC+" são de Ciências, "+numCorrectM+" são de Música e "+numCorrectCG+" são de Cultura Geral");
												espaco n3 = new espaco();
												if(numPerd>0) {
													System.out.println("Das respostas erradas, "+numPerdH+" são de História, "+numPerdC+" são de Ciências, "+numPerdM+" são de Música e "+numPerdCG+" são de Cultura Geral");
													espaco n4 = new espaco();
																}
												System.out.println("Levas para casa "+saldo+"€ que ganhaste no jogo"+ " + um bónus de 50€ por teres terminado o jogo!!");
												return;
										}
										//estatisticas de fim do jogo quando quer sair
										else if (resp.equals("sair")) { 
											breakC k = new breakC();
											System.out.println("Terminaste o jogo!");
											espaco n = new espaco();
											System.out.println("Conseguiste "+numCorrect+ " resposta(s) certa(s) e "+numPerd+" resposta(s) errada(s).");
											espaco n2 = new espaco();
											System.out.println("Das respostas certas, "+numCorrectH+" são de História, "+numCorrectC+" são de Ciências, "+numCorrectM+" são de Música e "+numCorrectCG+" são de Cultura Geral");
											espaco n3 = new espaco();
											if(numPerd>0) {
											System.out.println("Das respostas erradas, "+numPerdH+" são de História, "+numPerdC+" são de Ciências, "+numPerdM+" são de Música e "+numPerdCG+" são de Cultura Geral");
											espaco n4 = new espaco();
														}
											System.out.println("Levas para casa "+saldo+"€");
											return;
										}
										
										//o jogo volta ao inicio quando erramos mais do que uma pergunta e queremos continuar a jogar
										else {
											System.out.println("Erraste mais do que uma pergunta! Vamos começar de novo");
										}
				}
				//quando o que queremos apostar é maior do que o nosso saldo						}	
				else  { 
					System.out.println("O teu saldo é inferior a esse valor, tenta uma aposta mais baixa ");
				}
			
}
}
}</textarea>
<hr>
<h3>MiniGames</h3>
<textarea disabled cols="30" rows="20" class="w-100">package Final;

import java.util.Scanner;

import java.util.Random;

public class Final {

	// Enter para continuar
	
	static void enter() {
		System.out.println("Enter para continuar");
		try {
			System.in.read();
		} catch (Exception e) {
		}
	}

	// timer0.2 segundos
	
	static void timer02() {
		try {
			Thread.sleep(200);
		} catch (Exception e) {
			System.out.println("Erro no timer");
		}
	}

	// timer 0.5segundos
	
	static void timer05() {
		try {
			Thread.sleep(500);
		} catch (Exception e) {
			System.out.println("Erro no timer");
		}
	}

	// timer 1segundo
	
	static void timer1() {
		try {
			Thread.sleep(1000);
		} catch (Exception e) {
			System.out.println("Erro no timer");
		}
	}

	// timer 2.5segundos
	
	static void timer25() {
		try {
			Thread.sleep(2500);
		} catch (Exception e) {
			System.out.println("Erro no timer");
		}
	}

	// limpar ecra
	
	static void clrscr() {
		for (int i = 0; i < 20; ++i) {
			System.out.println();
		}
	}

	public static void main(String[] args) {

		int saldo = 100, bet, vit = 0, derr = 0, lanc, rdice, ndados = 0, somadados = 0, limite = 0, jogo = 0;
		int seq[], sequ[];
		String aposta = " ";
		String sair = " ";

		Scanner sc = new Scanner(System.in);

		Random random = new Random();

		sair = " ";
		//ciclo while permite jogar enquanto houver saldo e a palavra de saida não for inserida
		
		while (saldo > 0 && !sair.equals("sair")) {

			clrscr();

			System.out.print("!");
			timer02();
			System.out.print("!");
			timer02();
			System.out.print("M");
			timer02();
			System.out.print("I");
			timer02();
			System.out.print("N");
			timer02();
			System.out.print("I");
			timer02();
			System.out.print("J");
			timer02();
			System.out.print("O");
			timer02();
			System.out.print("G");
			timer02();
			System.out.print("O");
			timer02();
			System.out.print("S");
			timer02();
			System.out.print("!");
			timer02();
			System.out.println("!");
			timer02();
			System.out.println("O seu Saldo é de " + saldo + " €.");
			timer1();

			// definir aposta
			
			System.out.println("Quanto é o valor da sua Aposta?");

			bet = sc.nextInt();

			clrscr();

			// verificação de saldo +- aposta
			
			if (bet <= saldo) {
				saldo = saldo - bet;
				jogo = 0;
				while (jogo != 1 && jogo != 2) {

					// Escolher o jogo

					System.out.println("escolha um jogo:");

					System.out.println("1-!!Dados!!");
					timer1();
					System.out.println("Escolha o número de lançamentos e adivinhe se a soma será maior ou menor que um limite aleatório!");
					timer1();
					System.out.println();
					timer1();
					System.out.println("2-!!Guess the Sequence!!");
					timer1();
					System.out.println("Adivinhe a sequência de 5 algarismos!");
					jogo = sc.nextInt();

					clrscr();

					if (jogo != 1 && jogo != 2) {
						System.out.println("Tens de escolher um dos Jogos!!");
						timer25();
					}
					clrscr();
				}

				switch (jogo) {
				case 1:

					// Jogo dados

					System.out.println("!!!Dados!!!");
					timer05();

					// definição de dados e lançamentos
					
					System.out.println("Quantos dados quer lançar?");
					ndados = sc.nextInt();
					System.out.println("Quantos lançamentos quer fazer?");
					lanc = sc.nextInt();

					// Definição de um limite Random

					limite = (ndados * lanc * (random.nextInt(4) + 2));
					do {
						System.out.println("Será mais ou menos que : " + (limite) + "? escrever mais ou menos!");
						aposta = sc.next();
					} while (!aposta.equals("mais") && !aposta.equals("menos"));

					// lançamento dos dados, verifica para 1 ou varios

					if (ndados != 1) {
						for (int i = 0; i < lanc; i++) {

							System.out.println((i + 1) + "º Lançamento:");

							for (int j = 0; j < ndados; j++) {
								rdice = (random.nextInt(6) + 1);
								somadados = somadados + rdice;
								System.out.println((j + 1) + "º dado:" + rdice);
								timer1();
							}

						}
						enter();
					} else
						for (int i = 0; i < lanc; i++) {
							rdice = ndados * random.nextInt(6) + 1;
							somadados = somadados + rdice;
							System.out.println("O " + (i + 1) + "º lançamento foi: " + rdice);
							timer1();
						}
					enter();

					// Verificação e apresentação de Vitória/Derrota
					
					System.out.println("A soma de todos os dados é de: " + somadados);
					if (somadados < limite) {
						if (aposta.equals("mais")) {
							derr = derr + 1;
							System.out.println("Perdeu!! =(");
							timer1();
						} else if (aposta.equals("menos")) {
							vit = vit + 1;
							saldo = saldo + (bet * 2);
							System.out.println("Ganhou!! =D");
							timer1();
						}
					}
					if (somadados > limite) {
						if (aposta.equals("menos")) {
							derr = derr + 1;
							System.out.println("Perdeu!!");
							timer1();

						} else if (aposta.equals("mais")) {
							vit = vit + 1;
							saldo = saldo + (bet * 2);
							System.out.println("Ganhou!!");
							timer1();
						}
					}
					if (somadados == limite) {
						derr = derr + 1;
						System.out.println("Perdeu!!");
						timer1();

					}
					somadados = 0;

					enter();

					break;

				case 2:

					// Guess The Sequence
					
					int a = 0, s = 0;
					seq = new int[5];
					sequ = new int[5];
					System.out.println("!!!Guess the Sequence!!!");
					System.out.println();
					timer05();
					System.out.println("Será gerada uma sequência de 5 algarismos entre 1 e 5");
					timer05();
					System.out.println();
					System.out.println("Em 5 tentativas tente descobrir qual a sequência gerada");
					timer05();
					System.out.println();
					System.out.println(
							"Em cada tentativa será apresentado se acertou algum algarismo e a sua respectiva posição");
					timer05();

					System.out.println();
					System.out.println("[X][X][X](X][X]");
					System.out.println();
					enter();

					// gerar sequencia random
					
					for (int i = 0; i < 5; i++) {
						seq[i] = random.nextInt(5) + 1;
					}

					// for para 5 tentativas
					
					for (int j = 0; j < 5 && s != 5; j++) {
						System.out.println();
						System.out.println("Introduza a " + (j + 1) + "ª tentativa");

						// preenchimento da sequencia do jogador
						
						for (int i = 0; i < 5; i++) {
							System.out.print((i + 1) + " º algarismo?");
							sequ[i] = sc.nextInt();

							// verificaçao se os valores estao entre 1 e 5
							
							if (sequ[i] > 5 || sequ[i] < 1) {
								i--;
								System.out.println("Apenas algarismos entre 1 e 5! Repita por favor :");
							}
						}
						System.out.println("A sua sequência é");
						for (int i = 0; i < 5; i++) {
							System.out.print("[" + sequ[i] + "] ");
						}
						System.out.println();

						// verificação e apresentação de valores correctos
						
						System.out.println("Valores correctos");
						for (int i = 0; i < 5; i++) {
							if (seq[i] == sequ[i]) {
								System.out.print("[" + seq[i] + "] ");
							} else if (seq[i] != sequ[i]) {
								System.out.print("[X] ");

							}
						}

						// verificação de valores iguais à sequencia

						for (int i = 0; i < 5; i++) {
							if (seq[i] == sequ[i]) {
								a++;
							}
						}

						// verificação de valores iguais à sequencia/vitória

						if (a == 5) {
							vit++;
							saldo = saldo + (bet * 2);
							System.out.println("Ganhou!!");
						} else
							System.out.println((j + 1) + "ª tentativa!");

						enter();

						s = a;
						a = 0;

					}
					
					// verificação de 5 tentativas consequente derrota
					
					if (s != 5) {
						derr++;
						System.out.println("Esgotou as 5 tentativas!");
						System.out.println("Perdeu!");
					}

					System.out.println();
					break;
				}

				// Apresentação do total Vitórias /Derrotas

				System.out.print("Vitórias: ");
				timer05();
				System.out.println(vit);
				timer05();
				System.out.print("Derrotas: ");
				timer05();
				System.out.println(derr);
				timer05();
			} else {
				System.out.println("O valor da aposta ultrapassa o seu saldo");
			}
			System.out.println();
			System.out.println("o seu saldo é de: " + saldo + "€");
			timer1();
			System.out.println();
			System.out.println("Deseja sair ou não?");
			System.out.println();
			timer1();

			// loop de saida/novo jogo

			sair = " ";
			while ((!sair.equals("sair")) && (!sair.equals("nao"))) {
				System.out.println("sair--> Para Sair   nao-->Jogar Novamente");
				System.out.println();
				timer1();
				System.out.println("Escrever 'stats' para verificar a estatística");
				sair = sc.next();
				if (sair.equals("stats")) {

					// Apresentação do total Vitórias /Derrotas

					System.out.println("Total de jogos: " + (vit + derr));
					System.out.print("Vitórias: ");
					timer05();
					System.out.println(vit);
					timer05();
					System.out.print("Derrotas: ");
					timer05();
					System.out.println(derr);
					timer05();

				}
			}

		}
		//impressão de total de ganhos/perdas
		
		if (saldo > 100) {
			System.out.println("Ganhaste um total de " + (saldo - 100));
		} else
			System.out.println("Perdeste um total de " + (100 - saldo));

		System.out.println("Terminado!");
		sc.close();
	}
}</textarea>

    </div>
	</div>
