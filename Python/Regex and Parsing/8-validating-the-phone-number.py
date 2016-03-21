import re

NUMBER_REGEX = re.compile(r"^[789]\d{9}$")

for _ in range(int(raw_input())):
    print "YES" if re.match(NUMBER_REGEX, raw_input()) else "NO"
