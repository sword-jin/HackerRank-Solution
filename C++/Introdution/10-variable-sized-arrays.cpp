#include <iostream>

using namespace std;

int main() {
    int n, q;
    cin >> n >> q;
    int **v = new int*[n]; // 2D matrix
    for(int i=0;i<n;i++){
        int k;
        cin >> k;
        v[i] = new int[k];
        for(int j=0;j<k;j++){
            int x; cin >> x;
            v[i][j] = x;
        }
    }
    for(int i=0;i<q;i++){
        int a, b; cin >> a >> b;
        cout << v[a][b]<<endl;
    }
    return 0;
}
