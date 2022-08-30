#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
#include <windows.h>
#include <time.h>

int x = 30, y = 25, a = 0, b = 0, z = 0, body = 3, point = 0, lebar = 120, tinggi = 30;
int tailX[100], tailY[100];
int FoodX = rand() % (lebar-2) + 1, FoodY = rand() % (tinggi-2) + 1;

HANDLE console = GetStdHandle(STD_OUTPUT_HANDLE);
COORD CursorPosition;

void gotoXY(int x, int y)
{
	CursorPosition.X = x;
	CursorPosition.Y = y;
	SetConsoleCursorPosition(console, CursorPosition);
}

void rule()
{
	printf("     ################################################################\n"
	"     #                         ~GAME SNAKE~                         #\n"
	"     #                                                              #\n"
	"     #       cara bermain :                                         #\n"
	"     #    -> tekan arah atas atau W untuk menggerakkan ke atas.     #\n"
	"     #    -> tekan arah kiri atau A untuk menggerakkan ke kiri.     #\n"
	"     #    -> tekan arah kanan atau D untuk menggerakkan ke kanan.   #\n"
	"     #    -> tekan arah bawah atau S untuk menggerakkan ke bawah.   #\n"
	"     #    -> tekan esc untuk mem-pause.                             #\n"
	"     #    -> tekan sembarang untuk memulai permainan.               #\n"
	"     #                                                              #\n"
	"     #                   ^_^Selamat Bermain^_^                      #\n"
	"     ################################################################\n");}

void selesai()
{
	printf("     #######################################\n"
	"     #             ~GAME SNAKE~            #\n"
	"     #                                     #\n"
	"     #                                     #\n"
	"     #                                     #\n"
	"     #                                     #\n"
	"     #                                     #\n"
	"     #                                     #\n"
	"     #                                     #\n"
	"     #                                     #\n"
	"     #              Point = %.3d            #\n"
	"     #                                     #\n"
	"     #          created by : Dwiki Aditama #\n"
	"     #######################################\n",point);
}


void Food()
{
	if(tailX[0] == FoodX && tailY[0] == FoodY){
		FoodX = rand() % (lebar-2) + 1;
		FoodY = rand() % (tinggi-2) + 1;
		body++;
		point+=25;
		//a=-1, b=0, z=2;
		}
	
	if(point>=50 && point<100){
			if(FoodX>=30 && FoodX<=89 && FoodY>=20 && FoodY<=21){	
				FoodX = rand() % (lebar-2) + 1;
				FoodY = rand() % (tinggi-2) + 1;
			}
	}
	else if(point>=100 && point<200){
			if((FoodX>=30 && FoodX<=89 && FoodY>=20 && FoodY<=21)  
			|| (FoodX>=30 && FoodX<=31 && FoodY>=9 && FoodY<=21) 
			|| (FoodX>=88 && FoodX<=89 && FoodY>=9 && FoodY<=21)){
				FoodX = rand() % (lebar-2) + 1;
				FoodY = rand() % (tinggi-2) + 1;
			}
	}
	else if(point>=200 && point<300){
			if((FoodX>=30 && FoodX<=89 && FoodY>=20 && FoodY<=21) 	
			|| (FoodX>=30 && FoodX<=31 && FoodY>=9 && FoodY<=21) 
			|| (FoodX>=88 && FoodX<=89 && FoodY>=9 && FoodY<=21)
			|| (FoodX>=18 && FoodX<=19 && FoodY>=19 && FoodY<=29)
			|| (FoodX>=52 && FoodX<=54 && FoodY>=0 && FoodY<=17)
			|| (FoodX>=109 && FoodX<=120 && FoodY>=10 && FoodY<=11)){
				FoodX = rand() % (lebar-2) + 1;
				FoodY = rand() % (tinggi-2) + 1;
			}	
	}
	else if(point>=300){
			if((FoodX>=30 && FoodX<=89 && FoodY>=20 && FoodY<=21)  
			|| (FoodX>=30 && FoodX<=31 && FoodY>=9 && FoodY<=21) 
			|| (FoodX>=88 && FoodX<=89 && FoodY>=9 && FoodY<=21)
			|| (FoodX>=18 && FoodX<=19 && FoodY>=19 && FoodY<=29)
			|| (FoodX>=52 && FoodX<=54 && FoodY>=0 && FoodY<=17)
			|| (FoodX>=109 && FoodX<=120 && FoodY>=10 && FoodY<=11)
			|| (FoodX>=0 && FoodX<=21 && FoodY>=5 && FoodY<=6)
			|| (FoodX>=100 && FoodX<=120 && FoodY>=23 && FoodY<=24)
			|| (FoodX>=72 && FoodX<=75 && FoodY>=24 && FoodY<=27)
			|| (FoodX>=95 && FoodX<=98 && FoodY>=3 && FoodY<=5)){
				FoodX = rand() % (lebar-2) + 1;
				FoodY = rand() % (tinggi-2) + 1;
			}
	}

	gotoXY(FoodX, FoodY);
	printf("%c",36);
}

