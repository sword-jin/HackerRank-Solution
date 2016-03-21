phonelist = []
for _ in range(int(raw_input())):
    phonelist.append(raw_input().rstrip())

def PhoneFormat(func):
    def PhoneToFormat(phonelist):
        for i in range(len(phonelist)):
            phonelist[i] = '+91 ' + phonelist[i][-10:-5] + ' ' + phonelist[i][-5:]
        func(phonelist)
    return PhoneToFormat

def phone(phonelist):
    print "\n".join(sorted(phonelist))
output = PhoneFormat(phone)
output(phonelist)

# def foo():
#     return 1
#
# print foo()

# a_string = "This is a global variable"
# def foo():
#     a_string = "test"
#     print locals()
# foo()
# print a_string

# def foo():
#     x = 1
# foo()
# print x

# def foo(x):
#     print locals()
# foo(1)

# def foo(x, y = 0):
#     return x - y
# print foo(3, 1)
# print foo(3)
# print foo(x = 1, y = 3)
# print foo(y = 3, x = 1)

# def outer():
#     x = 1
#     def inner():
#         print x
#     inner()
# outer()

# print issubclass(int, object)

# def foo():
#     pass
# print foo.__class__
# print isubclass(foo.__class, object)

# def add(x, y):
#     return x + y
# def sub(x, y):
#     return x - y
# def apply(func, x, y):
#     return func(x, y)
# print apply(add, 2, 1)
# print apply(sub, 2, 1)

# def outer():
#     def inner():
#         print "Inner function"
#     return inner
#
# foo = outer()
# print foo
# foo()

# def outer(x):
#     def inner():
#         print x
#     return inner
#
# print1 = outer(1)
# print2 = outer(2)
#
# print1()
# print2()

# def outer(some_func):
#     def inner():
#         print "before some_func"
#         ret = some_func()
#         return ret + 1
#     return inner
# def foo():
#     return 1
# decorated = outer(foo)
# print decorated()

# class Coordinate(object):
#     def __init__(self, x, y):
#         self.x = x
#         self.y = y
#     def __repr__(self):
#         return "Coord: " + str(self.__dict__)
#
# def add(a, b):
#     return Coordinate(a.x + b.x, a.y + b.y)
# def sub(a, b):
#     return Coordinate(a.x - b.x, a.y - b.y)
# one = Coordinate(100, 200)
# two = Coordinate(300, 200)
#
# print add(one, two)

# def logger(func):
#     def inner(*args, **kwargs): #1
#         print "Arguments were: %s, %s" % (args, kwargs)
#         return func(*args, **kwargs) #2
#     return inner
#
# @logger
# def foo1(x, y = 1):
#     return x * y
# @logger
# def foo2():
#     return 2
# print foo1(5, 4)
# print foo1(1)
# print foo2()
