from collections import OrderedDict

goods = OrderedDict()

for _ in range(int(raw_input())):
    args = raw_input().strip().split()
    name = ' '.join(args[:-1])
    if name in goods:
        goods[name] += int(args.pop())
    else:
        goods[name] = int(args.pop())

for g in goods:
    print "%s %d" % (g, goods[g])

# for name, price in goods.items():
#     print name, price