void GameOver()
{	
	if(point>=0 && point<50)
	{
		if(x == 0 || x == 120-1 || y == 0 || y == 30-1){
		system("cls");
		selesai();
		gotoXY(20,4);
		printf("GAME OVER");
		gotoXY(15,6);
		printf("ULAR MENABRAK TEMBOK");
		gotoXY(0,30);
		exit(0);
		}
	}
	
	else if(point>=50 && point<100)
	{
		if(x == 0 || x == 120-1 || y == 0 || y == 30-1){
		system("cls");
		selesai();
		gotoXY(20,4);
		printf("GAME OVER");
		gotoXY(15,6);
		printf("ULAR MENABRAK TEMBOK");
		gotoXY(0,30);
		exit(0);
			}
		else if((x>=30 && x<=89) && (y>=20 && y<=21)){
			system("cls");
			selesai();
			gotoXY(20,4);
			printf("GAME OVER");
			gotoXY(14,6);
			printf("ULAR MENABRAK RINTANGAN");
			gotoXY(0,30);
			exit(0);
			}
	}
	
	else if(point>=100 && point<200)
	{
		if(x == 0 || x == 120-1 || y == 0 || y == 30-1){
		system("cls");
		selesai();
		gotoXY(20,4);
		printf("GAME OVER");
		gotoXY(15,6);
		printf("ULAR MENABRAK TEMBOK");
		gotoXY(0,30);
		exit(0);
		}
		else if((x>=30 && x<=89 && y>=20 && y<=21) 	
			|| (x>=30 && x<=31 && y>=9 && y<=21) 
			|| (x>=88 && x<=89 && y>=9 && y<=21)){
			system("cls");
			selesai();
			gotoXY(20,4);
			printf("GAME OVER");
			gotoXY(14,6);
			printf("ULAR MENABRAK RINTANGAN");
			gotoXY(0,30);
			exit(0);
			}
	}
			
	else if(point>=200 && point<300)
	{
		if(x == 0 || x == 120-1 || y == 0 || y == 30-1){
		system("cls");
		selesai();
		gotoXY(20,4);
		printf("GAME OVER");
		gotoXY(15,6);
		printf("ULAR MENABRAK TEMBOK");
		gotoXY(0,30);
		exit(0);
		}
		else if((x>=30 && x<=89 && y>=20 && y<=21)
			|| (x>=30 && x<=31 && y>=9 && y<=21) 
			|| (x>=88 && x<=89 && y>=9 && y<=21)
			|| (x>=18 && x<=19 && y>=19 && y<=29)
			|| (x>=52 && x<=54 && y>=0 && y<=17)
			|| (x>=109 && x<=120 && y>=10 && y<=11)){
			system("cls");
			selesai();
			gotoXY(20,4);
			printf("GAME OVER");
			gotoXY(14,6);
			printf("ULAR MENABRAK RINTANGAN");
			gotoXY(0,30);
			exit(0);
			}
	}
	
	else if(point>=300)
	{
		if(x == 0 || x == 120-1 || y == 0 || y == 30-1){
		system("cls");
		selesai();
		gotoXY(20,4);
		printf("GAME OVER");
		gotoXY(15,6);
		printf("ULAR MENABRAK TEMBOK");
		gotoXY(0,30);
		exit(0);
		}
		else if((x>=30 && x<=89 && y>=20 && y<=21) 
			|| (x>=30 && x<=31 && y>=9 && y<=21) 
			|| (x>=88 && x<=89 && y>=9 && y<=21)
			|| (x>=18 && x<=19 && y>=19 && y<=29)
			|| (x>=52 && x<=54 && y>=0 && y<=17)
			|| (x>=109 && x<=120 && y>=10 && y<=11)
			|| (x>=0 && x<=21 && y>=5 && y<=6)
			|| (x>=100 && x<=120 && y>=23 && y<=24)
			|| (x>=72 && x<=75 && y>=24 && y<=27)
			|| (x>=95 && x<=98 && y>=3 && y<=5)){
			system("cls");
			selesai();
			gotoXY(20,4);
			printf("GAME OVER");
			gotoXY(14,6);
			printf("ULAR MENABRAK RINTANGAN");
			gotoXY(0,30);
			exit(0);
			}
	}
	
	else if(point==500){
		system("cls");
		selesai();
		gotoXY(8,5);
		printf("~~ Yeeey You Are the Champions ~~");
		gotoXY(10,6);
		printf("~~ Kamu adalah Jagoan Ular ~~");
		gotoXY(0,30);
		exit(0);
	}
		
	for(int i=1; i<body; i++){
		if(tailX[0] == tailX[i] && tailY[0] == tailY[i]){
		system("cls");
		selesai();
		gotoXY(20,4);
		printf("GAME OVER");
		gotoXY(16,6);
		printf("ULAR MENABRAK BADAN");
		gotoXY(0,30);
		exit(0);
		}
	}
			
}

