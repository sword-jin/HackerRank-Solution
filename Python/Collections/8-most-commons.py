from __future__ import print_function
from collections import Counter

def letter_cmp(a, b):
    if a[1] > b[1]:
        return -1
    elif a[1] == b[1]:
        if a[0] > b[0]:
            return 1
        else:
            return -1
    else:
        return 1

a = Counter(raw_input()).most_common(3)
a.sort(letter_cmp)

for i in a:
    for j in i:
        print(j, end=" ")
    print("")
