// c++ faster than php
#include <iostream>

using namespace std;

int main(){
    int t;
    cin >> t;
    while (t --) {
        int n;
        cin >> n;

        int i, k;
        string s;
        for (i = n; i >= 0; i -= 5) {
            if (i % 3 == 0 && (n - i) % 5 == 0) {
                s = "";
                for (k = 0; k < i; k ++)
                    s += '5';
                for (k = 0; k < n - i; k ++)
                    s += '3';
                break;
            }
        }
        if(s == "")
            cout << "-1" << endl;
        else
            cout << s << endl;
    }
    return 0;
}
