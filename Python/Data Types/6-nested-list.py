#!/usr/bin/python

a = [[raw_input(), float(raw_input())] for _ in range(int(raw_input()))]
s = sorted(set(x[1] for x in a))

for name in sorted(x[0] for x in a if x[1] == s[1]):
    print name

# stupied
# n = int(raw_input())

# stus = []

# for _ in range(n):
#     name = raw_input()
#     grade = float(raw_input())
#     stus.append([name, grade])

# stus.sort(lambda x, y: cmp(x[1], y[1]))
# print stus
# min = stus[0][1]
# stus = filter(lambda x: x[1] != min, stus)
# print stus
# min = stus[0][1]

# results = filter(lambda x: x[1] == min, stus)
# print stus
# results.sort(lambda x, y: cmp(x[0], y[0]))
# print stus

# for s in results:
#     print s[0]
