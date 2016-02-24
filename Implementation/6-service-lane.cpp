// test#11 0.02s
#include <iostream>
#include <algorithm>
#include <vector>

using namespace std;

int main(int argc, char const *argv[])
{
    int N, T;
    cin >> N >> T;

    vector <int> width(N);
    for (int i = 0; i < N; i ++) {
        cin >> width[i];
    }

    for (int i = 0; i < T; i ++) {
        int l, r;
        cin >> l >> r;

        int ans = width[l];
        while(l <= r) {
            ans = min(ans, width[l]);
            l ++;
        }

        cout << ans << endl;
    }

    return 0;
}
