import calendar

m, d, y = map(int, raw_input().strip().split())

print calendar.day_name[calendar.weekday(y, m, d)].upper()

# import calendar

# day = {0:'MONDAY', 1:'TUESDAY', 2:'WEDNESDAY', 3:'THURSDAY', 4:'FRIDAY', 5:'SATURDAY', 6:'SUNDAY'}

# m,d,y = map(int,raw_input().split())
# print day[calendar.weekday(y,m,d)]
