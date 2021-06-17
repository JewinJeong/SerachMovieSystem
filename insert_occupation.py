import pymysql

conn = pymysql.connect(host='localhost', user='root', password='Wpdnls1020!', db='db_201611297')

curs = conn.cursor()
sql = """insert into uoccupation(occup)
        values (%s)"""

filename = './u.occupation.tsv'
with open(filename) as data:
    lines = data.readlines()

numbers = []
for line in lines:
    numbers.append(line.split())

print(len(numbers))

for i in range(len(numbers)):
    curs.execute(sql, (numbers[i][0]))

conn.commit()
conn.close()