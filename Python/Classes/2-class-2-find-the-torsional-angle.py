import math

class Points():
    def __init__(self, x, y, z):
        self.x = x
        self.y = y
        self.z = z

    def __sub__(self, O):
        x = self.x  - O.x
        y = self.y  - O.y
        z = self.z  - O.z
        return Points(x, y, z)

    def dot(self, O):
        x = self.x * O.x
        y = self.y * O.y
        z = self.z * O.z
        return x + y + z

    def cross(self, O):
        x = self.y * O.z - self.z * O.y
        y = self.z * O.x - self.x * O.z
        z = self.x * O.y - self.y * O.x
        return Points(x, y, z)

    def absolute_scale(self):
        return pow((self.x ** 2 + self.y ** 2 + self.z ** 2), .5)

def solve(A, B, C, D):
    A, B, C, D = Points(*A), Points(*B), Points(*C), Points(*D)
    X = (B - A).cross(C - B)
    Y = (C - B).cross(D - C)
    angle = math.acos(X.dot(Y) / (X.absolute_scale() * Y.absolute_scale()))
    print "%.2f" % math.degrees(angle)

points = list()

for _ in range(4):
    points.append(map(float, raw_input().split()))

solve(*points)
