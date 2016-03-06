#include <iostream>
#include <vector>
#include <algorithm>

using namespace std;

int main(int argc, char const *argv[])
{
    string str;
    cin >> str;
    int A[26];
    for (int i = 0; i < 26; ++i)
    {
        A[i] = 0;
    }
    for (int i = 0; i < str.length(); ++i)
    {
        A[str[i] - 'a'] ++;
    }

    int sum = 0;
    for (int i = 0; i < 26; ++i)
    {
        sum = sum + (A[i] % 2);
    }

    if (sum >= 2)
    {
        cout << "NO" << endl;
    }
    else
    {
        cout << "YES" << endl;
    }

    return 0;
}
