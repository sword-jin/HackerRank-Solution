import numpy

one = []
two = []

n, m = map(int, raw_input().split())
for _ in range(n):
    one.append(raw_input().split())
for _ in range(n):
    two.append(raw_input().split())

a = numpy.array(one, int)
b = numpy.array(two, int)

print numpy.add(a, b)
print numpy.subtract(a, b)
print numpy.multiply(a, b)
print numpy.divide(a, b)
print numpy.mod(a, b)
print numpy.power(a, b)
