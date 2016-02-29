#include <iostream>
#include <string>
#include <cmath>

using namespace std;

int main(int argc, char const *argv[])
{
    string one;
    string two;
    int count = 0;

    cin >> one >> two;

    int some[26] = {0};
    int other[26] = {0};

    for (int i = 0; i < one.length(); ++i)
    {
        some[one[i] - 'a'] ++;
    }

    for (int i = 0; i < two.length(); ++i)
    {
        other[two[i] - 'a'] ++;
    }

    for (int i = 0; i < 26; ++i)
    {
        count += abs(some[i] - other[i]);
    }

    cout << count << endl;

    return 0;
}
