import re

for _ in range(int(raw_input())):
    try:
        re.compile(raw_input())
        is_valid = True
    except re.error:
        is_valid = False

    print is_valid
