#include<iostream>
#include<vector>

using namespace std;

int main()
{
    int n;
    cin>>n;
    vector<int>a(n);
    for (int i = 0; i < n; ++i)
    {
        cin>>a[i];
    }
    long long sum = 0;
    for (int i = 0; i < n; ++i)
    {
        sum += a[i];
    }
    cout << sum << endl;
}
