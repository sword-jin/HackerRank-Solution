// test#11 0.00s
#include <stdio.h>

int min(int a, int b)
{
    return a > b ? b : a;
}

int main(int argc, char const *argv[])
{
    int N, T;
    scanf("%d %d", &N, &T);
    int width[N];

    for (int i = 0; i < N; i ++) {
        scanf("%d", &width[i]);
    }

    for (int i = 0; i < T; i ++) {
        int l, r;
        scanf("%d %d", &l, &r);

        int result = width[l];
        while(l <= r) {
            result = min(result, width[l]);
            l ++;
        }

        printf("%d\n", result);
    }

    return 0;
}
