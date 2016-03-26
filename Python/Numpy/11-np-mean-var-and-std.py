import numpy

n, m = map(int, raw_input().split())
lines = []

for _ in range(n):
    lines.append(map(int, raw_input().split()))

my_array = numpy.array(lines)
print numpy.mean(my_array, axis=1)
print numpy.var(my_array, axis=0)
print numpy.std(my_array)
