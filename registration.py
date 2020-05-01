# problem 3
# JSON
import sqlite3
import json

conn=sqlite3.connect("user.db")

c=conn.cursor()

x =input("Enter in JSON format")

y = json.loads(x)

username=y["username"]
password=y["password"]

c.execute("INSERT INTO register VALUES(?,?)",(username,password))

conn.commit()
conn.close()
