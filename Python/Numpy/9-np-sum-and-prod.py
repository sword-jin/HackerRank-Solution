import numpy

lines = []
n, m = map(int, raw_input().split())
for _ in range(n):
    lines.append(map(int, raw_input().split()))

my_array = numpy.array(lines)

print numpy.prod(numpy.sum(my_array, axis = 0))
