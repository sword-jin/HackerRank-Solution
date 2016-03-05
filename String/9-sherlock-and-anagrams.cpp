#include <iostream>
#include <string>
#include <map>
#include <algorithm>

using namespace std;

int main(int argc, char const *argv[])
{
    int T;
    cin >> T;

    while (T --) {
        string s;
        cin >> s;
        int length = s.length();

        int step = 1;
        map<string, int> anagrams;

        while (step < length) {
            for (int i = 0; i < length - step + 1; ++i)
            {
                string str = s.substr(i, step);
                sort(str.begin(), str.end());

                if (anagrams.find(str) != anagrams.end())
                {
                    anagrams[str] ++;
                }
                else
                {
                    anagrams[str] = 1;
                }
            }
            step ++;
        }

        int count = 0;
        map<string, int>::iterator it;
        for (it = anagrams.begin(); it != anagrams.end(); it ++)
        {
            if (it->second >= 2) {
                count += (it->second * (it->second - 1)) / 2;
            }
        }

        cout << count << endl;
    }

    return 0;
}
