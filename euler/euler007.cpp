#include <cstdio>
#include <cmath>
#include <vector>
#include <algorithm>

using namespace std;

typedef unsigned long long ull;

vector<ull> primes; // 第二波:加上的一个向量，和php中的数组一个作用(仅在这里)
vector<ull>::iterator it;

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

int main() {
    int T, n;
    scanf("%d", &T); // input
    primes.push_back(2); // php: primes[] = 2;
    primes.push_back(3);

    while (T --) {
        scanf("%d", &n);

        if (n <= primes.size()) { // 第二波
            printf("%llu\n", primes[n - 1]);

            continue;
        } else {
            int current = primes.size(); // 第四波: 这里很关键
            for (ull i = primes.back() + 2;i <= 104743; i += 2) {
                if (isPrime(i)) {
                    current ++;

                    if (current == n) {
                        printf("%llu\n", i);
                        break;
                    }
                }
            }
        }
    }

    return 0;
}
