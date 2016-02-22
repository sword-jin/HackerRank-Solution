#include <stdio.h>

int main(int argc, char const *argv[])
{
    int n, i, j, t;
    scanf("%d", &n);

    for (i = 1; i <= n; i ++) {
        // one solution
        // for (j = 0; j < i; j ++) {
        //     if (j == 0) {
        //         for (t = 0; t < n - i; t ++) {
        //             printf(" ");
        //         }
        //     }
        //     printf("#");
        // }

        // two
        for (j = 0; j < n - i; j ++) {
            printf(" ");
        }
        for (j = 0; j < i; j ++) {
            printf("#");
        }
        printf("\n");
    }

    return 0;
}
