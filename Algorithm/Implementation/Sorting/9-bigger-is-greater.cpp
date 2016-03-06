#include <iostream>
#include <algorithm>

using namespace std;

int main(int argc, char const *argv[])
{
    int T;
    cin >> T;
    while (T --) {
        string s;
        cin >> s;
        string prev = s;
        if (next_permutation(s.begin(), s.end()))
        {
            cout << s << endl;
        }
        else
        {
            cout << "no answer" << endl;
        }
    }

    return 0;
}
