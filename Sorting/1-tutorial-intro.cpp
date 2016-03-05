#include <iostream>
#include <string>

using namespace std;

int main(int argc, char const *argv[])
{
    int n, V;
    cin >> V >> n;

    int temp = 0;
    for (int i = 0; i < n; ++i)
    {
        cin >> temp;
        if (temp == V)
        {
            cout << i << endl;
            return 0;
        }
    }

    cout << -1 << endl;

    return 0;
}
