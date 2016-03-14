#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>

typedef long long LL;

using namespace std;

int main() {
    int n, q;
    LL y;
    vector<LL> x;
    cin >> n;
    while (n --) {
        LL temp;
        cin >> temp;
        x.push_back(temp);
    }

    cin >> q;
    while (q --) {
        cin >> y;

        vector<LL>::iterator up;
        up = upper_bound(x.begin(), x.end(), y);
        if (x[up - x.begin() - 1] == y) {
            int j = 2;
            int k = 0;
            while (x[up - x.begin() - j] == y) {
                j ++;
                k ++;
            }
            cout << "Yes " << up - x.begin() - k << endl;
        } else {
            cout << "No " << up - x.begin() + 1 << endl;
        }
    }

    return 0;
}
