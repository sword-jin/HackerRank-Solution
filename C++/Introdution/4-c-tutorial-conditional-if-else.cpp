#include <iostream>
#include <map>
#include <string>

using namespace std;

int main(int argc, char const *argv[])
{
    int n;
    cin >> n;

    map<int, string> nums = {
        {1, "one"},
        {2, "two"},
        {3, "three"},
        {4, "four"},
        {5, "five"},
        {6, "six"},
        {7, "seven"},
        {8, "eight"},
        {9, "nine"}
    };

    if (n >= 1 && n <= 9) {
        auto search = nums.find(n);
        cout << search->second << endl;
    } else {
        cout << "Greater than 9" << endl;
    }

    return 0;
}
