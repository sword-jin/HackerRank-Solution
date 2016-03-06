#include <iostream>
#include <string>
#include <cmath>

using namespace std;

int main(int argc, char const *argv[])
{
    string s, r;
    int times;
    cin >> times;

    for (int i = 0; i < times; ++i)
    {
        cin >> s;
        int len = s.length();

        bool funny = true;
        for (int j = 1; j < len; ++j)
        {
            if (abs(s[len - j] - s[len - j - 1]) != abs(s[j] - s[j - 1])) {
                funny = false;
                break;
            }
        }

        if (funny) {
            cout << "Funny" << endl;
        } else {
            cout << "Not Funny" << endl;
        }
    }

    return 0;
}
