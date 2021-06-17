import pymysql

conn = pymysql.connect(host='localhost', user='root', password='123123123', db='db_201611297')

curs = conn.cursor()
sql = """insert into udata(uid, i_id, rate, d_timestamp)
        values (%s, %s, %s, %s)"""

filename = './u.data.tsv'
with open(filename) as data:
    lines = data.readlines()

numbers = []
for line in lines:
    numbers.append(line.split('\t'))

print(numbers[0][3])

for i in range(len(numbers)-1):
    curs.execute(sql, (numbers[i][0], numbers[i][1],numbers[i][2], numbers[i][3]))
    print(i)

conn.commit()
conn.close()