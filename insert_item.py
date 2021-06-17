import pymysql

conn = pymysql.connect(host='localhost', user='root', password='123123123', db='db_201611297')
curs = conn.cursor()
sql = """insert into userinf(uid,uage,ugender,uoccupation,uzipcode)
            values (%s, %s, %s, %s, %s)"""
filename = './u.item.tsv'

with open(filename) as data:
    lines = data.readlines()

numbers = []
for line in lines:
    numbers.append(line.split('|'))

print(len(numbers))

for i in range(len(numbers)):
    curs.execute(sql, (numbers[i][0], numbers[i][1], numbers[i][2],
numbers[i][3], numbers[i][4]))

conn.commit()
conn.close()