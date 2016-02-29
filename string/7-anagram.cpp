#include <iostream>
#include <string>
#include <cmath>

using namespace std;

int main(int argc, char const *argv[])
{
    int T;
    cin >> T;

    while (T --) {
        int count = 0;
        int letter[26] = {0};
        string s;
        cin >> s;

        int length = s.length();

        if (length % 2 == 1) {
            cout << -1 << endl;
            continue;
        }

        for (int i = 0; i < length / 2; ++i)
        {
            letter[s[i] - 'a'] ++;
        }

        for (int i = length / 2; i < length; ++i)
        {
            letter[s[i] - 'a'] --;
        }

        for (int i = 0; i < 26; ++i)
        {
            count += abs(letter[i]);
        }

        cout << count / 2 << endl;
    }

    return 0;
}
