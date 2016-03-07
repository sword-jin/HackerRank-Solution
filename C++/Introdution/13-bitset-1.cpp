#include <vector>
#include <cmath>
#include <iostream>
#include <algorithm>

typedef unsigned long long ull;

using namespace std;

int main() {
    ull N,S,P,Q,a,b;
    cin >> N >> S >> P >> Q;

    a = S - 2147483648 * (S >> 31);
    ull count = 1;
    for (ull i = 1; i < N; i ++) {
        b = a * P + Q;
        b = b - 2147483648 * (b >> 31);

        if (a != b) {
            count ++;
        }
        a = b;
    }

    cout << count << endl;

    return 0;
}
