import re

for _ in range(int(raw_input())):
    m = re.findall(r'(?!^)#([a-f0-9]{6}|[a-f0-9]{3})[^\n]', raw_input(), re.IGNORECASE)
    if m:
        for s in m:
            print '#' + s
