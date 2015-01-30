import sys

#test class
class CName:
    def func1(self, par1, par2 = 10, par3 = None):
        return par1 + par2 * par3;
    def func2(self, l = [], count = 0):
        return l[:count]
        
c = CName()

c.func1(