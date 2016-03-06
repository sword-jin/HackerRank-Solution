#include <iostream>
#include <algorithm>
#include <set>

using namespace std;

int main(int argc, char const *argv[])
{
    int t;
    cin >> t;
    while (t --) {
        long long a, b, n, i;
        long long int c, d;
        set <int> x;
        cin >> n >> c >> d;
        a = max(c, d);
        b = min(c, d);

        for (int i = 0; i < n; ++i)
        {
            x.insert(i * b + (n - 1 - i) * a);
        }

        for (auto it = x.begin(); it != x.end(); it ++) {
            cout << *it << " ";
        }

        cout << endl;
    }
    return 0;
}
