import re

for s in filter(lambda s: len(s) > 0, re.split("[,\.]*", raw_input())):
    print s
