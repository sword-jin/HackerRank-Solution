import numpy

n, m = raw_input().split()

lines = []
for _ in range(int(n)):
    lines.append(map(int, raw_input().split()))

my_array = numpy.array(lines)
print numpy.max(numpy.min(my_array, axis=1))