void rintangan0()
{
	printf("########################################################################################################################\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"########################################################################################################################\n");
}

void rintangan1()
{
	printf("########################################################################################################################\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                             ############################################################                             #\n"
			"#                             ############################################################                             #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"########################################################################################################################\n");
}

void rintangan2()
{
	printf("########################################################################################################################\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                             ############################################################                             #\n"
			"#                             ############################################################                             #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"#                                                                                                                      #\n"
			"########################################################################################################################\n");		
}

void rintangan3()
{
	printf("########################################################################################################################\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                   ###########\n"
			"#                             ##                    ###                                 ##                   ###########\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                 ##          ##                                                        ##                             #\n"
			"#                 ##          ############################################################                             #\n"
			"#                 ##          ############################################################                             #\n"
			"#                 ##                                                                                                   #\n"
			"#                 ##                                                                                                   #\n"
			"#                 ##                                                                                                   #\n"
			"#                 ##                                                                                                   #\n"
			"#                 ##                                                                                                   #\n"
			"#                 ##                                                                                                   #\n"
			"#                 ##                                                                                                   #\n"
			"########################################################################################################################\n");
}

void rintangan4()
{
	printf("########################################################################################################################\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                        ####                    #\n"
			"#                                                   ###                                        ####                    #\n"
			"######################                              ###                                        ####                    #\n"
			"######################                              ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                                                   ###                                                                #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                   ###########\n"
			"#                             ##                    ###                                 ##                   ###########\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                    ###                                 ##                             #\n"
			"#                             ##                                                        ##                             #\n"
			"#                 ##          ##                                                        ##                             #\n"
			"#                 ##          ############################################################                             #\n"
			"#                 ##          ############################################################                             #\n"
			"#                 ##                                                                                                   #\n"
			"#                 ##                                                                                ####################\n"
			"#                 ##                                                    ####                        ####################\n"
			"#                 ##                                                    ####                                           #\n"
			"#                 ##                                                    ####                                           #\n"
			"#                 ##                                                    ####                                           #\n"
			"#                 ##                                                                                                   #\n"
			"########################################################################################################################\n");
}

void Cetak()
{
	if(point>=0 && point<50)
	{
		rintangan0();	
	}	
	
	else if(point>=50 && point<100)
	{
		rintangan1();
	}
	
	else if(point>=100 && point<200)
	{
		rintangan2();
	}
	
	else if(point>=200 && point<300)
	{
		rintangan3();
	}
	
	else if(point>=300)
	{
		rintangan4();
	}
}

void input()
{
	if(kbhit())
		{
			switch(getch())
			{
				case 72: // Up y - 1
					if(z != 4){
						a = 0;  // a = x
						b = -1; // b = y
						z = 1;
					} 
					break;
				case 75: // Left x - 1
					if(z != 3){
						a = -1;
						b = 0;
						z = 2;
					} 
					break;
		    	case 77: // Right x + 1
		    		if(z != 2){
		    			a = 1;
						b = 0;
						z = 3;
					}
		    		break;
		    	case 80: // Down y + 1
					if(z != 1){
						a = 0;
						b = 1;
						z = 4;
					} 
		    		break;
				case 87: case 119: // W Up y - 1
					if(z != 4){
						a = 0;
						b = -1;
						z = 1;
					}
					break;
				case 65: case 97: // A Left x - 1
					if(z != 3){
						a = -1;
						b = 0;
						z = 2;
					}
					break;
				case 68: case 100: // D Right x + 1
					if(z != 2){
		    			a = 1;
						b = 0;
						z = 3;
					}
					break;
				case 83: case 115: // S Down y + 1
					if(z != 1){
						a = 0;
						b = 1;
						z = 4;
					}
					break;
				case 27: // ESC Pause
					gotoXY(0,1);
					system("pause");
					break;
				
			}
		}

}

void ular()
{		
		tailX[0] = x+=a;                // tailx [4,4,3,2,1]
		tailY[0] = y+=b;
		gotoXY(tailX[0], tailY[0]);     // tailx [5,4,3,2,1]
		printf("%c",64);
		
		if(z != 0) GameOver();
		
		Food();
		
		int prevX = tailX[0];           // 5
		int prevY = tailY[0];
		int prev2X, prev2Y;
		for(int i=1; i<body; i++){		// 5,5,4,3,2
			prev2X = tailX[i];        	// 2
			prev2Y = tailY[i];
			tailX[i] = prevX;           // 3
			tailY[i] = prevY;
			prevX = prev2X;             // 2
			prevY = prev2Y;
			if(z != 0){
				gotoXY(prevX, prevY);   // 4,3,2,1
				printf("%c",79);
			}

		}
 } 
 
int main()
{
	rule();
	getch();
	srand(time(0));
	while(1){
		gotoXY(0,0);
		Cetak();
		gotoXY(58,32);
		printf("Point = %d", point);
		input();												
		ular();
		
		if(point>=0 && point<50){	
			gotoXY(59,31);
			printf("level 1");	
			Sleep(150);
		}	
	
		else if(point>=50 && point<100){
			gotoXY(59,31);
			printf("level 2");
			Sleep(125);
		}
	
		else if(point>=100 && point<200){	
			gotoXY(59,31);
			printf("level 3");
			Sleep(100);
		}	
	
		else if(point>=200 && point<300){
			gotoXY(59,31);
			printf("level 4");
			Sleep(80);
		}
	
		else if(point>=300){
			gotoXY(59,31);
			printf("level 5");
			Sleep(60);
		}		
	}
	system("cls");
	return 0;
}
