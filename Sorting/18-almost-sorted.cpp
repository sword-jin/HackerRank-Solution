#include <iostream>
#include <vector>
#include <algorithm>

typedef long long LL;

using namespace std;

int main(int argc, char const *argv[])
{
    LL n;
    vector <LL> origin, sorted, diff;
    cin >> n;
    for (LL i = 0; i < n; ++i) {
        LL x;
        cin >> x;
        origin.push_back(x);
        sorted.push_back(x);
    }
    sort(sorted.begin(), sorted.end());

    for (LL i = 0; i < n; ++i) {
        if (origin[i] != sorted[i]) {
            diff.push_back(i);
        }
    }

    LL count = diff.size();

    if (count == 0) {
        cout << "yes" << endl;
        return 0;
    }

    if (count == 2 &&
        sorted[diff[0]] == origin[diff[1]] &&
        sorted[diff[1]] == origin[diff[0]]) {
        cout << "yes" << endl << "swap " << diff[0] + 1 << " " << diff.back() + 1;
        return 0;
    }

    bool reverse = false;
    for (LL i = 0; i < count; i ++) {
        if (origin[diff[i]] == sorted[diff[count - i - 1]]) {
            reverse = true;
        } else {
            reverse = false;
            break;
        }
    }

    if (reverse) {
        cout << "yes" << endl << "reverse " << diff[0] + 1 << " " << diff.back() + 1;
    } else {
        cout << "no" << endl;
    }

    return 0;
}
