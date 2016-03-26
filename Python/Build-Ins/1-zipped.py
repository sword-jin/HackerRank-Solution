n, m = map(int, raw_input().split())

X = []
for _ in range(m):
    X += [raw_input().strip().split()]

for s in zip(*X):
    print format(sum(map(float, s)) / m, '.1f')
