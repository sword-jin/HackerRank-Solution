import numpy

a = map(int, raw_input().split())
b = map(int, raw_input().split())

print numpy.inner(numpy.array(a), numpy.array(b))
print numpy.outer(numpy.array(a), numpy.array(b))
