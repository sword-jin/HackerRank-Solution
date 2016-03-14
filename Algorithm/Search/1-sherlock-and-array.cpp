#include <iostream>
#include <cstdio>

using namespace std;

int main(int argc, char const *argv[])
{
    int T;
    cin >> T;
    while (T --) {
        int N;
        cin >> N;
        int A[N];
        int sum = 0;
        for (int i = 0; i < N; i ++) {
            scanf("%d", &A[i]);
            sum += A[i];
        }

        int right = sum;
        bool exists = false;

        for (int i = 0; i < N; i ++) {
            int left = sum - right;
            right -= A[i];

            if (left == right) {
                exists = true;
                break;
            }
        }

        if (exists) {
            cout << "YES" << endl;
        } else {
            cout << "NO" << endl;
        }
    }

    return 0;
}
