import numpy

my_array = numpy.array(map(float, raw_input().split()))
print numpy.floor(my_array)
print numpy.ceil(my_array)
print numpy.rint(my_array)
