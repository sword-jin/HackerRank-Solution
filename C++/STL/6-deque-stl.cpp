#include <iostream>
#include <algorithm>
#include <cstdio>
#include <deque>

using namespace std;

void printKMax(int arr[], int n, int k){
    deque <int> d(k);

    int i;
    // get max key.
    for (i = 0; i < k; i ++) {
        while ((! d.empty()) && arr[i] >= arr[d.back()]) {
            d.pop_back();
        }

        d.push_back(i);
    }

    for (; i < n; i ++) {
        cout << arr[d.front()] << " ";

        while ( (!d.empty()) && d.front() <= i - k)
            d.pop_front();

        while ( (!d.empty()) && arr[i] >= arr[d.back()])
            d.pop_back();

        d.push_back(i);
    }

    printf("%d\n", arr[d.front()]);
}

int main(){

   int t;
   cin >> t;
   while(t>0) {
      int n,k;
       cin >> n >> k;
       int i;
       int arr[n];
       for(i=0;i<n;i++)
            cin >> arr[i];
       printKMax(arr, n, k);
       t--;
     }
     return 0;
}
