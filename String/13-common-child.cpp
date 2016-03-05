#include <iostream>
#include <algorithm>
#include <string>

using namespace std;

int main(int argc, char const *argv[])
{
    string s1, s2;
    cin >> s1 >> s2;
    int length = s1.length();
    int **array = new int*[length + 1];
    for (int i = 0; i < length + 1; ++i)
    {
        array[i] = new int[length + 1];
    }

    for (int i = 0; i < length; ++i)
    {
        for (int j = 0; j < length; ++j)
        {
            if (s1[i] == s2[j])
            {
                array[i + 1][j + 1] = array[i][j] + 1;
            }
            else
            {
                array[i + 1][j + 1] = max(array[i + 1][j], array[i][j + 1]);
            }
        }
    }

    cout << array[length][length] << endl;

    return 0;
}
