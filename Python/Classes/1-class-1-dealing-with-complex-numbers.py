import math

class Complex():
    def __init__(self, aa, bb):
        self.a = aa
        self.b = bb
    def __add__(self, c):
        a = self.a + c.a
        b = self.b + c.b
        return Complex(a, b)
    def __sub__(self, c):
        a = self.a - c.a
        b = self.b - c.b
        return Complex(a, b)
    def __mul__(self, c):
        a = self.a * c.a - self.b * c.b
        b = self.a * c.b + self.b * c.a
        return Complex(a, b)
    def __div__(self, c):
        x = c.a ** 2 + c.b ** 2
        y = self * Complex(c.a, -c.b)
        a = y.a / x
        b = y.b / x
        return Complex(a, b)
    def mod(self):
        a = math.sqrt(self.a ** 2 + self.b ** 2)
        return Complex(a, 0)
    def __str__(self):
        if self.b == 0:
            result = "%.2f+0.00i" % self.a
        elif self.a == 0:
            if self.b > 0:
                result = "0.00+%.2fi" % self.b
            elif self.b < 0:
                result = "0.00%.2fi" % self.b
        elif self.b > 0:
            result = "%.2f+%.2fi" % (self.a, self.b)
        else:
            result = "%.2f-%.2fi" % (self.a, abs(self.b))
        return result


input_1 = map(float, raw_input().split())
input_2 = map(float, raw_input().split())

a = Complex(input_1[0], input_1[1])
b = Complex(input_2[0], input_2[1])

print a + b
print a - b
print a * b
print a / b
print a.mod()
print b.mod()
