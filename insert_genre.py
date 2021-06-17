import pymysql

conn = pymysql.connect(host='localhost', user='root', password='123123123', db='db_201611297')
curs = conn.cursor()

sql = """insert into ugenre(genre, g_index)
        values (%s, %s)"""
filename = './genre.csv'

with open(filename) as data:
    lines = data.readlines()

numbers = []
for line in lines:
    numbers.append(line.split('|'))

print(numbers)
for i in range(len(numbers)-1):
    curs.execute(sql, (numbers[i][0], numbers[i][1]))

conn.commit()
conn.close()