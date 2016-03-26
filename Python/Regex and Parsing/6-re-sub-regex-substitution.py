import re

def change(match):
    if match.group(1) == '&&':
        return 'and'
    else:
        return 'or'

for _ in range(int(raw_input())):
    print re.sub(r"(?<= )(\|\||&&)(?= )", change, raw_input())
