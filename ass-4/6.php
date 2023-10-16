class Employee:
    def __init__(self, id, name, department, salary):
        self.id=id
        self.name=name
        self.department=department
        self.salary=salary
        
class manager(Employee):
    def __init__(self, id, name, department, salary ,bonus):
        super(manager, self).__init__(id, name, department, salary)
        self.bonus=bonus
        
    def totalsalary(self):
        print(self.name,'got total salary :',self.salary+self.bonus)
        
n=manager('A023','AMAR','GENERAL MANAGEMENT',20000,8000)
m=manager('A025','priya','MARKETIG',25000,6400)
n.totalsalary()
m.totalsalary()