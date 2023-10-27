#include <stdio.h>
#include <string.h>
typedef enum { false, true } bool;
int main(int argc, char const *argv[])
{
    int ans = 0, num = 0;
    char numbers[5];

    printf("1.基本題-1 2.基本題-2 3.離開 : ");
    while (scanf("%d", &ans) != EOF)
    {
        if (ans == 1)
        {
            printf("enter 5 numbers:");
            
                if (ans == 1)
                {
                    printf("enter 5 numbers:");

                    scanf("%s", &numbers);
                  

                    size_t high = strlen(numbers) - 1;
                    size_t low = 0;
                    bool flag = true;

                    while (high != low)
                    {
                        if (numbers[high--] != numbers[low++])
                            flag = false;
                    }

                    if (flag)
                    {
                        printf("yes\n");
                    }
                    else
                    {
                        printf("no\n");
                    }
                }

                printf("1.基本題-1 2.基本題-2 3.離開 : ");
            }

            if (ans == 2)
            {
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

            else if (ans == 3)
                system("cls");
        }
    }


