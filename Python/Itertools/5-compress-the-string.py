from __future__ import print_function
from itertools import groupby

args = raw_input().strip()

for key, group in groupby(args):
    print((len(list(group)), int(key)), end=" ")
