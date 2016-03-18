from collections import Counter

X = int(raw_input())
sizes = Counter(map(int, raw_input().strip().split()))
N = int(raw_input())

income = 0

for i in range(N):
    size, price = map(int, raw_input().split())
    if sizes[size]:
        income += price
        sizes[size] -= 1

print income
