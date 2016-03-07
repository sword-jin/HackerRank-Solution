#include <iostream>
#include <set>
#include <algorithm>

typedef unsigned long long ull;
using namespace std;

int main() {
    int Q;
    int type;
    ull num;
    set<ull> s;
    cin >> Q;
    while (Q --) {
        cin >> type >> num;
        if (type == 1) {
            s.insert(num);
            continue;
        } else if (type == 2) {
            // maybe must exists.
            s.erase(num);
            continue;
        } else if (type == 3) {
            set<ull>::iterator it = s.find(num);
            if (it == s.end()) {
                cout << "No" << endl;
            } else {
                cout << "Yes" << endl;
            }
        }
    }

    return 0;
}
