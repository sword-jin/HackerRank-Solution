#include <sstream>
#include <string>
#include <vector>
#include <iostream>

using namespace std;

vector<int> parseInts(string str) {
    vector<int> integers;

    string s = "";
    for (int i = 0; i < str.length(); i ++) {
        if (str[i] != ',') {
            s += string(1, str[i]);
        } else {
            stringstream ss(s);
            int x;
            ss >> x;
            integers.push_back(x);
            s = "";
        }
    }
    stringstream ss(s);
    int x;
    ss >> x;
    integers.push_back(x);

    return integers;
}

int main() {
    string str;
    cin >> str;
    vector<int> integers = parseInts(str);
    for(int i = 0; i < integers.size(); i++) {
        cout << integers[i] << "\n";
    }

    return 0;
}
