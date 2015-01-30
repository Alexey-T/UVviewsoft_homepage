import sys

#test class
class CName:
    prop1 = 0
    prop2 = 1
    def __init__(self, val1, val2):
        pass
    def func1(self, par1, par2 = 10, par3 = None):
        return par1 + par2 * par3;
    def func2(self, l = [], count = 0):
        return l[:count]
        
c = CName()
c.prop1 = 0
c.func1(