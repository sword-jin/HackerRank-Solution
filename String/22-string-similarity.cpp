#include <iostream>
#include <string>

using namespace std;

typedef long int l;

long int z_func(const string &s)
{
    l sum = 0;
    l length = s.length();
    l Z[length] = {0};
    l left = 0;
    l right = 0;
    for (l k = 1; k < length; ++k)
    {
        if (k > right) {
            left = right = k;
            while (right < length && s[right] == s[right - left]) {
                right ++;
            }
            Z[k] = right - left;
            right --;
        } else {
            int k1 = k - left;
            if (Z[k1] < right - k + 1) {
                Z[k] = Z[k1];
            } else {
                left = k;
                while (right < length && s[right] == s[right - left]) {
                    right ++;
                }
                Z[k] = right - left;
                right --;
            }
        }
    }

    for (l i = 0; i < length; ++i)
    {
        sum += Z[i];
    }

    return sum;
}

int main(int argc, char const *argv[])
{
    int T;
    cin >> T;
    while (T --) {
        string s;
        cin >> s;
        l res = z_func(s);

        cout << s.length() + res << endl;
    }

    return 0;
}


// timeout ...
// #include <iostream>
// #include <string>

// using namespace std;

// long int match(const string &str1, const string &str2)
// {
//     if (str1.empty() || str2.empty()) {
//         return 0;
//     }
//     long int length = str2.length();

//     int maxSubstr = 0;
//     for (long int i = 0; i < length; ++i)
//     {
//         if (str2[i] == str1[i])
//             maxSubstr ++;
//         else
//             break;
//     }

//     return maxSubstr;
// }

// long int stringSimilarity(string s)
// {
//     // soso.
//     long int length = s.length();
//     long int index[length];
//     long int i = 0;
//     long int c= 0;
//     long int count= 0;
//     while (s[i] != '\0') {
//         if (s[i] == s[0]) {
//             index[c] = i;
//             c ++;
//         }
//         i ++;
//     }

//     for (i = 0; i < c; ++i)
//     {
//         string s1 = s.substr(index[i], length);
//         count += match(s, s1);
//     }

//     return count;
// }

// int main(int argc, char const *argv[])
// {
//     int T;
//     cin >> T;
//     while (T --) {
//         string s;
//         cin >> s;
//         cout << stringSimilarity(s) << endl;
//     }

//     return 0;
// }
