#include<bits/stdc++.h>

using namespace std;

int main()
{
    int t,i;
    cin>>t;
    while(t--)
    {
        string str;
        cin>>str;
        int s = 0;
        for(i=0 ; i< str.length()/2 ; i++)
        {
              s += abs(str[i] - str[str.length()-i-1]);
        }
        cout<<s<<endl;
    }
    return 0;
}
