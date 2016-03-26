# from operator import itemgetter
# from itertools import groupby
#
# people = list()
# for _ in range(int(raw_input())):
#     people.append(raw_input().split())
#
# people.sort(key = itemgetter(2))
#
# for el, items in groupby(people, itemgetter(2)):
#     for i in items:
#         if i[3] == 'M':
#             print "Mr.", i[0], i[1]
#         else:
#             print "Ms.", i[0], i[1]

def formal(ns):
    first, last, age, sex = ns
    return ('Mr. ' if sex == 'M' else 'Ms. ') + first + ' ' + last

def std(f):
    def inner(ns):
        return map(formal, f(ns))
    return inner

@std
def nsort(ns):
    return [x[1] for x in sorted(enumerate(ns), key=lambda x: (x[1][2], x[0]))]

for x in nsort([raw_input().split() for x in range(int(raw_input()))]):
    print x
