#include <iostream>
#include <string>

using namespace std;

int main(int argc, char const *argv[])
{
    int T;
    cin >> T;

    while (T --) {
        bool exists = false;
        string letters = "abcdefghijklmnopqrstuvwxyz";

        string str1;
        string str2;
        cin >> str1 >> str2;

        for (int i = 0; i < 26; ++i)
        {
            if (str1.find(letters[i]) != string::npos && str2.find(letters[i])  != string::npos) {
                exists = true;
                break;
            }
        }

        if (exists)
        {
            cout << "YES\n";
        }
        else
        {
            cout << "NO\n";
        }
    }

    return 0;
}
