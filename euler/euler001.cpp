#include <cstdio>

typedef unsigned long long ull;

using namespace std;

ull solve(ull n)
{
    ull result = 0;

    ull three_num = (ull)((n - 1) / 3); // 12 -> 3,6,9 4
    ull five_num = (ull)((n - 1) / 5);
    ull fif_num = (ull)((n - 1) / 15);

    result = ((three_num + 1) * three_num / 2) * 3
            + ((five_num + 1) * five_num / 2) * 5
            - ((fif_num + 1) * fif_num / 2) * 15;

    return result;
}

int main()
{
    int T;
    ull N;
    scanf("%d", &T);
    while (T --) {
        scanf("%llu", &N);

        printf("%llu\n", solve(N));
    }

    return 0;
}
