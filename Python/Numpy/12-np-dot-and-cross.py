import numpy

n = int(raw_input())

one = []
two = []
for _ in range(n):
    one.append(map(int, raw_input().split()))

for _ in range(n):
    two.append(map(int, raw_input().split()))

print numpy.dot(numpy.array(one), numpy.array(two))
