import re

REGEX = re.compile(r"^(\+|-)?\d{0,}\.\d{1,}$")
for _ in range(int(raw_input())):
    print bool(REGEX.match(raw_input()))
