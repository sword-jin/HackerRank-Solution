#include <iostream>
#include <vector>
#include <algorithm>

using namespace std;

int main(int argc, char const *argv[])
{
    int T;
    cin >> T;

    while (T --) {
        string str;
        cin >> str;

        int ans = 0;
        for (int i = 0; i < str.length() - 1; ++i)
        {
            if (str[i] == str[i + 1])
                ans ++;
        }

        cout << ans << endl;
    }

    return 0;
}
