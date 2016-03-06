// ⌊b‾√⌋−⌈a‾√⌉+1
#include <iostream>
#include <cmath>

using namespace std;

int main(int argc, char const *argv[])
{
    int t;
    cin >> t;
    while(t --) {
        int a, b, result;
        cin >> a >> b;

        result = floor(sqrt(b)) - ceil(sqrt(a)) + 1;
        cout << result << endl;
    }

    return 0;
}
