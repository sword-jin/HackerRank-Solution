#include <string>
#include <iostream>
#include <map>

using namespace std;

int main() {
    int n, type, age;
    string name;
    map<string, int> m;
    cin >> n;
    while (n --) {
        cin >> type >> name;
        if (type == 1) {
            cin >> age;
            map<string, int>::iterator it = m.find(name);
            if (it != m.end()) {
                m[name] += age;
            } else {
                m.insert(make_pair(name, age));
            }
            continue;
        } else if (type == 2) {
            m.erase(name);
            continue;
        } else if (type == 3) {
            map<string, int>::iterator it = m.find(name);
            if (it != m.end()) {
                cout << m[name] << endl;
            } else {
                cout << 0 << endl;
            }
        }
    }

    return 0;
}
