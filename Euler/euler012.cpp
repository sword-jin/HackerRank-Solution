#include <cstdio>
#include <map>
#include <vector>
#include <climits>
#include <cmath>

typedef unsigned long long ull;

using namespace std;

vector<int> primes;
int nPrime = 2;

void solve(int n);
bool isPrime(ull n);
int GetFactorCount(int num);
void GetNextPrime(int n);
int GetPrimeFactor(int n);

int main(int argc, char const *argv[])
{
    int t, n;
    scanf("%d", &t);

    primes.push_back(2);
    primes.push_back(3);

    nums.insert(pair<ull, int>(1,1));

    while (t --) {
        scanf("%d", &n);

        solve(n);
    }

    return 0;
}

void solve(int n)
{
    int factorCount;

    ull j = 1;
    ull i = j * (j + 1) / 2;
    for (; i < LLONG_MAX;) {
        factorCount = GetFactorCount(j);
        if (factorCount > n) {
            printf("%llu\n", i);
            break;
        }
        j ++;
        i = j * (j + 1) / 2;
    }
}

bool isPrime(ull n)
{
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


int GetFactorCount(int n)
{
    int count = 1;
    if (n == 1) return count;

    if (n % 2 == 0) {
        count = GetPrimeFactor(n / 2) * GetPrimeFactor(n + 1);
    } else {
        count = GetPrimeFactor(n) * GetPrimeFactor((n + 1) / 2);
    }

    return count;
}

void GetNextPrime(int n)
{
    n = n + 2;

    bool found = false;

    while (! found) {
        for (ull i = 3; i < sqrt(n) + 1; i += 2) {
            if (n % i == 0) {
                found = false;
                break;
            } else {
                found = true;
            }
        }

        n += 2;
    }

    primes.push_back(n - 2);
    nPrime ++;
}

int GetPrimeFactor(int n)
{
    if (n == 1) return 1;
    int count = 1;
    int i = 0;

    while (primes[i] <= n) {
        int k = 0;
        while (n % primes[i] == 0) {
            n = n / primes[i];
            k ++;
        }
        count *= k + 1;

        if (i + 1 >= nPrime) {
            GetNextPrime(primes[i]);
        }

        i ++;
    }

    return count;
}
