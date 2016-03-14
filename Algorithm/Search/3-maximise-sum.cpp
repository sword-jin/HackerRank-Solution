#include <cstdio>
#include <vector>
#include <set>

using namespace std;

typedef unsigned long long ull;

ull find_result(const vector<ull> &v, ull m) {
    vector<ull> prefix;
    set<ull> s;

    // get prefix array
    size_t v_size = v.size();
    ull tmp = 0;
    for (size_t i=0; i<v_size; ++i) {
        tmp += v[i];
        tmp %= m;
        prefix.push_back(tmp);
    }

    ull res = 0;
    for (size_t i=0; i<v_size; ++i) {
        auto it = s.upper_bound(prefix[i]);
        if (it != s.end()) {
            tmp = (prefix[i] - *it + m) % m;
            res = max(res, tmp);
        }
        s.insert(prefix[i]);
        res = max(res, prefix[i]);
    }
    return res;
}

int main()
{
    int cnt;
    scanf("%d", &cnt);
    vector<ull> v;
    ull n, m, tmp;
    for (int i=0; i<cnt; ++i) {
        scanf("%llu %llu", &n, &m);
        v.clear();
        for (int j=0; j<n; ++j) {
            scanf("%llu", &tmp);
            v.push_back(tmp);
        }
        printf("%llu\n", find_result(v, m));
    }
    return 0;
}
