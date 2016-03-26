import re

m = re.findall(r'(?<=[qwrtypsdfghjklzxcvbnm])([aeiou]{2,})(?=[qwrtypsdfghjklzxcvbnm])', raw_input().strip(), re.IGNORECASE)

if m:
    for s in m:
        print s
else:
    print -1
