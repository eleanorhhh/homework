
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

#define BUF_SIZE 3
const char flower[4] = {'\5','\4','\3','\6'}; 
const char numbers[13][BUF_SIZE] = {
    " A", " 2", " 3", " 4", " 5", " 6",
    " 7", " 8", " 9", "10", " J", " Q", " K"};
char pokerf[5],pokern[5];
int main(int argc, char const *argv[])
{
    srand(time(NULL));
int a=0;
while(a<5){
int x=(int) rand()%4;
int y=(int) rand()%14;
printf("%d ",x );

printf("%d    ",y);
pokerf[a]=flower[x];
pokern[a]=numbers[y];
printf("%c",pokerf[a]);
printf("%s",pokern[a]);
a++;
 
}


}

