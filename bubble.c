#include <stdio.h>
#include <stdlib.h>

#define MICRO_IN_SEC 1000000.00

void bubblesort(int *ints, int numints) 
{
    int i, j, temp;

    for (i = numints; --i >= 0; ) {
        for (j = 0; j < i; j++) {
            if (ints[j] > ints[j+1]) {
                temp = ints[j];
                ints[j] = ints[j+1];
                ints[j+1] = temp;
            }
        }
    }
}

double microtime()
{
    struct timeval tp;
    gettimeofday(&tp, NULL);
    return (double)(tp.tv_sec + tp.tv_usec / MICRO_IN_SEC);
}

int main() 
{
    int numints = 3000;
    int ints[3000];
    int i;
    double start, end;

    for (i = 0; i < numints; i++) {
        ints[i] = rand() % 100000;
    }
    
    printf("Sorting %d integers\n", numints);
    start = microtime();
    bubblesort(ints, numints);
    end = microtime();
    printf("Sort took %.4f secs\n", end - start);
}
