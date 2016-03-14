#include <iostream>
#include <vector>

typedef unsigned long long ull;
using namespace std;

int main(int argc, char const *argv[])
{
    int n, q;
    int type;
    int size;
    int lastans = 0;
    ull x, y;
    cin >> n >> q;
    vector< vector<ull> > nums(n, vector<ull>());

    while (q --) {
        cin >> type >> x >> y;
        switch(type) {
            case 1:
                nums[(x ^ lastans) % n].push_back(y);
                break;

            case 2:
                size = nums[(x ^ lastans) % n].size();
                lastans = nums[(x ^ lastans) % n][y % size];

                cout << lastans << endl;
                break;
        }
    }

    return 0;
}
