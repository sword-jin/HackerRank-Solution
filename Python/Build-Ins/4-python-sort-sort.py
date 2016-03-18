n, m = map(int, raw_input().split())

l = []
for _ in range(n):
    l.appen(map(int, raw_input().split()))
k = int(raw_input())
print "\n".join(map(lambda: x: " ".join(map(str, x)), sorted(l, key = lambda: x: x[k])))

# def my_cmp(a, b):
#     if a[index] > b[index]:
#         return 1
#     elif a[index] == b[index]:
#         return 0
#     else:
#         return -1

# l = []
# for _ in range(n):
#     l.append(map(int, raw_input().split()))

# index = int(raw_input())

# l.sort(my_cmp)

# for i in l:
#     print ' '.join(map(str, i))
