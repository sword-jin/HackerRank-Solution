#include <iostream>

using namespace std;

int main(int argc, char const *argv[])
{
    int t;
    cin >> t;

    long long int sequence;
    long long int count = 0;
    long long int k;

    long long int *cache=new long long int[5000001];
    cache[1] = 1;
    for (long long int i = 2; i < 5000001; i ++) {
        sequence = i;
        k = 0;
        while (sequence != 1 && sequence >= i) {
            k ++;
            if (sequence % 2 == 0) {
                sequence = sequence / 2;
            } else {
                sequence = sequence * 3 + 1;
            }
        }
        cache[i] = k + cache[sequence];
    }

    long long int max = 1;
    long long int max_at = 1;
    for (long long int i = 1; i <= 5000001; i ++) {
        if (cache[i] >= max) {
            max = cache[i];
            max_at = i;
        }
        cache[i] = max_at;
    }

    while (t --) {
        long long int n;
        cin >> n;

        cout << cache[n] << endl;
    }

    return 0;
}
