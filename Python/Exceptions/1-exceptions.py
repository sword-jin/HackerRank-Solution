for _ in range(int(raw_input())):
    try:
        a, b = map(int, raw_input().split())
        print a // b
    except ZeroDivisionError as e:
        print "Error Code:", e
    except ValueError as e:
        print "Error Code:", e

