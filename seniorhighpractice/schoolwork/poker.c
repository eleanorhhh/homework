#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <string.h>
int flag = 0,flag2=0;

int a = 0;
char pokerf[5];
int tmp;
int b[14] = {0}, C[4] = {0};
int pokern[5];

char flower[4] = {'A', 'B', 'C', 'D'};

int main(int argc, char const *argv[])
{

    srand(time(NULL));
    printf("(1)");

    while (a < 5)
    {
        int x = 0, y = 0;

        x = (int)rand() % 4;

        y = (int)rand() % 14;
        pokerf[a] = flower[x];
        pokern[a] = y;
        printf("%c", pokerf[a]);
        printf("%d  ", pokern[a]);

        a++;
    }
    for (int p = 0; p < 4; ++p)

    {
        for (int q = 0; q < 4 - p; ++q)
        {
            if (pokern[q] > pokern[q + 1])
            {
                int temp = pokern[q];
                pokern[q] = pokern[q + 1];
                pokern[q + 1] = temp;
            }
        }
    }
  
    printf("\n(2)");
    for (int i = 0; i < 5; i++)
    {

        switch (pokerf[i])
        {
        case 'A':
            C[0]++;
            break;
        case 'B':
            C[1]++;
            break;
        case 'C':
            C[2]++;

            break;
        case 'D':
            C[3]++;
            break;
        }
        if (C[i] == 5)
        flag2++;
    }
    if ((pokern[0] + pokern[2]) / 2 == pokern[1] && (pokern[2] + pokern[4]) / 2 == pokern[3])
    {
        printf("順子  ");
            if(flag2==1)
            printf("桐花順  ");
        
    }
    for (int i = 0; i < 5; i++)
    {

        switch (pokern[i])
        {
        case 0:
            b[0]++;
            break;
        case 1:
            b[1]++;
            break;
        case 2:
            b[2]++;

            break;
        case 3:
            b[3]++;
            break;
        case 4:
            b[4]++;
            break;
        case 5:
            b[5]++;
            break;
        case 6:
            b[6]++;
            break;
        case 7:
            b[7]++;
            break;
        case 8:
            b[8]++;
            break;
        case 9:
            b[9]++;
            break;
        case 10:
            b[10]++;
            break;
        case 11:
            b[11]++;
            break;
        case 12:
            b[12]++;
            break;
        case 13:
            b[13]++;
            break;
        }
    }

    for (int j = 0; j < 14; j++)
    {

        if (b[j] == 2)
            flag++;
        if (b[j] == 3)
            printf("3條");
    }
    for (int i = 0; i < 14; i++)
    {
        if (b[i] == 3 && flag == 1)
            printf("葫蘆");
    }

    if (flag == 1)
    {
        printf("1對");
    }
    if (flag == 2)
    {
        printf("2對加鐵支");
    }
}