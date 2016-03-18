#include <cstdio>

typedef unsigned long long ull;

int main(int argc, char const *argv[])
{
    int T;
    int N;
    scanf("%d", &T);
    while (T --) {
        scanf("%d", &N);
        ull one = 0;
        ull two = 0;

        for (int i =1; i <= N; i ++) {
            one += i * i;
            two += i;
        }

        printf("%llu\n", two * two - one);
    }

    return 0;
}
