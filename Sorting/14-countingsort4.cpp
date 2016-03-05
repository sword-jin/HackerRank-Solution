#include <iostream>
#include <string>
#include <vector>

using namespace std;

vector <string> a[100];
string str;
int n, i, j, x;

int main(int argc, char const *argv[])
{
    cin >> n;
    for (i = 0; i < n / 2; ++i)
    {
        cin >> x;
        cin >> str;
        a[x].push_back("-");
    }

    for (; i < n; ++i)
    {
        cin >> x;
        cin >> str;
        a[x].push_back(str);
    }

    for (i = 0; i < 100; ++i)
    {
        x = a[i].size();
        for (int j = 0; j < x; ++j)
        {
            cout << a[i][j] << " ";
        }
    }

    return 0;
}
