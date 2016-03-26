import re

s = raw_input().rstrip()
print bool(re.search(r'^[1-9][0-9]{5}$', s) and len(re.findall(r'(.)(?=.\1)', s)) < 2)
