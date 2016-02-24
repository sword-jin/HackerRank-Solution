#include <iostream>

using namespace std;

int main(int argc, char const *argv[])
{
    int T, N, i;
    cin >> T;
    while(T --) {
        cin >> N;
        long long int s = 1;
        for (i = 1; i <= N; i ++) {
            if (i % 2 == 0) {
                s ++;
            } else {
                s *= 2;
            }
        }

        cout << s << endl;
    }

    return 0;
}
