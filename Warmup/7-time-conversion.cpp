#include <iostream>
#include <cstdio>

using namespace std;

int main(int argc, char const *argv[])
{
    string s;
    cin >> s;

    int n = s.length();
    int hh, mm, ss;
    hh = (s[0] - '0') * 10 + (s[1] - '0');
    mm = (s[3] - '0') * 10 + (s[4] - '0');
    ss = (s[6] - '0') * 10 + s[7] - '0';

    if(hh<12&&s[8]=='P')
       hh+=12;
    if(hh==12 && s[8]=='A')
        hh=0;

    printf("%02d:%02d:%02d\n",hh,mm,ss);

    return 0;
}

