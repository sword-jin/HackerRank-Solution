#include <cstdio>
#include <vector>
#include <cmath>
#include <algorithm>

using namespace std;

typedef unsigned long long ull;

vector<ull> primes;
vector<ull>::iterator it;

bool isPrime(ull n);

int main(int argc, char const *argv[])
{
    int T;
    ull n;
    scanf("%d", &T); // input
    primes.push_back(2); // php: primes[] = 2;
    primes.push_back(3);

    while (T --) {
        ull result = 0;
        scanf("%llu", &n);

        ull i = 0;
        for (; i < primes.size(); i ++) {
            if (primes[i] <= n) {
                result += primes[i];
            } else {
                break;
            }
        }

        if (n <= primes.back()) {
            printf("%llu\n", result);
            continue;
        }

        for (i = primes[i - 1] + 2; i <= n; i ++) {
            if (isPrime(i)) {
                result += i;
            }
        }

        printf("%llu\n", result);
    }

    return 0;
}

bool isPrime(ull n) {
    if (n % 2 == 0) {
        return false;
    }

    for (ull i = 3; i < sqrt(n) + 1; i += 2) {
        if (n % i == 0) {
            return false;
        }
    }

    primes.push_back(n);

    return true;
}
