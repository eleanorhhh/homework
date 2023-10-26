#include <stdio.h>
#include <stdlib.h>
#include <time.h>
int a[5], b[5], sum[5], maxb;

int i = 0, m = 0, index = 0;

int max(int a, int b)
{
    if (a > b)
        return a;
    else
        return b;
}
int main(int argc, char const *argv[])
{
    srand(time(NULL));
    printf("(1)a=");

    while (i < 5)
    {
        int x = (int)rand() % 100;
        int y = (int)rand() % 100;

        a[i] = x;
        b[i] = y;
        printf("%3d",a[i]);
        

     
        sum[i] = a[i] + b[i];
      /*  printf("%d", a[i]);
        printf("+");

        printf("%d", b[i]);
        printf("=");
        printf("%d\n ", sum[i]);*/
        i++;
    }
     printf("\n   b=");
     for (int j = 0; j < 5; j++)
    {
        printf("%3d", b[j]);
    }


    printf("\n");
    printf("(2)a+b=");

    for (int j = 0; j < 5; j++)
    {

        printf("%5d ", sum[j]);
    }
    for (int k = 0; k < 4; k++)
    {
        m = max(max(a[k], a[k + 1]), m);
    }

    printf("\n(3)a的 max=%d", m);
    for (int h = 0; h < 4; h++)
    {
        maxb = max(max(b[h], b[h + 1]), maxb);
    }

 

        for (int p = 0; p < 4; ++p)

        {
            for (int q = 0; q <4 -p; ++q)
            {
                if (b[q] > b[q+1])
                {
                    int temp = b[q];
                    b[q]=b[q+1];
                    b[q+1]=temp;
                }
            }

        }
        printf("\n(4)b的大小排列為:");
    for (int g = 4; g >=0; g--)
    {
        printf("%3d",b[g]);
    }

    return 0;
}
