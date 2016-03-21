import numpy

n, m = raw_input().split()
lines = []
for _ in range(int(n)):
    lines.append(map(int, raw_input().split()))

my_array = numpy.array(lines)
print numpy.transpose(my_array)
print my_array.flatten()
