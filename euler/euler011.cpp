#include <cstdio>
#include <vector>

#define MAX(a, b)(a > b ? (a) : (b))
typedef unsigned long long ull;

using namespace std;

int main(int argc, char const *argv[])
{
    vector <vector<int> > nums(20, vector<int>(20));

    for (int i = 0; i < 20; i ++) {
        for (int j = 0; j < 20; j ++) {
            scanf("%d", &nums[i][j]);
        }
    }

    ull result = 1;
    for (int i = 0; i < 20; i ++) {
        for (int j = 0; j < 20; j ++) {
            if (i < 17 && j < 17) {
                result = MAX(nums[i][j] * nums[i][j + 1] * nums[i][j + 2] * nums[i][j + 3], result);
                result = MAX(nums[i][j] * nums[i + 1][j] * nums[i + 2][j] * nums[i + 3][j], result);
                result = MAX(nums[i][j] * nums[i + 1][j + 1] * nums[i + 2][j + 2] * nums[i + 3][j + 3], result);
                result = MAX(nums[i][j + 3] * nums[i + 1][j + 2] * nums[i + 2][j + 1] * nums[i + 3][j], result);
            }
            if (j >= 17 && i < 17) {
                result = MAX(nums[j][i] * nums[j][i + 1] * nums[j][i + 2] * nums[j][i + 3], result);
            }
            if (i >= 17 && j < 17) {
                result = MAX(nums[i][j] * nums[i][j + 1] * nums[i][j + 2] * nums[i][j + 3], result);
            }
        }
    }

    printf("%llu\n", result);

    return 0;
}
