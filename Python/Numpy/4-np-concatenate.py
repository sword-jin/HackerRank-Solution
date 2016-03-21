import numpy

n, m, p = map(int, raw_input().split())

one = []
two = []
for _ in range(n):
    one.append(map(int, raw_input().split()))

for _ in range(m):
    two.append(map(int, raw_input().split()))

array_1 = numpy.array(one)
array_2 = numpy.array(two)
print numpy.concatenate((array_1, array_2), axis = 0)
