import re

for i in range(int(raw_input())):
    N = raw_input().strip()
    if N.isalnum() and len(N) == 10:
        if bool(re.search(r'(.*[A-Z]){2,}',N)) and bool(re.search(r'(.*[0-9]){3,}',N)):
            if re.search(r'.*(.).*\1+.*',N):
                print 'Invalid'
            else:
                print 'Valid'
        else:
            print 'Invalid'
    else:
        print 'Invalid'
