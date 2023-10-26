#include <stdio.h>
#include <string.h>

int main(int argc, char const *argv[])
{
    int ans = 0, num = 0;
    float numbers;

    printf("1.基本題-1 2.基本題-2 3.離開 : ");
    while (scanf("%d", &ans)!=EOF)
    {
        if(ans==1){
            printf("enter 5 numbers:");

            scanf("%f", &numbers);
            int a = numbers / 10000;
            int b = numbers / 1000;
            b = b - a * 10;
            int sum = numbers / 100;
            int c = (numbers - sum * 100) / 10;
            int d = (numbers - sum * 100) - c * 10;

            if (a == d && b == c)
                printf("yes\n");
            else
                printf("no\n");

                printf("1.基本題-1 2.基本題-2 3.離開 : ");
              
        }

        if (ans==2){
            for (int i = 0; i < 9; i++)
            {
                num = num + 101;
                printf("%5d\n", num);
                for (int i = 0; i < 9; i++)
                {
                    num = num + 10;
                    printf("%5d", num);
                }
                num = num - 90;
            }
            printf("\n");
            printf("1.基本題-1 2.基本題-2 3.離開 : ");
            
        }
            

    else if(ans==3)
        break;
    
    
}

}
