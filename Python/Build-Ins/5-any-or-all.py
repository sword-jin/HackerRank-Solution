n, nums = int(raw_input()), raw_input().split()

print all([int(s) > 0 for s in nums]) and any([s == s[::-1] for s in nums])
