// test#6 0.00
#include <iostream>
#include <vector>
#include <algorithm>

using namespace std;

int main(){
    int n;
    cin >> n;
    vector<int> arr(n);
    for(int arr_i = 0;arr_i < n;arr_i++){
       cin >> arr[arr_i];
    }

    int mx = *max_element(arr.begin(), arr.end());
    while (mx > 0) {
        int mn = mx;
        int cuts = 0;

        for (int i = 0; i < n; ++i)
        {
            if (arr[i] > 0) {
                mn = min(mn, arr[i]);
            }
        }

        for (int i = 0; i < n; ++i)
        {
            if (arr[i] > 0) {
                cuts ++;
                arr[i] -= mn;
            }
        }

        cout << cuts << endl;
        mx = *max_element(arr.begin(), arr.end());
    }

    return 0;
}
