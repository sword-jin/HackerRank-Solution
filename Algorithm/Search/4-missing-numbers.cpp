#include <iostream>
#include <cstdio>

typedef unsigned long ul;

using namespace std;

int main(int argc, char const *argv[])
{
    ul n, m;
    cin >> n;
    int times[10005] = {0};
    for (ul i = 0; i < n; i ++) {
        int temp;
        scanf("%d", &temp);
        times[temp] --;
    }

    cin >> m;
    for (ul i = 0; i < m; i ++) {
        int temp;
        scanf("%d", &temp);
        times[temp] ++;
    }

    for (int i = 0; i < 10005; i ++) {
        if (times[i] >= 1) {
            cout << i << " ";
        }
    }

    return 0;
}
