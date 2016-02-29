#include <iostream>
#include <string>

using namespace std;

int main(int argc, char const *argv[])
{
    int n;
    int count = 0;
    int letter[26] = {0};
    cin >> n;

    for (int i = 0; i < n; ++i)
    {
        string str;
        cin >> str;

        for (int j = 0; j < str.length(); ++j)
        {
            if (letter[str[j] - 'a'] == i)
                letter[str[j] - 'a'] ++;
        }
    }

    for (int i = 0; i < 26; ++i)
    {
        if (letter[i] == n)
            count ++;
    }

    cout << count << endl;

    return 0;
}
