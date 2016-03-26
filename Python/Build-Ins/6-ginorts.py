# one solution.
from __future__ import print_function
# order="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1357902468"
# print(*sorted(raw_input().strip(), key=order.index), sep="")

# two solution
print(*sorted(raw_input(), key=lambda c: (c in '02468', c in '13579', c.isupper(), c.islower(), c)), sep='')
