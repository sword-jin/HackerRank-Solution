#include <cstdio>
#include <string>
#include <sstream>
#include <vector>
#include <algorithm>

using namespace std;

template <typename T> string NTS (T Number)
{
    ostringstream ss;
    ss << Number;
    return ss.str();
}

vector <int> nums;

int solve() {
    for (int i = 100; i <= 999; i ++) {
        for (int j = i + 1; j <= 999; j ++) {
            int num = i * j;
            if (num > 100000 && num < 1000000) {
                string s = NTS(num);
                string t = s;
                reverse(s.begin(), s.end());
                if (s == t) {
                    nums.push_back(num);
                }
            }
        }
    }

    return nums.size();
}

int main(int argc, char const *argv[])
{
    int size = solve();
    sort(nums.begin(), nums.end());
    int T;
    scanf("%d", &T);

    while (T --) {
        int num;
        scanf("%d", &num);
        for (int i = 0;i < size; i ++) {
            if (nums[i] > num) {
                printf("%d\n", nums[i - 1]);
                break;
            }
        }
    }

    return 0;
}
