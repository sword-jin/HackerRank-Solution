#include <cmath>
#include <cstdio>
#include <vector>
#include <iostream>
#include <algorithm>

using namespace std;

int main(int argc, char const *argv[])
{
    int n;
    vector<int> v;
    cin >> n;
    while (n --) {
        int temp;
        cin >> temp;
        v.push_back(temp);
    }

    sort(v.begin(), v.end());

    for (int i = 0; i < v.size(); i ++) {
        cout << v[i] << " ";
    }

    return 0;
}
