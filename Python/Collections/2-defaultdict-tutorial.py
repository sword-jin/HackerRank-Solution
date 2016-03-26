from collections import defaultdict

d = defaultdict(list)

m, n = map(int, raw_input().split())
[d[raw_input().strip()].append(str(a)) for a in xrange(1, m + 1)]

for a in xrange(n):
    b = raw_input().strip()
    if not d[b]:
        print -1
    else:
        print ' '.join(d[b])
