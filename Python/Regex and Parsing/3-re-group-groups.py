import re
m = re.search(r'(\w(?!_))\1+', raw_input().strip())

print m.group(1) if m else -1
